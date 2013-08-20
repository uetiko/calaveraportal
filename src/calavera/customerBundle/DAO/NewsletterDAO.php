<?php
namespace calavera\customerBundle\DAO;
use \Exception,
 calavera\customerBundle\Entity\NewsletterSubscription,
 calavera\customerBundle\Entity\CatGender,
 calavera\customerBundle\Entity\CatNewsletterStatus;
/**
 * Description of NewsletterDAO
 * @author Angel Barrientos Cruz <uetiko@gmail.com>
 */
class NewsletterDAO {
    /**
     *
     * @var Doctrine\ORM\EntityManager 
     */
    private $em = null;
    /**
     * 
     * @param Doctrine\ORM\EntityManager $em
     */
    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }
    /**
     * 
     * @param \calavera\customerBundle\DTO\CustomerDTO $customer
     */
    public function registerNewsletter(\calavera\customerBundle\DTO\CustomerDTO $customer){
        $em = new \Doctrine\ORM\EntityManager();
        $subscription = new NewsletterSubscription();
        $gender = new CatGender();
        $status = new CatNewsletterStatus();
        
        
        
    }
}