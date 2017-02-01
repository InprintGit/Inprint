<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    private function checkUser(Request $request){
        if($user==""){
            return $this->redirect($this->generateUrl('home',array(
           'User' => $user, )));
        }
    }

        /**
     * @Route("login", name="login")
     */
public function showAction(Request $request)
    {
       $user= $request->get('User');
         
        if($user!=""){
            $check=$this->getDoctrine()->getManager()->getRepository("AppBundle:Prinkino")->findOneByUsername($user);
            if($check)
                {
                return $this->redirect($this->generateUrl('home',array('User' => $user, )));
                }else{
                    $check=$this->getDoctrine()->getManager()->getRepository("AppBundle:Operatore")->findOneByUsername($user);
                    if($check and $check->getTipo()=="Responsabile" ){
                        return $this->redirect($this->generateUrl('SPhome',array('User' => $user, )));
                    }elseif($check and $check->getTipo()=="Operatore"){
                        return $this->redirect($this->generateUrl('Ohome',array('User' => $user, )));
                    }else{
                    $check=$this->getDoctrine()->getManager()->getRepository("AppBundle:Grafico")->findOneByUsername($user);
                        if($check and $check->getTipo()=="Responsabile" ){
                            return $this->redirect($this->generateUrl('Ghome',array('User' => $user, )));
                        }elseif($check and $check->getTipo()=="Grafico"){
                            return $this->redirect($this->generateUrl('Ghome',array('User' => $user, )));
                        }else{
                               $check=$this->getDoctrine()->getManager()->getRepository("AppBundle:Amministratore")->findOneByUsername($user);
                               if($check) {
                                    return $this->redirect($this->generateUrl('Ahome',array('User' => $user, )));
                               }else{
                                    return $this->render('AppBundle:Login:login.html.twig');
                               }
                            }
                    }
                }
        
               
        }
        

        return $this->render('AppBundle:Login:login.html.twig');
    }
}
