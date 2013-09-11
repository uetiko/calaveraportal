<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity
 */
class Contacts
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
     * @ORM\Column(name="department", type="string", length=255, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="lead_source", type="string", length=255, nullable=true)
     */
    private $leadSource;

    /**
     * @var string
     *
     * @ORM\Column(name="reports_to_id", type="string", length=36, nullable=true)
     */
    private $reportsToId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

public function __construct($id) {
    $this->id = $id;
}

    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * @return Contacts
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
     * Set leadSource
     *
     * @param string $leadSource
     * @return Contacts
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
     * Set reportsToId
     *
     * @param string $reportsToId
     * @return Contacts
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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return Contacts
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
     * Set campaignId
     *
     * @param string $campaignId
     * @return Contacts
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