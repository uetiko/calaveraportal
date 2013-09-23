<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of PortafolioController
 *
 * @author silent
 */
class PortafolioController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:portafolio:index.html.twig');
    }

}