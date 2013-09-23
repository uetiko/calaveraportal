<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaigns
 *
 * @ORM\Table(name="campaigns")
 * @ORM\Entity
 */
class Campaigns
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

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
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tracker_key", type="integer", nullable=false)
     */
    private $trackerKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tracker_count", type="integer", nullable=true)
     */
    private $trackerCount;

    /**
     * @var string
     *
     * @ORM\Column(name="refer_url", type="string", length=255, nullable=true)
     */
    private $referUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="tracker_text", type="string", length=255, nullable=true)
     */
    private $trackerText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="impressions", type="integer", nullable=true)
     */
    private $impressions;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_id", type="string", length=36, nullable=true)
     */
    private $currencyId;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", nullable=true)
     */
    private $budget;

    /**
     * @var float
     *
     * @ORM\Column(name="expected_cost", type="float", nullable=true)
     */
    private $expectedCost;

    /**
     * @var float
     *
     * @ORM\Column(name="actual_cost", type="float", nullable=true)
     */
    private $actualCost;

    /**
     * @var float
     *
     * @ORM\Column(name="expected_revenue", type="float", nullable=true)
     */
    private $expectedRevenue;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_type", type="string", length=100, nullable=true)
     */
    private $campaignType;

    /**
     * @var string
     *
     * @ORM\Column(name="objective", type="text", nullable=true)
     */
    private $objective;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="frequency", type="string", length=100, nullable=true)
     */
    private $frequency;



    /**
     * Set name
     *
     * @param string $name
     * @return Campaigns
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return Campaigns
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return Campaigns
     */
    public function setAssignedUserId($assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;
    
        return $this;
    }

    /**
     * Get assignedUserId
     *
     * @return string 
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * Set trackerKey
     *
     * @param integer $trackerKey
     * @return Campaigns
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
     * Set trackerCount
     *
     * @param integer $trackerCount
     * @return Campaigns
     */
    public function setTrackerCount($trackerCount)
    {
        $this->trackerCount = $trackerCount;
    
        return $this;
    }

    /**
     * Get trackerCount
     *
     * @return integer 
     */
    public function getTrackerCount()
    {
        return $this->trackerCount;
    }

    /**
     * Set referUrl
     *
     * @param string $referUrl
     * @return Campaigns
     */
    public function setReferUrl($referUrl)
    {
        $this->referUrl = $referUrl;
    
        return $this;
    }

    /**
     * Get referUrl
     *
     * @return string 
     */
    public function getReferUrl()
    {
        return $this->referUrl;
    }

    /**
     * Set trackerText
     *
     * @param string $trackerText
     * @return Campaigns
     */
    public function setTrackerText($trackerText)
    {
        $this->trackerText = $trackerText;
    
        return $this;
    }

    /**
     * Get trackerText
     *
     * @return string 
     */
    public function getTrackerText()
    {
        return $this->trackerText;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Campaigns
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Campaigns
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Campaigns
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
     * Set impressions
     *
     * @param integer $impressions
     * @return Campaigns
     */
    public function setImpressions($impressions)
    {
        $this->impressions = $impressions;
    
        return $this;
    }

    /**
     * Get impressions
     *
     * @return integer 
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     * @return Campaigns
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
    
        return $this;
    }

    /**
     * Get currencyId
     *
     * @return string 
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set budget
     *
     * @param float $budget
     * @return Campaigns
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    
        return $this;
    }

    /**
     * Get budget
     *
     * @return float 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set expectedCost
     *
     * @param float $expectedCost
     * @return Campaigns
     */
    public function setExpectedCost($expectedCost)
    {
        $this->expectedCost = $expectedCost;
    
        return $this;
    }

    /**
     * Get expectedCost
     *
     * @return float 
     */
    public function getExpectedCost()
    {
        return $this->expectedCost;
    }

    /**
     * Set actualCost
     *
     * @param float $actualCost
     * @return Campaigns
     */
    public function setActualCost($actualCost)
    {
        $this->actualCost = $actualCost;
    
        return $this;
    }

    /**
     * Get actualCost
     *
     * @return float 
     */
    public function getActualCost()
    {
        return $this->actualCost;
    }

    /**
     * Set expectedRevenue
     *
     * @param float $expectedRevenue
     * @return Campaigns
     */
    public function setExpectedRevenue($expectedRevenue)
    {
        $this->expectedRevenue = $expectedRevenue;
    
        return $this;
    }

    /**
     * Get expectedRevenue
     *
     * @return float 
     */
    public function getExpectedRevenue()
    {
        return $this->expectedRevenue;
    }

    /**
     * Set campaignType
     *
     * @param string $campaignType
     * @return Campaigns
     */
    public function setCampaignType($campaignType)
    {
        $this->campaignType = $campaignType;
    
        return $this;
    }

    /**
     * Get campaignType
     *
     * @return string 
     */
    public function getCampaignType()
    {
        return $this->campaignType;
    }

    /**
     * Set objective
     *
     * @param string $objective
     * @return Campaigns
     */
    public function setObjective($objective)
    {
        $this->objective = $objective;
    
        return $this;
    }

    /**
     * Get objective
     *
     * @return string 
     */
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Campaigns
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set frequency
     *
     * @param string $frequency
     * @return Campaigns
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    
        return $this;
    }

    /**
     * Get frequency
     *
     * @return string 
     */
    public function getFrequency()
    {
        return $this->frequency;
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