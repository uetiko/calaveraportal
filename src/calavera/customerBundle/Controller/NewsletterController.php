<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NewsletterController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:Newsletter:index.html.twig');
    }

    public function signAction(Request $request) {
        $newsletter = new \calavera\customerBundle\DTO\NewsletterDTO();
        $bo = new \calavera\customerBundle\BO\NewsletterBO($this->getDoctrine()->getEntityManager());
        $request = $this->get('request');
        
        $nl = $request->request->all();
        $newsletter->setEmail($nl['email']);
        $newsletter->setGender($nl['gender']);
        
        $response = new Response(json_encode($bo->registerMailInNewsletter($newsletter)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function unsignAction() {
        
    }

    public function testAction() {
        $bo = new \calavera\customerBundle\BO\NewsletterBO($this->getDoctrine()->getEntityManager());
        $result = $bo->getStatusForNewsletter();
        $a = array(
            "datoUno" => $result->getStatus(),
            "datoDos" => ''//$result[1]->getStatus()
        );
        
        $response = new Response(json_encode($a));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
