<?php

namespace Acme\PlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;




class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('PlanBundle:Default:index.html.twig', array('name' => $name));
    }

    public function mainAction() {

        return $this->render('PlanBundle:Default:plans.html.twig');
    }
    
    public function dashboardAction()
    {
        return $this->render('PlanBundle:Default:dashbaord.html.twig');
    }
    
   public function curseAction()
    {
     
       $testClass = new \Test();
       $result = $testClass->showHelloWorld();
       return "The output is ".$result;
    }
    
    public function linkedinAction()
    {
        $linkedinclass= new \linkedin();
        $connection= $linkedinclass->fn_Test_Linkedin_Conn($str_ln_api_key="",$str_ln_api_secret_key="");
        echo "<pre>";
        print_r($connection);
    }
}
