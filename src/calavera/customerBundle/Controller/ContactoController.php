<?php

namespace calavera\customerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use calavera\customerBundle\BO\ContactoBO;
use calavera\customerBundle\JJUtils\Utils;

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
        $contacto = new \calavera\customerBundle\DTO\ContactoDTO(Utils::createIdSugar());
        $bo = new ContactoBO($this->getDoctrine()->getEntityManager(), $this->getDoctrine()->getEntityManager('customer'));
        $request = $this->get('request');
        $form = $request->request->all();
        
        $contacto->setNombre($form['nombre']);
        $contacto->setApellido($form['apellido']);
        $contacto->setTelefono($form['telefono']);
        $contacto->setEmail($form['email']);
        $contacto->setAsunto($form['asunto']);
        $contacto->setMensaje($form['mensaje']);
        $id = $bo->registerContact($contacto);
        $response = new Response(json_encode(array(strlen(Utils::createIdSugar()) => $contacto->getId(), 'idEntity' => $id)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    
    public function getEmailsAction(){
        $bo = new ContactoBO($this->getDoctrine()->getEntityManager('default'), $this->getDoctrine()->getEntityManager('customer'));
        echo '<pre>';print_r($bo->getEmails());
        $json = array();
        $response = new Response(json_encode($json));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}