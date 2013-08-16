<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterSubscription
 *
 * @ORM\Table(name="newsletter_subscription")
 * @ORM\Entity
 */
class NewsletterSubscription {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_newsletter_subscription", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNewsletterSubscription;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="gener", type="string", length=6, nullable=true)
     */
    private $gener;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_usuario")
     * })
     */
    private $idUser;

    /**
     * @var \CatNewsletterStatus
     *
     * @ORM\ManyToOne(targetEntity="CatNewsletterStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_newsletter_status", referencedColumnName="id_newsletter_status")
     * })
     */
    private $idNewsletterStatus;

    /**
     * Get idNewsletterSubscription
     *
     * @return integer 
     */
    public function getIdNewsletterSubscription() {
        return $this->idNewsletterSubscription;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return NewsletterSubscription
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return NewsletterSubscription
     */
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Set gener
     *
     * @param string $gener
     * @return NewsletterSubscription
     */
    public function setGener($gener) {
        $this->gener = $gener;

        return $this;
    }

    /**
     * Get gener
     *
     * @return string 
     */
    public function getGener() {
        return $this->gener;
    }

    /**
     * Set idUser
     *
     * @param \calavera\customerBundle\Entity\Usuario $idUser
     * @return NewsletterSubscription
     */
    public function setIdUser(\calavera\customerBundle\Entity\Usuario $idUser = null) {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \calavera\customerBundle\Entity\Usuario 
     */
    public function getIdUser() {
        return $this->idUser;
    }

    /**
     * Set idNewsletterStatus
     *
     * @param \calavera\customerBundle\Entity\CatNewsletterStatus $idNewsletterStatus
     * @return NewsletterSubscription
     */
    public function setIdNewsletterStatus(\calavera\customerBundle\Entity\CatNewsletterStatus $idNewsletterStatus = null) {
        $this->idNewsletterStatus = $idNewsletterStatus;

        return $this;
    }

    /**
     * Get idNewsletterStatus
     *
     * @return \calavera\customerBundle\Entity\CatNewsletterStatus 
     */
    public function getIdNewsletterStatus() {
        return $this->idNewsletterStatus;
    }

}