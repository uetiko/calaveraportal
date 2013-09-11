<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leads
 *
 * @ORM\Table(name="leads")
 * @ORM\Entity
 */
class Leads
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @var string
     *
     * @ORM\Column(name="salutation", type="string", length=255, nullable=true)
     */
    private $salutation;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=100, nullable=true)
     */
    private $department;

    /**
     * @var boolean
     *
     * @ORM\Column(name="do_not_call", type="boolean", nullable=true)
     */
    private $doNotCall;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_home", type="string", length=100, nullable=true)
     */
    private $phoneHome;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_mobile", type="string", length=100, nullable=true)
     */
    private $phoneMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_work", type="string", length=100, nullable=true)
     */
    private $phoneWork;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_other", type="string", length=100, nullable=true)
     */
    private $phoneOther;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_fax", type="string", length=100, nullable=true)
     */
    private $phoneFax;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_address_street", type="string", length=150, nullable=true)
     */
    private $primaryAddressStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_address_city", type="string", length=100, nullable=true)
     */
    private $primaryAddressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_address_state", type="string", length=100, nullable=true)
     */
    private $primaryAddressState;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_address_postalcode", type="string", length=20, nullable=true)
     */
    private $primaryAddressPostalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="primary_address_country", type="string", length=255, nullable=true)
     */
    private $primaryAddressCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_address_street", type="string", length=150, nullable=true)
     */
    private $altAddressStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_address_city", type="string", length=100, nullable=true)
     */
    private $altAddressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_address_state", type="string", length=100, nullable=true)
     */
    private $altAddressState;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_address_postalcode", type="string", length=20, nullable=true)
     */
    private $altAddressPostalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_address_country", type="string", length=255, nullable=true)
     */
    private $altAddressCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="assistant", type="string", length=75, nullable=true)
     */
    private $assistant;

    /**
     * @var string
     *
     * @ORM\Column(name="assistant_phone", type="string", length=100, nullable=true)
     */
    private $assistantPhone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="converted", type="boolean", nullable=true)
     */
    private $converted;

    /**
     * @var string
     *
     * @ORM\Column(name="refered_by", type="string", length=100, nullable=true)
     */
    private $referedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="lead_source", type="string", length=100, nullable=true)
     */
    private $leadSource;

    /**
     * @var string
     *
     * @ORM\Column(name="lead_source_description", type="text", nullable=true)
     */
    private $leadSourceDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="status_description", type="text", nullable=true)
     */
    private $statusDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="reports_to_id", type="string", length=36, nullable=true)
     */
    private $reportsToId;

    /**
     * @var string
     *
     * @ORM\Column(name="account_name", type="string", length=255, nullable=true)
     */
    private $accountName;

    /**
     * @var string
     *
     * @ORM\Column(name="account_description", type="text", nullable=true)
     */
    private $accountDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="account_id", type="string", length=36, nullable=true)
     */
    private $accountId;

    /**
     * @var string
     *
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=true)
     */
    private $opportunityId;

    /**
     * @var string
     *
     * @ORM\Column(name="opportunity_name", type="string", length=255, nullable=true)
     */
    private $opportunityName;

    /**
     * @var string
     *
     * @ORM\Column(name="opportunity_amount", type="string", length=50, nullable=true)
     */
    private $opportunityAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="portal_name", type="string", length=255, nullable=true)
     */
    private $portalName;

    /**
     * @var string
     *
     * @ORM\Column(name="portal_app", type="string", length=255, nullable=true)
     */
    private $portalApp;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;



    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Leads
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
     * @return Leads
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
     * @return Leads
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
     * @return Leads
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
     * Set description
     *
     * @param string $description
     * @return Leads
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Leads
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
     * @return Leads
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
     * Set salutation
     *
     * @param string $salutation
     * @return Leads
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
    
        return $this;
    }

    /**
     * Get salutation
     *
     * @return string 
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Leads
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Leads
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Leads
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return Leads
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    
        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set doNotCall
     *
     * @param boolean $doNotCall
     * @return Leads
     */
    public function setDoNotCall($doNotCall)
    {
        $this->doNotCall = $doNotCall;
    
        return $this;
    }

    /**
     * Get doNotCall
     *
     * @return boolean 
     */
    public function getDoNotCall()
    {
        return $this->doNotCall;
    }

    /**
     * Set phoneHome
     *
     * @param string $phoneHome
     * @return Leads
     */
    public function setPhoneHome($phoneHome)
    {
        $this->phoneHome = $phoneHome;
    
        return $this;
    }

    /**
     * Get phoneHome
     *
     * @return string 
     */
    public function getPhoneHome()
    {
        return $this->phoneHome;
    }

    /**
     * Set phoneMobile
     *
     * @param string $phoneMobile
     * @return Leads
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;
    
        return $this;
    }

    /**
     * Get phoneMobile
     *
     * @return string 
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }

    /**
     * Set phoneWork
     *
     * @param string $phoneWork
     * @return Leads
     */
    public function setPhoneWork($phoneWork)
    {
        $this->phoneWork = $phoneWork;
    
        return $this;
    }

    /**
     * Get phoneWork
     *
     * @return string 
     */
    public function getPhoneWork()
    {
        return $this->phoneWork;
    }

    /**
     * Set phoneOther
     *
     * @param string $phoneOther
     * @return Leads
     */
    public function setPhoneOther($phoneOther)
    {
        $this->phoneOther = $phoneOther;
    
        return $this;
    }

    /**
     * Get phoneOther
     *
     * @return string 
     */
    public function getPhoneOther()
    {
        return $this->phoneOther;
    }

    /**
     * Set phoneFax
     *
     * @param string $phoneFax
     * @return Leads
     */
    public function setPhoneFax($phoneFax)
    {
        $this->phoneFax = $phoneFax;
    
        return $this;
    }

    /**
     * Get phoneFax
     *
     * @return string 
     */
    public function getPhoneFax()
    {
        return $this->phoneFax;
    }

    /**
     * Set primaryAddressStreet
     *
     * @param string $primaryAddressStreet
     * @return Leads
     */
    public function setPrimaryAddressStreet($primaryAddressStreet)
    {
        $this->primaryAddressStreet = $primaryAddressStreet;
    
        return $this;
    }

    /**
     * Get primaryAddressStreet
     *
     * @return string 
     */
    public function getPrimaryAddressStreet()
    {
        return $this->primaryAddressStreet;
    }

    /**
     * Set primaryAddressCity
     *
     * @param string $primaryAddressCity
     * @return Leads
     */
    public function setPrimaryAddressCity($primaryAddressCity)
    {
        $this->primaryAddressCity = $primaryAddressCity;
    
        return $this;
    }

    /**
     * Get primaryAddressCity
     *
     * @return string 
     */
    public function getPrimaryAddressCity()
    {
        return $this->primaryAddressCity;
    }

    /**
     * Set primaryAddressState
     *
     * @param string $primaryAddressState
     * @return Leads
     */
    public function setPrimaryAddressState($primaryAddressState)
    {
        $this->primaryAddressState = $primaryAddressState;
    
        return $this;
    }

    /**
     * Get primaryAddressState
     *
     * @return string 
     */
    public function getPrimaryAddressState()
    {
        return $this->primaryAddressState;
    }

    /**
     * Set primaryAddressPostalcode
     *
     * @param string $primaryAddressPostalcode
     * @return Leads
     */
    public function setPrimaryAddressPostalcode($primaryAddressPostalcode)
    {
        $this->primaryAddressPostalcode = $primaryAddressPostalcode;
    
        return $this;
    }

    /**
     * Get primaryAddressPostalcode
     *
     * @return string 
     */
    public function getPrimaryAddressPostalcode()
    {
        return $this->primaryAddressPostalcode;
    }

    /**
     * Set primaryAddressCountry
     *
     * @param string $primaryAddressCountry
     * @return Leads
     */
    public function setPrimaryAddressCountry($primaryAddressCountry)
    {
        $this->primaryAddressCountry = $primaryAddressCountry;
    
        return $this;
    }

    /**
     * Get primaryAddressCountry
     *
     * @return string 
     */
    public function getPrimaryAddressCountry()
    {
        return $this->primaryAddressCountry;
    }

    /**
     * Set altAddressStreet
     *
     * @param string $altAddressStreet
     * @return Leads
     */
    public function setAltAddressStreet($altAddressStreet)
    {
        $this->altAddressStreet = $altAddressStreet;
    
        return $this;
    }

    /**
     * Get altAddressStreet
     *
     * @return string 
     */
    public function getAltAddressStreet()
    {
        return $this->altAddressStreet;
    }

    /**
     * Set altAddressCity
     *
     * @param string $altAddressCity
     * @return Leads
     */
    public function setAltAddressCity($altAddressCity)
    {
        $this->altAddressCity = $altAddressCity;
    
        return $this;
    }

    /**
     * Get altAddressCity
     *
     * @return string 
     */
    public function getAltAddressCity()
    {
        return $this->altAddressCity;
    }

    /**
     * Set altAddressState
     *
     * @param string $altAddressState
     * @return Leads
     */
    public function setAltAddressState($altAddressState)
    {
        $this->altAddressState = $altAddressState;
    
        return $this;
    }

    /**
     * Get altAddressState
     *
     * @return string 
     */
    public function getAltAddressState()
    {
        return $this->altAddressState;
    }

    /**
     * Set altAddressPostalcode
     *
     * @param string $altAddressPostalcode
     * @return Leads
     */
    public function setAltAddressPostalcode($altAddressPostalcode)
    {
        $this->altAddressPostalcode = $altAddressPostalcode;
    
        return $this;
    }

    /**
     * Get altAddressPostalcode
     *
     * @return string 
     */
    public function getAltAddressPostalcode()
    {
        return $this->altAddressPostalcode;
    }

    /**
     * Set altAddressCountry
     *
     * @param string $altAddressCountry
     * @return Leads
     */
    public function setAltAddressCountry($altAddressCountry)
    {
        $this->altAddressCountry = $altAddressCountry;
    
        return $this;
    }

    /**
     * Get altAddressCountry
     *
     * @return string 
     */
    public function getAltAddressCountry()
    {
        return $this->altAddressCountry;
    }

    /**
     * Set assistant
     *
     * @param string $assistant
     * @return Leads
     */
    public function setAssistant($assistant)
    {
        $this->assistant = $assistant;
    
        return $this;
    }

    /**
     * Get assistant
     *
     * @return string 
     */
    public function getAssistant()
    {
        return $this->assistant;
    }

    /**
     * Set assistantPhone
     *
     * @param string $assistantPhone
     * @return Leads
     */
    public function setAssistantPhone($assistantPhone)
    {
        $this->assistantPhone = $assistantPhone;
    
        return $this;
    }

    /**
     * Get assistantPhone
     *
     * @return string 
     */
    public function getAssistantPhone()
    {
        return $this->assistantPhone;
    }

    /**
     * Set converted
     *
     * @param boolean $converted
     * @return Leads
     */
    public function setConverted($converted)
    {
        $this->converted = $converted;
    
        return $this;
    }

    /**
     * Get converted
     *
     * @return boolean 
     */
    public function getConverted()
    {
        return $this->converted;
    }

    /**
     * Set referedBy
     *
     * @param string $referedBy
     * @return Leads
     */
    public function setReferedBy($referedBy)
    {
        $this->referedBy = $referedBy;
    
        return $this;
    }

    /**
     * Get referedBy
     *
     * @return string 
     */
    public function getReferedBy()
    {
        return $this->referedBy;
    }

    /**
     * Set leadSource
     *
     * @param string $leadSource
     * @return Leads
     */
    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;
    
        return $this;
    }

    /**
     * Get leadSource
     *
     * @return string 
     */
    public function getLeadSource()
    {
        return $this->leadSource;
    }

    /**
     * Set leadSourceDescription
     *
     * @param string $leadSourceDescription
     * @return Leads
     */
    public function setLeadSourceDescription($leadSourceDescription)
    {
        $this->leadSourceDescription = $leadSourceDescription;
    
        return $this;
    }

    /**
     * Get leadSourceDescription
     *
     * @return string 
     */
    public function getLeadSourceDescription()
    {
        return $this->leadSourceDescription;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Leads
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
     * Set statusDescription
     *
     * @param string $statusDescription
     * @return Leads
     */
    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;
    
        return $this;
    }

    /**
     * Get statusDescription
     *
     * @return string 
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * Set reportsToId
     *
     * @param string $reportsToId
     * @return Leads
     */
    public function setReportsToId($reportsToId)
    {
        $this->reportsToId = $reportsToId;
    
        return $this;
    }

    /**
     * Get reportsToId
     *
     * @return string 
     */
    public function getReportsToId()
    {
        return $this->reportsToId;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     * @return Leads
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    
        return $this;
    }

    /**
     * Get accountName
     *
     * @return string 
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set accountDescription
     *
     * @param string $accountDescription
     * @return Leads
     */
    public function setAccountDescription($accountDescription)
    {
        $this->accountDescription = $accountDescription;
    
        return $this;
    }

    /**
     * Get accountDescription
     *
     * @return string 
     */
    public function getAccountDescription()
    {
        return $this->accountDescription;
    }

    /**
     * Set contactId
     *
     * @param string $contactId
     * @return Leads
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    
        return $this;
    }

    /**
     * Get contactId
     *
     * @return string 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set accountId
     *
     * @param string $accountId
     * @return Leads
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    
        return $this;
    }

    /**
     * Get accountId
     *
     * @return string 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set opportunityId
     *
     * @param string $opportunityId
     * @return Leads
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
    
        return $this;
    }

    /**
     * Get opportunityId
     *
     * @return string 
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Set opportunityName
     *
     * @param string $opportunityName
     * @return Leads
     */
    public function setOpportunityName($opportunityName)
    {
        $this->opportunityName = $opportunityName;
    
        return $this;
    }

    /**
     * Get opportunityName
     *
     * @return string 
     */
    public function getOpportunityName()
    {
        return $this->opportunityName;
    }

    /**
     * Set opportunityAmount
     *
     * @param string $opportunityAmount
     * @return Leads
     */
    public function setOpportunityAmount($opportunityAmount)
    {
        $this->opportunityAmount = $opportunityAmount;
    
        return $this;
    }

    /**
     * Get opportunityAmount
     *
     * @return string 
     */
    public function getOpportunityAmount()
    {
        return $this->opportunityAmount;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     * @return Leads
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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Leads
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set portalName
     *
     * @param string $portalName
     * @return Leads
     */
    public function setPortalName($portalName)
    {
        $this->portalName = $portalName;
    
        return $this;
    }

    /**
     * Get portalName
     *
     * @return string 
     */
    public function getPortalName()
    {
        return $this->portalName;
    }

    /**
     * Set portalApp
     *
     * @param string $portalApp
     * @return Leads
     */
    public function setPortalApp($portalApp)
    {
        $this->portalApp = $portalApp;
    
        return $this;
    }

    /**
     * Get portalApp
     *
     * @return string 
     */
    public function getPortalApp()
    {
        return $this->portalApp;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Leads
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
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