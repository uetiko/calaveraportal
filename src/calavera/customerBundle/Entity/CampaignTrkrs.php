<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignTrkrs
 *
 * @ORM\Table(name="campaign_trkrs")
 * @ORM\Entity
 */
class CampaignTrkrs
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
     * @ORM\Column(name="tracker_name", type="string", length=30, nullable=true)
     */
    private $trackerName;

    /**
     * @var string
     *
     * @ORM\Column(name="tracker_url", type="string", length=255, nullable=true)
     */
    private $trackerUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="tracker_key", type="integer", nullable=false)
     */
    private $trackerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

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
     * @var boolean
     *
     * @ORM\Column(name="is_optout", type="boolean", nullable=true)
     */
    private $isOptout;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set trackerName
     *
     * @param string $trackerName
     * @return CampaignTrkrs
     */
    public function setTrackerName($trackerName)
    {
        $this->trackerName = $trackerName;
    
        return $this;
    }

    /**
     * Get trackerName
     *
     * @return string 
     */
    public function getTrackerName()
    {
        return $this->trackerName;
    }

    /**
     * Set trackerUrl
     *
     * @param string $trackerUrl
     * @return CampaignTrkrs
     */
    public function setTrackerUrl($trackerUrl)
    {
        $this->trackerUrl = $trackerUrl;
    
        return $this;
    }

    /**
     * Get trackerUrl
     *
     * @return string 
     */
    public function getTrackerUrl()
    {
        return $this->trackerUrl;
    }

    /**
     * Set trackerKey
     *
     * @param integer $trackerKey
     * @return CampaignTrkrs
     */
    public function setTrackerKey($trackerKey)
    {
        $this->trackerKey = $trackerKey;
    
        return $this;
    }

    /**
     * Get trackerKey
     *
     * @return integer 
     */
    public function getTrackerKey()
    {
        return $this->trackerKey;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return CampaignTrkrs
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return CampaignTrkrs
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
     * @return CampaignTrkrs
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
     * @return CampaignTrkrs
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
     * @return CampaignTrkrs
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
     * Set isOptout
     *
     * @param boolean $isOptout
     * @return CampaignTrkrs
     */
    public function setIsOptout($isOptout)
    {
        $this->isOptout = $isOptout;
    
        return $this;
    }

    /**
     * Get isOptout
     *
     * @return boolean 
     */
    public function getIsOptout()
    {
        return $this->isOptout;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return CampaignTrkrs
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