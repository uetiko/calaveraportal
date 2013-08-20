<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NewsletterController extends Controller{

    public function indexAction(){
        return $this->render('calaveracustomerBundle:Newsletter:index.html.twig');
    }

    public function signAction(){
        $bo = new \calavera\customerBundle\BO\NewsletterBO($this->getDoctrine()->getEntityManager());
    }
    
    public function unsignAction(){
        
    }
}
