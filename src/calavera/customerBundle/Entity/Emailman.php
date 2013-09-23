<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emailman
 *
 * @ORM\Table(name="emailman")
 * @ORM\Entity
 */
class Emailman
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var string
     *
     * @ORM\Column(name="marketing_id", type="string", length=36, nullable=true)
     */
    private $marketingId;

    /**
     * @var string
     *
     * @ORM\Column(name="list_id", type="string", length=36, nullable=true)
     */
    private $listId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_date_time", type="datetime", nullable=true)
     */
    private $sendDateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_queue", type="boolean", nullable=true)
     */
    private $inQueue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="in_queue_date", type="datetime", nullable=true)
     */
    private $inQueueDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="send_attempts", type="integer", nullable=true)
     */
    private $sendAttempts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="related_id", type="string", length=36, nullable=true)
     */
    private $relatedId;

    /**
     * @var string
     *
     * @ORM\Column(name="related_type", type="string", length=100, nullable=true)
     */
    private $relatedType;



    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Emailman
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
     * @return Emailman
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
     * Set userId
     *
     * @param string $userId
     * @return Emailman
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return Emailman
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
     * Set marketingId
     *
     * @param string $marketingId
     * @return Emailman
     */
    public function setMarketingId($marketingId)
    {
        $this->marketingId = $marketingId;
    
        return $this;
    }

    /**
     * Get marketingId
     *
     * @return string 
     */
    public function getMarketingId()
    {
        return $this->marketingId;
    }

    /**
     * Set listId
     *
     * @param string $listId
     * @return Emailman
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
    
        return $this;
    }

    /**
     * Get listId
     *
     * @return string 
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set sendDateTime
     *
     * @param \DateTime $sendDateTime
     * @return Emailman
     */
    public function setSendDateTime($sendDateTime)
    {
        $this->sendDateTime = $sendDateTime;
    
        return $this;
    }

    /**
     * Get sendDateTime
     *
     * @return \DateTime 
     */
    public function getSendDateTime()
    {
        return $this->sendDateTime;
    }

    /**
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     * @return Emailman
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
     * Set inQueue
     *
     * @param boolean $inQueue
     * @return Emailman
     */
    public function setInQueue($inQueue)
    {
        $this->inQueue = $inQueue;
    
        return $this;
    }

    /**
     * Get inQueue
     *
     * @return boolean 
     */
    public function getInQueue()
    {
        return $this->inQueue;
    }

    /**
     * Set inQueueDate
     *
     * @param \DateTime $inQueueDate
     * @return Emailman
     */
    public function setInQueueDate($inQueueDate)
    {
        $this->inQueueDate = $inQueueDate;
    
        return $this;
    }

    /**
     * Get inQueueDate
     *
     * @return \DateTime 
     */
    public function getInQueueDate()
    {
        return $this->inQueueDate;
    }

    /**
     * Set sendAttempts
     *
     * @param integer $sendAttempts
     * @return Emailman
     */
    public function setSendAttempts($sendAttempts)
    {
        $this->sendAttempts = $sendAttempts;
    
        return $this;
    }

    /**
     * Get sendAttempts
     *
     * @return integer 
     */
    public function getSendAttempts()
    {
        return $this->sendAttempts;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Emailman
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
     * Set relatedId
     *
     * @param string $relatedId
     * @return Emailman
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;
    
        return $this;
    }

    /**
     * Get relatedId
     *
     * @return string 
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }

    /**
     * Set relatedType
     *
     * @param string $relatedType
     * @return Emailman
     */
    public function setRelatedType($relatedType)
    {
        $this->relatedType = $relatedType;
    
        return $this;
    }

    /**
     * Get relatedType
     *
     * @return string 
     */
    public function getRelatedType()
    {
        return $this->relatedType;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}