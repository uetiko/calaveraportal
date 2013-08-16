<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
    public function indexAction($name) {
        return $this->render('calaveracustomerBundle:Default:index.html.twig', array('name' => $name));
    }

}
