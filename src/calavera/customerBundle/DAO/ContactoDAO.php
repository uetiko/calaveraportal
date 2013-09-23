<?php

namespace calavera\customerBundle\DAO;

use calavera\customerBundle\Entity\Contacto;
use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\ORMInvalidArgumentException;
use \Exception;
use calavera\customerBundle\DTO\ContactoDTO;

/**
 * Description of ContactoDAO
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class ContactoDAO {

    /**
     *
     * @var Doctrine\ORM\EntityManager 
     */
    private $em = NULL;

    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }

    public function registraContacto(ContactoDTO $to) {
        $contacto = new Contacto($to->getId());
        $contacto->setNombre($to->getNombre());
        $contacto->setApellido($to->getApellido());
        $contacto->setTelefono($to->getTelefono());
        $contacto->setAsunto($to->getAsunto());
        $contacto->setMensaje($to->getMensaje());
        $contacto;
        try {
            $this->em->persist($contacto);
            $this->em->flush();
        } catch (ORMInvalidArgumentException $exc) {
            echo '<pre>'; print_r($exc->getTraceAsString());
        } catch (\Doctrine\ORM\ORMException $exc){
            echo '<pre>'; print_r($exc->getTraceAsString());
            echo '<pre>'; print_r($exc->getTrace());
        } catch (Exception $e){
            echo '<pre>'; print_r($e->getTraceAsString());
        }
        //return $contacto->getIdContact();
    }
}

?>
