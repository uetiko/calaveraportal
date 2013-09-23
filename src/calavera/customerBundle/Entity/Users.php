<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="user_name", type="string", length=60, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_hash", type="string", length=255, nullable=true)
     */
    private $userHash;

    /**
     * @var boolean
     *
     * @ORM\Column(name="system_generated_password", type="boolean", nullable=true)
     */
    private $systemGeneratedPassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pwd_last_changed", type="datetime", nullable=true)
     */
    private $pwdLastChanged;

    /**
     * @var string
     *
     * @ORM\Column(name="authenticate_id", type="string", length=100, nullable=true)
     */
    private $authenticateId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sugar_login", type="boolean", nullable=true)
     */
    private $sugarLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=30, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=30, nullable=true)
     */
    private $lastName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=true)
     */
    private $isAdmin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="external_auth_only", type="boolean", nullable=true)
     */
    private $externalAuthOnly;

    /**
     * @var boolean
     *
     * @ORM\Column(name="receive_notifications", type="boolean", nullable=true)
     */
    private $receiveNotifications;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=50, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_home", type="string", length=50, nullable=true)
     */
    private $phoneHome;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_mobile", type="string", length=50, nullable=true)
     */
    private $phoneMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_work", type="string", length=50, nullable=true)
     */
    private $phoneWork;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_other", type="string", length=50, nullable=true)
     */
    private $phoneOther;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_fax", type="string", length=50, nullable=true)
     */
    private $phoneFax;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="address_street", type="string", length=150, nullable=true)
     */
    private $addressStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="address_city", type="string", length=100, nullable=true)
     */
    private $addressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="address_state", type="string", length=100, nullable=true)
     */
    private $addressState;

    /**
     * @var string
     *
     * @ORM\Column(name="address_country", type="string", length=100, nullable=true)
     */
    private $addressCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="address_postalcode", type="string", length=20, nullable=true)
     */
    private $addressPostalcode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="portal_only", type="boolean", nullable=true)
     */
    private $portalOnly;

    /**
     * @var boolean
     *
     * @ORM\Column(name="show_on_employees", type="boolean", nullable=true)
     */
    private $showOnEmployees;

    /**
     * @var string
     *
     * @ORM\Column(name="employee_status", type="string", length=100, nullable=true)
     */
    private $employeeStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="messenger_id", type="string", length=100, nullable=true)
     */
    private $messengerId;

    /**
     * @var string
     *
     * @ORM\Column(name="messenger_type", type="string", length=100, nullable=true)
     */
    private $messengerType;

    /**
     * @var string
     *
     * @ORM\Column(name="reports_to_id", type="string", length=36, nullable=true)
     */
    private $reportsToId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_group", type="boolean", nullable=true)
     */
    private $isGroup;



    /**
     * Set userName
     *
     * @param string $userName
     * @return Users
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userHash
     *
     * @param string $userHash
     * @return Users
     */
    public function setUserHash($userHash)
    {
        $this->userHash = $userHash;
    
        return $this;
    }

    /**
     * Get userHash
     *
     * @return string 
     */
    public function getUserHash()
    {
        return $this->userHash;
    }

    /**
     * Set systemGeneratedPassword
     *
     * @param boolean $systemGeneratedPassword
     * @return Users
     */
    public function setSystemGeneratedPassword($systemGeneratedPassword)
    {
        $this->systemGeneratedPassword = $systemGeneratedPassword;
    
        return $this;
    }

    /**
     * Get systemGeneratedPassword
     *
     * @return boolean 
     */
    public function getSystemGeneratedPassword()
    {
        return $this->systemGeneratedPassword;
    }

    /**
     * Set pwdLastChanged
     *
     * @param \DateTime $pwdLastChanged
     * @return Users
     */
    public function setPwdLastChanged($pwdLastChanged)
    {
        $this->pwdLastChanged = $pwdLastChanged;
    
        return $this;
    }

    /**
     * Get pwdLastChanged
     *
     * @return \DateTime 
     */
    public function getPwdLastChanged()
    {
        return $this->pwdLastChanged;
    }

    /**
     * Set authenticateId
     *
     * @param string $authenticateId
     * @return Users
     */
    public function setAuthenticateId($authenticateId)
    {
        $this->authenticateId = $authenticateId;
    
        return $this;
    }

    /**
     * Get authenticateId
     *
     * @return string 
     */
    public function getAuthenticateId()
    {
        return $this->authenticateId;
    }

    /**
     * Set sugarLogin
     *
     * @param boolean $sugarLogin
     * @return Users
     */
    public function setSugarLogin($sugarLogin)
    {
        $this->sugarLogin = $sugarLogin;
    
        return $this;
    }

    /**
     * Get sugarLogin
     *
     * @return boolean 
     */
    public function getSugarLogin()
    {
        return $this->sugarLogin;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Users
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
     * @return Users
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
     * Set isAdmin
     *
     * @param boolean $isAdmin
     * @return Users
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    
        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set externalAuthOnly
     *
     * @param boolean $externalAuthOnly
     * @return Users
     */
    public function setExternalAuthOnly($externalAuthOnly)
    {
        $this->externalAuthOnly = $externalAuthOnly;
    
        return $this;
    }

    /**
     * Get externalAuthOnly
     *
     * @return boolean 
     */
    public function getExternalAuthOnly()
    {
        return $this->externalAuthOnly;
    }

    /**
     * Set receiveNotifications
     *
     * @param boolean $receiveNotifications
     * @return Users
     */
    public function setReceiveNotifications($receiveNotifications)
    {
        $this->receiveNotifications = $receiveNotifications;
    
        return $this;
    }

    /**
     * Get receiveNotifications
     *
     * @return boolean 
     */
    public function getReceiveNotifications()
    {
        return $this->receiveNotifications;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Users
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * Set title
     *
     * @param string $title
     * @return Users
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
     * @return Users
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
     * Set phoneHome
     *
     * @param string $phoneHome
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * Set status
     *
     * @param string $status
     * @return Users
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
     * Set addressStreet
     *
     * @param string $addressStreet
     * @return Users
     */
    public function setAddressStreet($addressStreet)
    {
        $this->addressStreet = $addressStreet;
    
        return $this;
    }

    /**
     * Get addressStreet
     *
     * @return string 
     */
    public function getAddressStreet()
    {
        return $this->addressStreet;
    }

    /**
     * Set addressCity
     *
     * @param string $addressCity
     * @return Users
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;
    
        return $this;
    }

    /**
     * Get addressCity
     *
     * @return string 
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * Set addressState
     *
     * @param string $addressState
     * @return Users
     */
    public function setAddressState($addressState)
    {
        $this->addressState = $addressState;
    
        return $this;
    }

    /**
     * Get addressState
     *
     * @return string 
     */
    public function getAddressState()
    {
        return $this->addressState;
    }

    /**
     * Set addressCountry
     *
     * @param string $addressCountry
     * @return Users
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
    
        return $this;
    }

    /**
     * Get addressCountry
     *
     * @return string 
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * Set addressPostalcode
     *
     * @param string $addressPostalcode
     * @return Users
     */
    public function setAddressPostalcode($addressPostalcode)
    {
        $this->addressPostalcode = $addressPostalcode;
    
        return $this;
    }

    /**
     * Get addressPostalcode
     *
     * @return string 
     */
    public function getAddressPostalcode()
    {
        return $this->addressPostalcode;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Users
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
     * Set portalOnly
     *
     * @param boolean $portalOnly
     * @return Users
     */
    public function setPortalOnly($portalOnly)
    {
        $this->portalOnly = $portalOnly;
    
        return $this;
    }

    /**
     * Get portalOnly
     *
     * @return boolean 
     */
    public function getPortalOnly()
    {
        return $this->portalOnly;
    }

    /**
     * Set showOnEmployees
     *
     * @param boolean $showOnEmployees
     * @return Users
     */
    public function setShowOnEmployees($showOnEmployees)
    {
        $this->showOnEmployees = $showOnEmployees;
    
        return $this;
    }

    /**
     * Get showOnEmployees
     *
     * @return boolean 
     */
    public function getShowOnEmployees()
    {
        return $this->showOnEmployees;
    }

    /**
     * Set employeeStatus
     *
     * @param string $employeeStatus
     * @return Users
     */
    public function setEmployeeStatus($employeeStatus)
    {
        $this->employeeStatus = $employeeStatus;
    
        return $this;
    }

    /**
     * Get employeeStatus
     *
     * @return string 
     */
    public function getEmployeeStatus()
    {
        return $this->employeeStatus;
    }

    /**
     * Set messengerId
     *
     * @param string $messengerId
     * @return Users
     */
    public function setMessengerId($messengerId)
    {
        $this->messengerId = $messengerId;
    
        return $this;
    }

    /**
     * Get messengerId
     *
     * @return string 
     */
    public function getMessengerId()
    {
        return $this->messengerId;
    }

    /**
     * Set messengerType
     *
     * @param string $messengerType
     * @return Users
     */
    public function setMessengerType($messengerType)
    {
        $this->messengerType = $messengerType;
    
        return $this;
    }

    /**
     * Get messengerType
     *
     * @return string 
     */
    public function getMessengerType()
    {
        return $this->messengerType;
    }

    /**
     * Set reportsToId
     *
     * @param string $reportsToId
     * @return Users
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
     * Set isGroup
     *
     * @param boolean $isGroup
     * @return Users
     */
    public function setIsGroup($isGroup)
    {
        $this->isGroup = $isGroup;
    
        return $this;
    }

    /**
     * Get isGroup
     *
     * @return boolean 
     */
    public function getIsGroup()
    {
        return $this->isGroup;
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