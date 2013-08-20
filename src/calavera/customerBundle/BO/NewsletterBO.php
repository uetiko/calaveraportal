<?php
namespace calavera\customerBundle\BO;
use \Exception;
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
    
    public function registerMailInNewsletter(){
        
    }
}
