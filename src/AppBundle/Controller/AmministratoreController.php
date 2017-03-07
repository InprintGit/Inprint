<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class AmministratoreController extends Controller
{
    /**
     * @Route("/a/home/", name="Ahome")
     */
    public function homeAction(Request $request){
        $this->em = $this->getDoctrine()->getManager();
        $session= new session();
        $session->set('user', $request->get("User"));
        return $this->render('AppBundle:Amministratore:Abase.html.twig');
    }
    
     /**
     * @Route("/a/categoria/", name="Acategorie")
     */
    public function categorieAction(){
        $em= $this->getDoctrine()->getManager();
        $categorie= $em->getRepository("AppBundle:Categoria")->MostraCategorie($em);
        return $this->render('AppBundle:Amministratore:Acategorie.html.twig', array("categorie"=>$categorie));
    }
    
    /**
     * @Route("/a/categoria/nuova", name="AnuovaCategoria")
     */
    public function nuovaCategoriaAction(Request $request){
        $em= $this->getDoctrine()->getManager();
        $check=$em->getRepository("AppBundle:Categoria")->checkInserimento($request);
        if($check){
            $categoria['nome']=$request->get('nome');
            $categoria['descrizione']=$request->get('descrizione');
            $categoria['file']=$request->get('file');
            $categoria['padre']=$request->get('padre');
            $session= new session();
            $session->set("categoria",$categoria);
            return $this->render('AppBundle:Amministratore:AriepilogoCategoria.html.twig', array("categoria" =>$categoria));
        }else{
           // $categorie= $em->getRepository("AppBundle:Categoria")->MostraMaxiCategorie($em);
            $categorie= array();
            return $this->render('AppBundle:Amministratore:Anuovacategoria.html.twig', array("categorie" =>$categorie));
        }
    }
    
     /**
     * @Route("/a/articoli/", name="Aarticoli")
     */
    public function articoliAction(){
        $em= $this->getDoctrine()->getManager();
        $articoli= $em->getRepository("AppBundle:Articolo")->MostraDati($em);
        return $this->render('AppBundle:Amministratore:Aarticoli.html.twig', array("articoli"=>$articoli));
    }
    
     /**
     * @Route("/a/articoli/nuovo", name="AnuovoArticolo")
     */
    public function nuovoArticoloAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $producibili=$em->getRepository("AppBundle:Producibile")->findAll();
        return $this->render("AppBundle:Amministratore:nuovoArticolo.html.twig", array("producibili"=>$producibili));
    } 
    
    
    /**
     * @Route("/a/attributi/", name="Aattributi")
     */
    public function attributiAction(){
        $em=$this->getDoctrine()->getManager();
        $attributi=$em->getRepository("AppBundle:Attributi")->DatiAttributi($em);
        return $this->render('AppBundle:Amministratore:Aattributi.html.twig', array("attributi"=>$attributi));
    }
    
     /**
     * @Route("/a/producibili/", name="Aproducibili")
     */
    public function producibiliAction(){
        $em=$this->getDoctrine()->getManager();
        $producibili=$em->getRepository("AppBundle:Producibile")->mostraDati($em);
        return $this->render('AppBundle:Amministratore:producibili.html.twig',array("producibili"=>$producibili));
    }
    
    /**
     * @Route("/a/conferma/", name="Aconferma")
     */
    public function confermaAction(){
        $session= new Session();
        $categoria=$session->get("categoria");
        $em=$this->getDoctrine()->getManager();
        if($categoria){
            $em->getRepository("AppBundle:Categoria")->creaCategoria($em,$categoria);
            return $this->redirect($this->generateUrl("Acategorie"));
        }
        return $this->render('AppBundle:Amministratore:Abase.html.twig');
    }
    
    
    /**
     * @Route("/a/treeJs", name="albero")
     */
     public function TreeJsAction(){
       $em=$this->getDoctrine()->getManager();
       $data=$em->getRepository("AppBundle:Categoria")->VisualizzaJsTree($em);
       $json= json_encode($data);
       $response = new Response($json, 200);
       $response->headers->set('Content-Type', 'application/json');
       return $response;
     }
     
     
     /**
     * @Route("/a/nuovaCategoriaJson", name="nuovaCategoriaJson")
     */
     
     public function nuovaCategoriaJson(Request $request){
        $em= $this->getDoctrine()->getManager();
         $unaCategoria=$em->getRepository("AppBundle:Categoria")->salvaCategoria($em,$request);
         $template= $this->render("AppBundle:Amministratore:RiepilogoCategoria.html.twig");
         $json= json_encode($template);
         $response = new Response($json,200);
        $response->headers->set('Content-Type', 'application/json');
         return $response;
     }
     
     
     /**
     * @Route("/a/nuovoattributo", name="Anuovoattributo")
     */
     
     public function nuovoAttributo(){
         return $this->render('AppBundle:Amministratore:nuovoattributo.html.twig');
     }
    
     /**
     * @Route("/a/caricaAttributi", name="Acaricanattributo")
     */
     
     public function caricaNuoviAttributi(Request $request){
         $template=$this->render('AppBundle:Amministratore:nuoviattributi.html.twig', array("n"=>$request->get("n")))->getContent();
         $json= json_encode($template);
         $response = new Response($json,200);
         $response->headers->set('Content-Type', 'application/json');
         return $response;
     }
     
     
     /**
     * @Route("/a/salvaAttributi", name="Asalvattributo")
     */
     
     public function salvaNuoviAttributi(Request $request){
         //$template=$this->render('AppBundle:Amministratore:nuoviattributi.html.twig', array("n"=>$request->get("n")))->getContent();
         $valori= $request->get("valori");
         $attributo=$request->get("nome");
         $em= $this->getDoctrine()->getManager();
         $em->getRepository("AppBundle:Attributi")->salvaAttributo($em,$attributo,$valori);
         $template= $this->render("AppBundle:Amministratore:RiepilogoCategoria.html.twig")->getContent();
         $json= json_encode($template);
         $response = new Response($json,200);
         $response->headers->set('Content-Type', 'application/json');
         return $response;
         
     }
     
     /**
     * @Route("/a/GruppiAttributo", name="AgruppoAttributo")
     */
     public function GruppiAction(){
         $em=$this->getDoctrine()->getManager();
        // $gruppi= $em->getRepository("AppBundle:Gruppo")->DatiGruppi($em);
         return $this->render("AppBundle:Amministratore:GruppiAttributo.html.twig",array("gruppi"=>$gruppi));
     }
     
     /**
     * @Route("/a/Producibli/nuovo", name="AnuovoProducibile")
     */
     public function nuovoProducibileAction(Request $request){
        $em= $this->getDoctrine()->getManager();
        $gruppi=$em->getRepository("AppBundle:Gruppo")->findAll();
        return $this->render("AppBundle:Amministratore:nuovoProducibile.html.twig", array("Gruppi"=>$gruppi));
     }
     
     
      /**
     * @Route("/a/nuovoProducibileJson", name="AnuovoProducibileJson")
     */
     public function nuovoProducibileJsonAction(Request $request){
        $em= $this->getDoctrine()->getManager();
        $producibile= json_decode($request->get("producibile"));
        $albero=json_decode($request->get("albero"));
        $albero=$em->getRepository("AppBundle:Producibile")->preparaCategorie($albero);
        $unProducibile=$em->getRepository("AppBundle:Producibile")->creaProducibile($em,$producibile);
        $appartenre=$em->getRepository("AppBundle:Appartenere")->associaCategorieProducibile($em,$unProducibile,$albero);
        $template= $this->render("AppBundle:Amministratore:RiepilogoProducibile.html.twig",array("producibile" =>$unProducibile,"appartenere"=>$appartenre))->getContent();
        $json= json_encode($template);
        $response = new Response($json,200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
      /**
     * @Route("/a/setAttributi", name="Aset")
     */
     public function setAttributiAction(){
        $em= $this->getDoctrine()->getManager();
        $set=$em->getRepository("AppBundle:Gruppo")->findAll();
        $response=$this->render("AppBundle:Amministratore:gruppi.html.twig", array("set"=>$set));
        return $response;
     }
     
     /**
      * @Route("a/nuovo/set", name="AnuovoGruppo")
      */
     public function nuovoGruppoAction(){
         $em= $this->getDoctrine()->getManager();
         $attributi=$em->getRepository("AppBundle:Attributi")->findAll();
         return $this->render("AppBundle:Amministratore:nuovoGruppo.html.twig", array("attributi"=>$attributi));
     }
     
      /**
      * @Route("a/nuovo/set2", name="AcreaSet")
      */
     public function creaGruppoAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $numVal=$request->get("numValori");
         $attributi=$em->getRepository("AppBundle:Gruppo")->PrelevaAttributiRequest($request,$numVal);
         $unGruppo= $em->getRepository("AppBundle:Gruppo")->creaGruppo($em,$request->get("name"));
         $em->getRepository("AppBundle:Gruppo_Attributi")->collegaAttributi($em,$unGruppo,$attributi);
         return $this->redirect($this->generateUrl("Aset"));
     }
     
     /**
      * @Route("a/specifiche", name="AspecificheJSON")
      */
     public function caricaSpecificheJSON(request $request){
        $idProducibile=$request->get("idProducibile");
        $em= $this->getDoctrine()->getManager();
        $attributi= $em->getRepository("AppBundle:Gruppo_Attributi")->CaricaAttributiValori($em,$idProducibile);
        $template=$this->render("AppBundle:Amministratore:specifiche.html.twig" , array("attributi"=>$attributi))->getContent();
        $json= json_encode($template);
        $response = new Response($json,200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
     /**
      * @Route("/a/salvaArticoloJson",  name="nuovoArticoloJSON")
      */
     public function salvaArticoloJson(Request $request){
        $em= $this->getDoctrine()->getManager();
        $datiArticolo=json_decode($request->get("articolo"));
        $unArticolo=$em->getRepository("AppBundle:Articolo")->salvaArticolo($em,$datiArticolo);
         
        $template="Inserimento Completato Articolo ID:".$unArticolo->getId();
        
        $json= json_encode($template);
        $response = new Response($json,200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
         
     }
     
     
    /**
     * @Route("/articolo/SearchJSON", name="ricercaArticolo")
     */
    public function  articoloSearchAction(Request $request){
        $str=$request->get("searchText");
        $em= $this->getDoctrine()->getManager();
        $articoli= $em->getRepository("AppBundle:Articolo")->RicercaFullText($em,$str);
        $template = $this->render('AppBundle:Amministratore:TabellaArticoli.html.twig', array("articoli"=>$articoli))->getContent();

        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
       /**
     * @Route("/attributo/SearchJSON", name="ricercaAttributo")
     */
    public function  attributoSearchAction(Request $request){
        $str=$request->get("searchText");
        $em= $this->getDoctrine()->getManager();
        $attributi= $em->getRepository("AppBundle:Attributi")->RicercaFullText($em,$str);
        $template = $this->render('AppBundle:Amministratore:TabellaAttributi.html.twig', array("attributi"=>$attributi))->getContent();

        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
      /**
     * @Route("/categoria/SearchJSON", name="ricercaCategoria")
     */
    public function  categoriaSearchAction(Request $request){
        $str=$request->get("searchText");
        $em= $this->getDoctrine()->getManager();
        $categorie= $em->getRepository("AppBundle:Categoria")->RicercaFullText($em,$str);
        $template = $this->render('AppBundle:Amministratore:TabellaCategoria.html.twig', array("categorie"=>$categorie))->getContent();

        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    
    }
        /**
     * @Route("/producibile/SearchJSON", name="ricercaProducibile")
     */
    public function  producibileSearchAction(Request $request){
        $str=$request->get("searchText");
        $em= $this->getDoctrine()->getManager();
        $producibili= $em->getRepository("AppBundle:Producibile")->RicercaFullText($em,$str);
        $template = $this->render('AppBundle:Amministratore:TabellaProducibile.html.twig', array("producibili"=>$producibili))->getContent();

        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    
       /**
     * @Route("/setAttributi/SearchJSON", name="ricercaSetAttributi")
     */
    public function  setAttributiSearchAction(Request $request){
        $str=$request->get("searchText");
        $em= $this->getDoctrine()->getManager();
        $gruppi= $em->getRepository("AppBundle:Gruppo")->RicercaFullText($em,$str);
        $template = $this->render('AppBundle:Amministratore:TabellaGruppo.html.twig', array("set"=>$gruppi))->getContent();

        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
     /**
     * @Route("/a/categoria/{idCategoria}", name="Acategoria")
     */
     public function showCategoriaAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $idCategoria=$request->get('idCategoria');
         $categoria=$em->getRepository("AppBundle:Categoria")->find($idCategoria);
         $figli=$em->getRepository("AppBundle:Categoria")->findBy(array("categoriaPadreId"=>$idCategoria));
         $numProd=$em->getRepository("AppBundle:Categoria")->numeroProducibili($em,$idCategoria);
         return $this->render("AppBundle:Amministratore:categoria.html.twig", array("categoria"=>$categoria, "figli"=>$figli, "producibili"=>$numProd));
     }
     /**
     * @Route("/a/categoriaeliminaJSON", name="AEliminaCategoria")
     */
     public function eliminaCategoriaAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $idCategoria=$request->get("idCategoria");
        $template=$em->getRepository("AppBundle:Categoria")->elimina($em,$idCategoria);
        
        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
      /**
     * @Route("/a/articolo/{idArticolo}", name="Aarticolo")
     */
     public function showArticoloAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $idArticolo=$request->get('idArticolo');
         $articolo=$em->getRepository("AppBundle:Articolo")->find($idArticolo);
         $OrdiniInCorso=$em->getRepository("AppBundle:Articolo")->ordiniInCorso($em,$idArticolo);
         $VA= $em->getRepository("AppBundle:Articolo")->AttributiValori($em,$idArticolo);
         return $this->render("AppBundle:Amministratore:articolo.html.twig", array("articolo"=>$articolo, "inCorso"=>$OrdiniInCorso, "AttributoValore"=>$VA));
     }
       /**
     * @Route("/a/articoloEliminaJSON", name="AEliminaArticolo")
     */
     public function eliminaArticoloAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $idArticolo=$request->get("idArticolo");
        $template=$em->getRepository("AppBundle:Articolo")->elimina($em,$idArticolo);
        
        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
     /**
     * @Route("/a/producibile/{idProducibile}", name="Aproducibile")
     */
     public function showProducibileAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $idProducibile=$request->get('idProducibile');
         $producibile=$em->getRepository("AppBundle:Producibile")->find($idProducibile);
         $articoli=$em->getRepository("AppBundle:Articolo")->findBy(array("producibileId"=>$idProducibile));
         $categorie= $em->getRepository("AppBundle:Appartenere")->findBy(array("idProducibile"=>$idProducibile));
         return $this->render("AppBundle:Amministratore:producibile.html.twig", array("producibile"=>$producibile, "articoli"=>$articoli, "categorie"=>$categorie));
     }
     
     /**
     * @Route("/a/eliminaProducibileJson", name="AEliminaProducibile")
     */
     public function eliminaProducibileAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $idProducibile=$request->get("idProducibile");
        $template=$em->getRepository("AppBundle:Producibile")->elimina($em,$idProducibile);
        
        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
     
      /**
     * @Route("/a/setAttributo/{idSetAttributi}", name="ASetAttributi")
     */
     public function showSetAttributiAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $idSA=$request->get('idSetAttributi');
         $SA=$em->getRepository("AppBundle:Gruppo")->find($idSA);
         $attributi= $em->getRepository("AppBundle:Gruppo_Attributi")->getAttributi($em,$idSA);
         $producibili=$em->getRepository("AppBundle:Producibile")->findBy(array("gruppoId"=>$idSA));
         return $this->render("AppBundle:Amministratore:GruppiAttributo.html.twig", array("setAttributi"=>$SA, "Attributi"=>$attributi, "producibili"=>$producibili));
     }
     
     /**
     * @Route("/a/eliminaSetJSON", name="AEliminaSet")
     */
     public function eliminaSetAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $idSet=$request->get("idSet");
        $em->getRepository("AppBundle:Gruppo_Attributi")->elimina($em,$idSet);
        $template=$em->getRepository("AppBundle:Gruppo")->elimina($em,$idSet);
        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
        /**
     * @Route("/a/Attributo/{idAttributo}", name="AAttributo")
     */
     public function showAttributoAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $idAtt=$request->get('idAttributo');
         $attributo=$em->getRepository("AppBundle:Attributi")->find($idAtt);
         $SA=$em->getRepository("AppBundle:Gruppo_Attributi")->ricercaGruppiDaAttributo($em,$idAtt);
         $valori= $em->getRepository("AppBundle:Valore")->findBy(array("attributoId"=>$idAtt));
         return $this->render("AppBundle:Amministratore:attributo.html.twig", array("valori"=>$valori, "attributo"=>$attributo, "setattributi"=>$SA));
     }
     
      /**
     * @Route("/a/eliminaAttributoJSON", name="AEliminaAttributo")
     */
     public function eliminaAttributoAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $id=$request->get("idAttributo");
        $em->getRepository("AppBundle:Valore")->elimina($em,$id);
        $template=$em->getRepository("AppBundle:Attributi")->elimina($em,$id);
        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
      /**
     * @Route("/a/Attributo/modifica/{idAttributo}", name="AModificaAttributo")
     */
     public function modificaAttributoAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $idAtt=$request->get('idAttributo');
         $attributo=$em->getRepository("AppBundle:Attributi")->find($idAtt);
         $valori= $em->getRepository("AppBundle:Valore")->findBy(array("attributoId"=>$idAtt));
         return $this->render("AppBundle:Amministratore:modificaAttributo.html.twig", array("valori"=>$valori, "attributo"=>$attributo));
     }
  
     
    /**
     * @Route("/a/Attributo/modificaJSON", name="ASalvaModificaAttributo")
     */
     public function salvaModificaAttributoAction(Request $request){
        $em= $this->getDoctrine()->getManager();
        $idAttributo=$request->get("idAttributo");
        $attributo=$request->get("attributo");
        $valori= $request->get("valori");
        $template=$em->getRepository("AppBundle:Attributi")->modifica($em,$idAttributo,$attributo,$valori);
        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
     
     /**
     * @Route("/a/Set/modifica/{idSet}", name="AModificaSet")
     */
     public function modificaSetAction(Request $request){
         $em= $this->getDoctrine()->getManager();
         $idSet=$request->get('idSet');
         $gruppo=$em->getRepository("AppBundle:Gruppo")->find($idSet);
         return $this->render("AppBundle:Amministratore:modificaSet.html.twig", array("gruppo"=>$gruppo));
     }
  
     
    /**
     * @Route("/a/Set/modificaJSON", name="ASalvaModificaSet")
     */
     public function salvaModificaGruppoAction(Request $request){
        $em= $this->getDoctrine()->getManager();
        $idGruppo=$request->get("idGruppo");
        $nome=$request->get("nome");
        $template=$em->getRepository("AppBundle:Gruppo")->modifica($em,$idGruppo,$nome);
        $json = json_encode($template);
        $response = new Response($json, 200);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
     }
}



