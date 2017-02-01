<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class GraficoController extends Controller
{
    private $grafico=0;
    private $user;
    
    /**
     * @Route("/g/home", name="Ghome")
     */
    public function homeAction(Request $request){
        
        $this->em = $this->getDoctrine()->getManager();
        $session= new session();
        $session->set('user', $request->get("User"));
        
        $eseguire=$this->em->getRepository("AppBundle:Grafico")->tabellaEseguire($this->em, $session->get('user'),5);
        $lavorazione =$this->em->getRepository("AppBundle:Grafico")->tabellaInLavorazione($this->em, $session->get('user'),5);// $query2->getResult();
        $rieseguire=$this->em->getRepository("AppBundle:Grafico")->tabellaDaRieseguire($this->em, $session->get('user'),5);
        $attesa=$this->em->getRepository("AppBundle:Grafico")->tabellaInAttesa($this->em, $session->get('user'),5);

            
        $response=$this->render('AppBundle:Grafico:ghome.html.twig', array('nuovi' => $eseguire,'lavorazione' => $lavorazione, 'rieseguire' => $rieseguire, "attesa" => $attesa,));
        return $response;
        }
        
    
    /**    
     * @Route("/g/gconclusi", name="Gconclusi")
     */
    public function graficheAccettateAction(Request $request){
        $session= new session();
        $em = $this->getDoctrine()->getManager();
        $user= $session->get("User");
       $accettate=$em->GetRepository("AppBundle:Grafica")->tabellaAccettate($em, $user,1);
        
        return $this->render('AppBundle:Grafico:gconclusi.html.twig', array("accettate" => $accettate));
    }
    
    
    /**
     * @Route("/g/lavinattesa", name="Lavinattesa")
     */
    public function attesaAction(Request $request) {
        
        $this->em = $this->getDoctrine()->getManager();
        $request->get("User");
        $accettate=$this->em->GetRepository("AppBundle:Grafica")->tabellaAttesa($this->em, $this->user,1);
        
        return $this->render('AppBundle:Grafico:lavinattesa.html.twig', array("attesa" => $attesa));

    }
      /**
     * @Route("/g/Gcomunicazioni", name="Gcomunicazioni")
     */
    public function comunicazioniAction(Request $request) {
        
        
    }
    
       /**
     * @Route("/g/lavinproduzione", name="Gincorso")
     */
    public function incorsoAction(Request $request) {
        $this->em = $this->getDoctrine()->getManager();
        $session= new session();
        $user=$session->get("User");
        //$accettate=$this->em->GetRepository("AppBundle:Grafica")->tabellaAttesa($this->em, $user,1);
        
        return $this->render('AppBundle:Grafico:lavinattesa.html.twig', array("attesa" => $attesa));

        
    }
               
}



