<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use calavera\customerBundle\BO\ContactoBO;

/**
 * Description of Contacto
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class ContactoController extends Controller {

    public function indexAction() {
        return $this->render('calaveracustomerBundle:Contacto:index.html.twig');
    }
    
    public function sendRegisterAction(){
        $contacto = new \calavera\customerBundle\DTO\ContactoDTO();
        $bo = new ContactoBO($this->getDoctrine()->getConnection('default'), $this->getDoctrine()->getConnection('sugarcrm'));
        $request = $this->get('request');
        $form = $request->request->all();
        
        $contacto->setNombre($form['nombre']);
        $contacto->setApellido($form['apellido']);
        $contacto->setTelefono($form['telefono']);
        $contacto->setEmail($form['email']);
        $contacto->setAsunto($form['asunto']);
        $contacto->setMensaje($form['mensaje']);
        
        $bo->registerContact($to);
        return null;
    }

}