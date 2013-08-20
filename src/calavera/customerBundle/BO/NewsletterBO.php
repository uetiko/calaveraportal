<?php
namespace calavera\customerBundle\BO;
use \Exception;
/**
 * Description of NewsletterBO
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class NewsletterBO {
    private $nldao = null;
    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->nldao = new \calavera\customerBundle\DAO\NewsletterDAO($em);
    }
    
}
