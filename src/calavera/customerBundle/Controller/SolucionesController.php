<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of Soluciones
 *
 * @author silent
 */
class SolucionesController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:soluciones:index.html.twig');
    }

}