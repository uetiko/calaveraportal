<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NosotrosController extends Controller {
    public function indexAction() {
        return $this->render('calaveracustomerBundle:nosotros:index.html.twig');
    }
    
    public function integrantesAction() {
        return $this->render('calaveracustomerBundle:nosotros:integrantes.html.twig');
    }
    
    public function instalacionesAction() {
        return $this->render('calaveracustomerBundle:nosotros:instalaciones.html.twig');
    }
}