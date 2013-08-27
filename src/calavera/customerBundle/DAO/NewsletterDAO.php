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
    public function registerNewsletter(\calavera\customerBundle\DTO\NewsletterDTO $newsletter){
        $subscription = new NewsletterSubscription();
        $gender = new CatGender();
        $status = new CatNewsletterStatus();
        $gender->setGender($newsletter->getGender());
        $dql = "select s from \calavera\customerBundle\Entity\CatNewsletterStatus s where s.status = 'subscribed'";
        try {
            $query = $this->em->createQuery($dql);
            $status = $query->getOneOrNullResult();
        } catch (\Doctrine\ORM\ORMException $orme) {
            echo $orme->getTraceAsString();
        } catch (\Doctrine\ORM\NoResultException $nre){
            
        }  catch (\Doctrine\ORM\ORMInvalidArgumentException $ormiae){
            
        }
        $subscription->setIdNewsletterStatus($status);
        $subscription->setEmail($newsletter->getEmail());
        $subscription->getGener();
        $dql = "";
        try {
            $this->em->persist($subscription);
            $this->em->flush();
            $status = "Ha sido registrado en nuestro newsletter";
        } catch (\Doctrine\ORM\ORMException $orme) {
            echo $orme->getTraceAsString();
            $status = "No pudo ser registrado en nuestro newsletter.";
        } catch (\Doctrine\ORM\NoResultException $nre){
            $status = "No pudo ser registrado en nuestro newsletter.";
        }  catch (\Doctrine\ORM\ORMInvalidArgumentException $ormiae){
            $status = "No pudo ser registrado en nuestro newsletter.";
        } catch (\Exception $e){
            $status = "No pudo ser registrado en nuestro newsletter.";
        }
        return $status;
    }
    
    public function getCatStatusNewsletter(){
        $status = new \calavera\customerBundle\Entity\CatNewsletterStatus();
        $dql = "select u from \calavera\customerBundle\Entity\CatNewsletterStatus u where u.status = 'subscribed'";
        try{
            $query = $this->em->createQuery($dql);
            $status = $query->getOneOrNullResult();
        }catch(\Doctrine\ORM\NoResultException $orme){
            
        } catch (\Exception $e){
            
        }
        return $status;
    }
    public function registerMailInNewsletter(){
        
    }
    
}