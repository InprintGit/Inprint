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
        //modificaRWE
        $em= $this->getDoctrine()->getManager(); 
        $check=$em->getRepository("AppBundle:Categoria")->checkInserimento($request);
        if($check){
            $categoria['nome']=$request->get('nome');
            $categoria['descrizione']=$request->get('descrizione');
            $categoria['file']=$request->get('file');
            $categoria['padre']=$request->get('padre');
           //finire con riepilogo
            return $this->render('AppBundle:Amministratore:Anuovacategoria.html.twig', array("categorie" =>$categorie));
        }else{
            $categorie= $em->getRepository("AppBundle:Categoria")->MostraMaxiCategorie($em);
            return $this->render('AppBundle:Amministratore:Anuovacategoria.html.twig', array("categorie" =>$categorie));
        }
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
         $json= json_encode(count($template));
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
}



