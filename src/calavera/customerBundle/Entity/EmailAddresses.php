<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailAddresses
 *
 * @ORM\Table(name="email_addresses")
 * @ORM\Entity
 */
class EmailAddresses
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=255, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address_caps", type="string", length=255, nullable=true)
     */
    private $emailAddressCaps;

    /**
     * @var boolean
     *
     * @ORM\Column(name="invalid_email", type="boolean", nullable=true)
     */
    private $invalidEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt_out", type="boolean", nullable=true)
     */
    private $optOut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return EmailAddresses
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set emailAddressCaps
     *
     * @param string $emailAddressCaps
     * @return EmailAddresses
     */
    public function setEmailAddressCaps($emailAddressCaps)
    {
        $this->emailAddressCaps = $emailAddressCaps;
    
        return $this;
    }

    /**
     * Get emailAddressCaps
     *
     * @return string 
     */
    public function getEmailAddressCaps()
    {
        return $this->emailAddressCaps;
    }

    /**
     * Set invalidEmail
     *
     * @param boolean $invalidEmail
     * @return EmailAddresses
     */
    public function setInvalidEmail($invalidEmail)
    {
        $this->invalidEmail = $invalidEmail;
    
        return $this;
    }

    /**
     * Get invalidEmail
     *
     * @return boolean 
     */
    public function getInvalidEmail()
    {
        return $this->invalidEmail;
    }

    /**
     * Set optOut
     *
     * @param boolean $optOut
     * @return EmailAddresses
     */
    public function setOptOut($optOut)
    {
        $this->optOut = $optOut;
    
        return $this;
    }

    /**
     * Get optOut
     *
     * @return boolean 
     */
    public function getOptOut()
    {
        return $this->optOut;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return EmailAddresses
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = new \DateTime($dateCreated);
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return EmailAddresses
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = new \DateTime($dateModified);
    
        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return EmailAddresses
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
}