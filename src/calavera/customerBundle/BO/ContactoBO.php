<?php
namespace calavera\customerBundle\BO;
use \Exception;
use \ArrayObject;
use calavera\customerBundle\DAO\ContactoDAO;
use calavera\customerBundle\DAO\SugarCRMDAO;
use calavera\customerBundle\DTO\ContactoDTO;
use calavera\customerBundle\JJUtils\Utils;
/**
 * Description of ContactoBO
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class ContactoBO {
    private $daoCalavera = NULL;
    private $daoSugar = NULL;
    
    public function __construct(\Doctrine\ORM\EntityManager $em, \Doctrine\ORM\EntityManager $em2) {
        $this->daoCalavera = new ContactoDAO($em);
        $this->daoSugar = new SugarCRMDAO($em2);
    }
    /**
     * 
     * @param \calavera\customerBundle\DTO\ContactoDTO $to
     */
    public function registerContact(ContactoDTO $to){
        $to->setId(Utils::createIdSugar());
        $this->daoCalavera->registraContacto($to);
        
    }
}

?>
