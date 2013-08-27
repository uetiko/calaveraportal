<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of HomeController
 *
 * @author silent
 */
class HomeController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:home:index.html.twig');
    }

}