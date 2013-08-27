<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of BlogController
 *
 * @author silent
 */
class BlogController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:blog:index.html.twig');
    }

}