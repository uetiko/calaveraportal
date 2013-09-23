<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignLog
 *
 * @ORM\Table(name="campaign_log")
 * @ORM\Entity
 */
class CampaignLog
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
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var string
     *
     * @ORM\Column(name="target_tracker_key", type="string", length=36, nullable=true)
     */
    private $targetTrackerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="target_id", type="string", length=36, nullable=true)
     */
    private $targetId;

    /**
     * @var string
     *
     * @ORM\Column(name="target_type", type="string", length=100, nullable=true)
     */
    private $targetType;

    /**
     * @var string
     *
     * @ORM\Column(name="activity_type", type="string", length=100, nullable=true)
     */
    private $activityType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="activity_date", type="datetime", nullable=true)
     */
    private $activityDate;

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
     * @var boolean
     *
     * @ORM\Column(name="archived", type="boolean", nullable=true)
     */
    private $archived;

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=true)
     */
    private $hits;

    /**
     * @var string
     *
     * @ORM\Column(name="list_id", type="string", length=36, nullable=true)
     */
    private $listId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string
     *
     * @ORM\Column(name="more_information", type="string", length=100, nullable=true)
     */
    private $moreInformation;

    /**
     * @var string
     *
     * @ORM\Column(name="marketing_id", type="string", length=36, nullable=true)
     */
    private $marketingId;



    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return CampaignLog
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
     * Set targetTrackerKey
     *
     * @param string $targetTrackerKey
     * @return CampaignLog
     */
    public function setTargetTrackerKey($targetTrackerKey)
    {
        $this->targetTrackerKey = $targetTrackerKey;
    
        return $this;
    }

    /**
     * Get targetTrackerKey
     *
     * @return string 
     */
    public function getTargetTrackerKey()
    {
        return $this->targetTrackerKey;
    }

    /**
     * Set targetId
     *
     * @param string $targetId
     * @return CampaignLog
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
    
        return $this;
    }

    /**
     * Get targetId
     *
     * @return string 
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Set targetType
     *
     * @param string $targetType
     * @return CampaignLog
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;
    
        return $this;
    }

    /**
     * Get targetType
     *
     * @return string 
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * Set activityType
     *
     * @param string $activityType
     * @return CampaignLog
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;
    
        return $this;
    }

    /**
     * Get activityType
     *
     * @return string 
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Set activityDate
     *
     * @param \DateTime $activityDate
     * @return CampaignLog
     */
    public function setActivityDate($activityDate)
    {
        $this->activityDate = $activityDate;
    
        return $this;
    }

    /**
     * Get activityDate
     *
     * @return \DateTime 
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * Set relatedId
     *
     * @param string $relatedId
     * @return CampaignLog
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
     * @return CampaignLog
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
     * Set archived
     *
     * @param boolean $archived
     * @return CampaignLog
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    
        return $this;
    }

    /**
     * Get archived
     *
     * @return boolean 
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     * @return CampaignLog
     */
    public function setHits($hits)
    {
        $this->hits = $hits;
    
        return $this;
    }

    /**
     * Get hits
     *
     * @return integer 
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set listId
     *
     * @param string $listId
     * @return CampaignLog
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return CampaignLog
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return CampaignLog
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
     * Set moreInformation
     *
     * @param string $moreInformation
     * @return CampaignLog
     */
    public function setMoreInformation($moreInformation)
    {
        $this->moreInformation = $moreInformation;
    
        return $this;
    }

    /**
     * Get moreInformation
     *
     * @return string 
     */
    public function getMoreInformation()
    {
        return $this->moreInformation;
    }

    /**
     * Set marketingId
     *
     * @param string $marketingId
     * @return CampaignLog
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}