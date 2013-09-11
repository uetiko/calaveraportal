<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsBeans
 *
 * @ORM\Table(name="emails_beans")
 * @ORM\Entity
 */
class EmailsBeans
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=36, nullable=true)
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=true)
     */
    private $beanId;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_module", type="string", length=100, nullable=true)
     */
    private $beanModule;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_data", type="text", nullable=true)
     */
    private $campaignData;

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
     * Set emailId
     *
     * @param string $emailId
     * @return EmailsBeans
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
    
        return $this;
    }

    /**
     * Get emailId
     *
     * @return string 
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set beanId
     *
     * @param string $beanId
     * @return EmailsBeans
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
     * @return EmailsBeans
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
     * Set campaignData
     *
     * @param string $campaignData
     * @return EmailsBeans
     */
    public function setCampaignData($campaignData)
    {
        $this->campaignData = $campaignData;
    
        return $this;
    }

    /**
     * Get campaignData
     *
     * @return string 
     */
    public function getCampaignData()
    {
        return $this->campaignData;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return EmailsBeans
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    
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
     * @return EmailsBeans
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