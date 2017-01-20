<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OperatoreController extends Controller
{
    /**
     * @Route("/o/home", name="Ohome")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:Operatore:home.html.twig', array(
            // ...
        ));
    }

}
