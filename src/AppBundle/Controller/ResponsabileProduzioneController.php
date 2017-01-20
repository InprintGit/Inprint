<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class ResponsabileProduzioneController extends Controller
{
    /**
     * @Route("/SP/home", name="SPhome")
     */
    public function homeAction (Request $request)
    {
        $session= new session();
        $em=$this->getDoctrine()->getManager();
        if(!($session->get('user')))
        {
            if($request->get('User'))
            {
                $session->set('user',$request->get('User'));
                $idRP=$em->getRepository("AppBundle:Operatore")->findOneBy(array("username"=>$request->get('User'),"tipo"=>"Responsabile"));
                $session->set('idRP',$idRP->getId());
            }else
            {
                return $this->redirect($this->generateUrl('login'));
            }
        }
        $eseguire=$em->getRepository("AppBundle:Ordine")->daEseguire($em,$session->get('idRP'),10);
        $produzione=$em->getRepository("AppBundle:Ordine")->inProduzione($em,$session->get('idRP'),10);
        return $this->render('AppBundle:ResponsabileProduzione:home.html.twig', array("eseguire"=>$eseguire,"produzione"=>$produzione));
    }

    /**
     * @Route("/SP/operatori", name="SPoperatori")
     */
    public function operatoriAction()
    {
        return $this->render('AppBundle:ResponsabileProduzione:operatori.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/SP/daeseguire", name="SPdaeseguire")
     */
    public function daeseguireAction()
    {
        $session= new Session();
        $em= $this->getDoctrine()->getManager();
        $eseguire=$em->getRepository("AppBundle:Ordine")->daEseguire($em,$session->get('idRP'),100);
        return $this->render('AppBundle:ResponsabileProduzione:daeseguire.html.twig', array( "eseguire"=>$eseguire));
    }

    /**
     * @Route("/SP/inProduzione", name="SPinproduzione")
     */
    public function inProduzioneAction()
    {
        $session= new Session();
        $em= $this->getDoctrine()->getManager();
        $produzione=$em->getRepository("AppBundle:Ordine")->inProduzione($em,$session->get('idRP'),100);
        return $this->render('AppBundle:ResponsabileProduzione:in_produzione.html.twig', array("produzione"=>$produzione));
    }

    /**
     * @Route("/SP/conclusi", name="SPconclusi")
     */
    public function conclusiAction()
    {
      $session= new Session();
        $em= $this->getDoctrine()->getManager();
        $conclusi=$em->getRepository("AppBundle:Ordine")->Conclusi($em,$session->get('idRP'),30);
        return $this->render('AppBundle:ResponsabileProduzione:conclusi.html.twig', array("conclusi"=>$conclusi));
    }

   /**
     * @Route("/SP/ordine/{idordine}", name="SPordine")
     */
    public function ordineAction(Request $request)
    {
        $idOrdine=$request->get('idordine');
        //generare informazioni necessarie per costruire l'interfaccia
        return $this->render('AppBundle:ResponsabileProduzione:conclusi.html.twig', array("conclusi"=>$conclusi));
    }
 
    
}
