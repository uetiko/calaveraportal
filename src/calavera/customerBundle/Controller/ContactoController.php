<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of Contacto
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class ContactoController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:Contacto:index.html.twig');
    }

}