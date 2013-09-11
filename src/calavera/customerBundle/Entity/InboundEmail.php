<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InboundEmail
 *
 * @ORM\Table(name="inbound_email")
 * @ORM\Entity
 */
class InboundEmail
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
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="server_url", type="string", length=100, nullable=true)
     */
    private $serverUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=100, nullable=true)
     */
    private $emailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_password", type="string", length=100, nullable=true)
     */
    private $emailPassword;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="integer", nullable=true)
     */
    private $port;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string", length=50, nullable=true)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox", type="text", nullable=true)
     */
    private $mailbox;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_seen", type="boolean", nullable=true)
     */
    private $deleteSeen;

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox_type", type="string", length=10, nullable=true)
     */
    private $mailboxType;

    /**
     * @var string
     *
     * @ORM\Column(name="template_id", type="string", length=36, nullable=true)
     */
    private $templateId;

    /**
     * @var string
     *
     * @ORM\Column(name="stored_options", type="text", nullable=true)
     */
    private $storedOptions;

    /**
     * @var string
     *
     * @ORM\Column(name="group_id", type="string", length=36, nullable=true)
     */
    private $groupId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_personal", type="boolean", nullable=true)
     */
    private $isPersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="groupfolder_id", type="string", length=36, nullable=true)
     */
    private $groupfolderId;



    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return InboundEmail
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
     * @return InboundEmail
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
     * @return InboundEmail
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
     * @return InboundEmail
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
     * @return InboundEmail
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
     * @return InboundEmail
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
     * Set status
     *
     * @param string $status
     * @return InboundEmail
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
     * Set serverUrl
     *
     * @param string $serverUrl
     * @return InboundEmail
     */
    public function setServerUrl($serverUrl)
    {
        $this->serverUrl = $serverUrl;
    
        return $this;
    }

    /**
     * Get serverUrl
     *
     * @return string 
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     * @return InboundEmail
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;
    
        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string 
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set emailPassword
     *
     * @param string $emailPassword
     * @return InboundEmail
     */
    public function setEmailPassword($emailPassword)
    {
        $this->emailPassword = $emailPassword;
    
        return $this;
    }

    /**
     * Get emailPassword
     *
     * @return string 
     */
    public function getEmailPassword()
    {
        return $this->emailPassword;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return InboundEmail
     */
    public function setPort($port)
    {
        $this->port = $port;
    
        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set service
     *
     * @param string $service
     * @return InboundEmail
     */
    public function setService($service)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set mailbox
     *
     * @param string $mailbox
     * @return InboundEmail
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;
    
        return $this;
    }

    /**
     * Get mailbox
     *
     * @return string 
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * Set deleteSeen
     *
     * @param boolean $deleteSeen
     * @return InboundEmail
     */
    public function setDeleteSeen($deleteSeen)
    {
        $this->deleteSeen = $deleteSeen;
    
        return $this;
    }

    /**
     * Get deleteSeen
     *
     * @return boolean 
     */
    public function getDeleteSeen()
    {
        return $this->deleteSeen;
    }

    /**
     * Set mailboxType
     *
     * @param string $mailboxType
     * @return InboundEmail
     */
    public function setMailboxType($mailboxType)
    {
        $this->mailboxType = $mailboxType;
    
        return $this;
    }

    /**
     * Get mailboxType
     *
     * @return string 
     */
    public function getMailboxType()
    {
        return $this->mailboxType;
    }

    /**
     * Set templateId
     *
     * @param string $templateId
     * @return InboundEmail
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
     * Set storedOptions
     *
     * @param string $storedOptions
     * @return InboundEmail
     */
    public function setStoredOptions($storedOptions)
    {
        $this->storedOptions = $storedOptions;
    
        return $this;
    }

    /**
     * Get storedOptions
     *
     * @return string 
     */
    public function getStoredOptions()
    {
        return $this->storedOptions;
    }

    /**
     * Set groupId
     *
     * @param string $groupId
     * @return InboundEmail
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    
        return $this;
    }

    /**
     * Get groupId
     *
     * @return string 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set isPersonal
     *
     * @param boolean $isPersonal
     * @return InboundEmail
     */
    public function setIsPersonal($isPersonal)
    {
        $this->isPersonal = $isPersonal;
    
        return $this;
    }

    /**
     * Get isPersonal
     *
     * @return boolean 
     */
    public function getIsPersonal()
    {
        return $this->isPersonal;
    }

    /**
     * Set groupfolderId
     *
     * @param string $groupfolderId
     * @return InboundEmail
     */
    public function setGroupfolderId($groupfolderId)
    {
        $this->groupfolderId = $groupfolderId;
    
        return $this;
    }

    /**
     * Get groupfolderId
     *
     * @return string 
     */
    public function getGroupfolderId()
    {
        return $this->groupfolderId;
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