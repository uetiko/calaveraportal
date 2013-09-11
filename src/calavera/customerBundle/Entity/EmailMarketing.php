<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailMarketing
 *
 * @ORM\Table(name="email_marketing")
 * @ORM\Entity
 */
class EmailMarketing
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
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="from_name", type="string", length=100, nullable=true)
     */
    private $fromName;

    /**
     * @var string
     *
     * @ORM\Column(name="from_addr", type="string", length=100, nullable=true)
     */
    private $fromAddr;

    /**
     * @var string
     *
     * @ORM\Column(name="reply_to_name", type="string", length=100, nullable=true)
     */
    private $replyToName;

    /**
     * @var string
     *
     * @ORM\Column(name="reply_to_addr", type="string", length=100, nullable=true)
     */
    private $replyToAddr;

    /**
     * @var string
     *
     * @ORM\Column(name="inbound_email_id", type="string", length=36, nullable=true)
     */
    private $inboundEmailId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var string
     *
     * @ORM\Column(name="template_id", type="string", length=36, nullable=false)
     */
    private $templateId;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="all_prospect_lists", type="boolean", nullable=true)
     */
    private $allProspectLists;



    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return EmailMarketing
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return EmailMarketing
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;
    
        return $this;
    }

    /**
     * Get dateEntered
     *
     * @return \DateTime 
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return EmailMarketing
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     * @return EmailMarketing
     */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->modifiedUserId = $modifiedUserId;
    
        return $this;
    }

    /**
     * Get modifiedUserId
     *
     * @return string 
     */
    public function getModifiedUserId()
    {
        return $this->modifiedUserId;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return EmailMarketing
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return EmailMarketing
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fromName
     *
     * @param string $fromName
     * @return EmailMarketing
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
    
        return $this;
    }

    /**
     * Get fromName
     *
     * @return string 
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Set fromAddr
     *
     * @param string $fromAddr
     * @return EmailMarketing
     */
    public function setFromAddr($fromAddr)
    {
        $this->fromAddr = $fromAddr;
    
        return $this;
    }

    /**
     * Get fromAddr
     *
     * @return string 
     */
    public function getFromAddr()
    {
        return $this->fromAddr;
    }

    /**
     * Set replyToName
     *
     * @param string $replyToName
     * @return EmailMarketing
     */
    public function setReplyToName($replyToName)
    {
        $this->replyToName = $replyToName;
    
        return $this;
    }

    /**
     * Get replyToName
     *
     * @return string 
     */
    public function getReplyToName()
    {
        return $this->replyToName;
    }

    /**
     * Set replyToAddr
     *
     * @param string $replyToAddr
     * @return EmailMarketing
     */
    public function setReplyToAddr($replyToAddr)
    {
        $this->replyToAddr = $replyToAddr;
    
        return $this;
    }

    /**
     * Get replyToAddr
     *
     * @return string 
     */
    public function getReplyToAddr()
    {
        return $this->replyToAddr;
    }

    /**
     * Set inboundEmailId
     *
     * @param string $inboundEmailId
     * @return EmailMarketing
     */
    public function setInboundEmailId($inboundEmailId)
    {
        $this->inboundEmailId = $inboundEmailId;
    
        return $this;
    }

    /**
     * Get inboundEmailId
     *
     * @return string 
     */
    public function getInboundEmailId()
    {
        return $this->inboundEmailId;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return EmailMarketing
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    
        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set templateId
     *
     * @param string $templateId
     * @return EmailMarketing
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    
        return $this;
    }

    /**
     * Get templateId
     *
     * @return string 
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return EmailMarketing
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return EmailMarketing
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    
        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string 
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set allProspectLists
     *
     * @param boolean $allProspectLists
     * @return EmailMarketing
     */
    public function setAllProspectLists($allProspectLists)
    {
        $this->allProspectLists = $allProspectLists;
    
        return $this;
    }

    /**
     * Get allProspectLists
     *
     * @return boolean 
     */
    public function getAllProspectLists()
    {
        return $this->allProspectLists;
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