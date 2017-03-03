<?php

namespace AppBundle\Repository;

/**
 * ArticoloRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticoloRepository extends \Doctrine\ORM\EntityRepository
{
    public function RicercaAttributiArticoliProducibiliByValori($em,$idproducibile, $valori ){
       $numValori=count($valori);
       if($numValori==0){
           $query=' SELECT DISTINCT att.id as idattributo, att.Nome,p.Nome as producibile, p.Descrizione
                    FROM producibile p, attributi att, gruppo__attributi ga
                    WHERE  p.GruppoId=ga.GruppoId AND ga.AttributoId=att.id AND p.id='.$idproducibile.'
                    LIMIT 0,1';
       }else{
            $str="(".$valori[0];
            for ($i=1;$i<$numValori;$i++){
                $str=$str.",".$valori[$i];
            }
            $str=$str.")";
            $query ='
                     SELECT DISTINCT att.id as idattributo, att.Nome,p.Nome as producibile, p.Descrizione
                     FROM articolo a, producibile p, attributi att, gruppo__attributi ga, ( SELECT va.ArticoloId as art, GROUP_CONCAT(va.ValoreId) 
                                                                                            FROM valori__articolo va
                                                                                            WHERE va.ValoreId in '.$str.' 
                                                                                            GROUP BY (va.ArticoloId)
                                                                                            HAVING COUNT(*)='.$numValori.') as ris
                     WHERE a.id= ris.art and a.ProducibileId=p.id AND p.GruppoId=ga.GruppoId AND ga.AttributoId=att.id
                     LIMIT '.$numValori.',1';
        }
        $stmt = $em->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
    
    public function ArticoliProducibiliByValori($em,$valori){
        $str="(".$valori[0];
        $numValori=count($valori);
            for ($i=1;$i<$numValori;$i++){
                $str=$str.",".$valori[$i];
            }
            $str=$str.")";
            $query ='
                        SELECT va.ArticoloId as art, GROUP_CONCAT(va.ValoreId) ,a.*, GROUP_CONCAT(v.Nome) as valori, GROUP_CONCAT(att.Nome) as specifica
                        FROM valori__articolo va, articolo a, attributi att, valore v
                        WHERE va.ValoreId in '.$str.'  and va.ArticoloId=a.id and v.id=va.ValoreId and v.AttributoId=att.id
                        GROUP BY (va.ArticoloId)
                        HAVING COUNT(*)='.$numValori;
        
        $stmt = $em->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function ConfermaArticolo($articolo){
        
        $ris[0]=array("tipo"=> "Articolo","contenuto"=>$articolo[0]['Denominazione']);
        $ris[1]=array("tipo"=>"Codice","contenuto"=>$articolo[0]['id']);
        $ris[2]=array("tipo"=>"Prezzo","contenuto"=>$articolo[0]['PrezzoVendita']);
        $valori=explode(",",$articolo[0]['valori']);
        $specifiche=explode(",",$articolo[0]['specifica']);
        for ($i=0;$i<count($valori);$i++){
            $ris[]=array("tipo"=>$specifiche[$i],"contenuto"=>$valori[$i]);
        }
        return($ris);
    }
   
    public  function MostraDati($em){
        $query = $em->createQuery(
            'SELECT a.denominazione, a.prezzoVendita, a.id, a.producibileId
            FROM  AppBundle:Articolo a
            ' 
        );
        $ris = $query->getResult();
        return $ris;
    }
    
    public function RicercaTramiteCategoria($em,$idCategoria){
         $query = $em->createQuery(
            'SELECT p.nome, p.id
            FROM AppBundle:Producibile p, AppBundle:Appartenere a
            WHERE p.id=a.idProducibile and a.idCategoria=:id' 
        )->setParameter('id',$idCategoria);

        $ris = $query->setMaxResults(25)->getResult();
        return $ris;
    }
    
    public function salvaArticolo($em,$datiArticolo){
        $unArticolo= new \AppBundle\Entity\Articolo();
        $unArticolo->setDenominazione($datiArticolo[0]);
        $unArticolo->setPrezzoVendita($datiArticolo[1]);
        $unArticolo->setProducibileId($datiArticolo[2]);
        $em->persist($unArticolo);
        $em->flush();
        
        for($c=3;$c<count($datiArticolo);$c++){
            $unVA= new \AppBundle\Entity\Valori_Articolo();
            $unVA->setArticoloId($unArticolo->getId());
            $unVA->setValoreId($datiArticolo[$c]);
            $em->persist($unVA);
            
            
        }
        $em->flush();
        return $unArticolo;
    }
    
    public function RicercaFullText($em,$str){
        $str=$str."%";
        $query = $em->createQuery(
            'SELECT a.denominazione, a.prezzoVendita, a.id, a.producibileId
            FROM  AppBundle:Articolo a
            WHERE a.denominazione LIKE :str or a.prezzoVendita LIKE :str or a.id LIKE :str or a.producibileId LIKE :str
            ' 
        )->setParameter('str',$str);
        $ris = $query->getResult();
        return $ris;
    }
    
    public function ordiniInCorso($em,$idArticolo){
        $query="SELECT COUNT(OD.codiceordine) as num "
                . "FROM OrdineDati OD "
                . "WHERE OD.articolo=".$idArticolo." and (OD.idstato not IN (26, 31))";
        $stmt = $em->getConnection()->prepare($query);
        $stmt->execute();
        $ris=$stmt->fetchAll();
        return $ris[0]["num"];
    }
    
    public function AttributiValori($em,$idArticolo) {
        $query=$em->createQuery("SELECT a.id as idAttributo, a.nome nomeAttributo, v.id as idValore, v.nome as nomeValore
                                FROM AppBundle:Attributi a, AppBundle:Valore v, AppBundle:Valori_Articolo va
                                WHERE va.articoloId=:idArticolo and va.valoreId=v.id and a.id=v.attributoId");
        $query->setParameter("idArticolo",$idArticolo);
        $ris = $query->getResult();
        return $ris;
    }
    
    public function elimina($em, $idArticolo){
        $inCorso=$this->ordiniInCorso($em, $idArticolo);
        if($inCorso>0){
            $response="Cancellazione non effettuata";
        } else { 
            //collego gli ordini dell'articolo ad un articolo fittizio non disponibile
            $ordini=$em->getRepository("AppBundle:Ordine")->findBy(array("articoloId"=>$idArticolo));
            foreach ($ordini as $x){
                $x->setArticoloId(0);
                $em->flush();
            }
            $articolo=$this->find($idArticolo);
            $em->remove($articolo);
            $em->flush();
            $response= "cancellazione andata a buon fine";
        }
        return $response;
    }
    
}
