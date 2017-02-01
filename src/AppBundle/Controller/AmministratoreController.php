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
            $categorie= $em->getRepository("AppBundle:Categoria")->MostraMaxiCategorie($em);
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
        $em= $this->getDoctrine()->getManager(); //modificaRWE
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
       
        return $this->render('AppBundle:Amministratore:Abase.html.twig');
    }
    
     /**
     * @Route("/a/producibili/", name="Aproducibili")
     */
    public function producibiliAction(){
        return $this->render('AppBundle:Amministratore:Abase.html.twig');
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
}



