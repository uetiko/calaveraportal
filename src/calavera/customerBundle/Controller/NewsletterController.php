<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NewsletterController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:Newsletter:index.html.twig');
    }

    public function signAction() {
        $bo = new \calavera\customerBundle\BO\NewsletterBO($this->getDoctrine()->getEntityManager());
    }

    public function unsignAction() {
        
    }

    public function testAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $result = new \calavera\customerBundle\Entity\CatNewsletterStatus();
        
        $dql = "select u from \calavera\customerBundle\Entity\CatNewsletterStatus u";
        try{
            $query = $em->createQuery($dql);
            $result = $query->getResult();
        }catch ( \Exception $e){
            
        }
        $a = array(
            "datoUno" => $result[0]->getStatus(),
            "datoDos" => $result[1]->getStatus()
        );
        
        $response = new Response(json_encode($a));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
