<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailAddrBeanRel
 *
 * @ORM\Table(name="email_addr_bean_rel")
 * @ORM\Entity
 */
class EmailAddrBeanRel
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
     * @ORM\Column(name="email_address_id", type="string", length=36, nullable=false)
     */
    private $emailAddressId;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=false)
     */
    private $beanId;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_module", type="string", length=100, nullable=true)
     */
    private $beanModule;

    /**
     * @var boolean
     *
     * @ORM\Column(name="primary_address", type="boolean", nullable=true)
     */
    private $primaryAddress;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reply_to_address", type="boolean", nullable=true)
     */
    private $replyToAddress;

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
     * Set the id
     * @param String $id
     */
    public function __construct($id) {
        $this->id = $id;
    }

    /**
     * Set emailAddressId
     *
     * @param string $emailAddressId
     * @return EmailAddrBeanRel
     */
    public function setEmailAddressId($emailAddressId)
    {
        $this->emailAddressId = $emailAddressId;
    
        return $this;
    }

    /**
     * Get emailAddressId
     *
     * @return string 
     */
    public function getEmailAddressId()
    {
        return $this->emailAddressId;
    }

    /**
     * Set beanId
     *
     * @param string $beanId
     * @return EmailAddrBeanRel
     */
    public function setBeanId($beanId)
    {
        $this->beanId = $beanId;
    
        return $this;
    }

    /**
     * Get beanId
     *
     * @return string 
     */
    public function getBeanId()
    {
        return $this->beanId;
    }

    /**
     * Set beanModule
     *
     * @param string $beanModule
     * @return EmailAddrBeanRel
     */
    public function setBeanModule($beanModule)
    {
        $this->beanModule = $beanModule;
    
        return $this;
    }

    /**
     * Get beanModule
     *
     * @return string 
     */
    public function getBeanModule()
    {
        return $this->beanModule;
    }

    /**
     * Set primaryAddress
     *
     * @param boolean $primaryAddress
     * @return EmailAddrBeanRel
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->primaryAddress = $primaryAddress;
    
        return $this;
    }

    /**
     * Get primaryAddress
     *
     * @return boolean 
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * Set replyToAddress
     *
     * @param boolean $replyToAddress
     * @return EmailAddrBeanRel
     */
    public function setReplyToAddress($replyToAddress)
    {
        $this->replyToAddress = $replyToAddress;
    
        return $this;
    }

    /**
     * Get replyToAddress
     *
     * @return boolean 
     */
    public function getReplyToAddress()
    {
        return $this->replyToAddress;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return EmailAddrBeanRel
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
     * @return EmailAddrBeanRel
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
     * @return EmailAddrBeanRel
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
}