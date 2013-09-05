<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ServiciosController
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class ServiciosController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:servicios:index.html.twig');
    }
    
    public function graphicDesingAction() {
        return $this->render('calaveracustomerBundle:servicios:graphicDesing.html.twig');
    }
    
    public function photographyAction() {
        return $this->render('calaveracustomerBundle:servicios:photography.html.twig');
    }
    
    public function webDesing() {
        return $this->render('calaveracustomerBundle:servicios:webDesing.html.twig');
    }

}