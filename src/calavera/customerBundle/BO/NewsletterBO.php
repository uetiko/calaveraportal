<?php
namespace calavera\customerBundle\BO;
use \Exception;
use \ArrayObject;
/**
 * Description of NewsletterBO
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class NewsletterBO {
    /**
     *
     * @var \calavera\customerBundle\DAO\NewsletterDAO
     */
    private $nldao = null;
    /**
     * Método constructor
     * @param \Doctrine\ORM\EntityManager $em
     */
    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->nldao = new \calavera\customerBundle\DAO\NewsletterDAO($em);
    }
    
    public function getStatusForNewsletter(){
        return $this->nldao->getCatStatusNewsletter();
    }
    
    public function registerMailInNewsletter(\calavera\customerBundle\DTO\NewsletterDTO $newsletter){
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $messaje = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
        switch (preg_match($regex, $newsletter->getEmail())) {
            case 0:
                $newsletter->setStatus("El correo electronico es invalido");
                break;
            case 1:
               $newsletter->setStatus($this->nldao->registerNewsletter($newsletter));
                break;
        }
        $messaje->offsetSet("success", array("messaje", $newsletter->getStatus()));
        
        return $messaje->getArrayCopy();
    }
}
