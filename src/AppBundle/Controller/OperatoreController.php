<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;


class OperatoreController extends Controller
{
    private $operatore=0;
    private $user;
   
    
    /**
     * @Route("/o/home", name="Ohome")
     */
    public function homeAction(Request $request)
    {
        $this->em = $this->getDoctrine()->getManager();
        $session= new session();
        $session->set('user', $request->get("User"));
        
        
        $eseguire=$this->em->getRepository("AppBundle:Operatore")->tabellaNuovi($this->em, $session->get('user'),1);
        $esecuzione=$this->em->getRepository("AppBundle:Operatore")->tabellaEsecuzione($this->em, $session->get('user'),1);

        $response=$this->render('AppBundle:Operatore:home.html.twig', array('nuovi' => $eseguire,'esecuzione' => $esecuzione));
        return $response;
      
         
                                  
        
    }

}
