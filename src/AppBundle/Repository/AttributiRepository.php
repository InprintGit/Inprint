<?php

namespace AppBundle\Repository;

/**
 * AttributiRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttributiRepository extends \Doctrine\ORM\EntityRepository
{
    public function DatiAttributi($em){
        $query=$em->createQuery('Select a.id, a.nome, count(v.id) as valori
                          From AppBundle:Attributi a, AppBundle:Valore v
                          Where a.id=v.attributoId  
                          Group By a.id');
        
        return $query->getResult();        
    }
    
    public function salvaAttributo($em,$attributo,$valori){
        $unAttributo= new \AppBundle\Entity\Attributi();
        $unAttributo->setNome($attributo);
        $em->persist($unAttributo);
        $em->flush();
        $idAttributo=$unAttributo->getId();
        foreach ($valori as $x){
            $unValore= new \AppBundle\Entity\Valore();
            $unValore->setNome($x);
            $unValore->setAttributoId($idAttributo);
            $em->persist($unValore);
            $em->flush();
        }
        return $unAttributo;
    }
}
