<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emails
 *
 * @ORM\Table(name="emails")
 * @ORM\Entity
 */
class Emails
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
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_sent", type="datetime", nullable=true)
     */
    private $dateSent;

    /**
     * @var string
     *
     * @ORM\Column(name="message_id", type="string", length=255, nullable=true)
     */
    private $messageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagged", type="boolean", nullable=true)
     */
    private $flagged;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reply_to_status", type="boolean", nullable=true)
     */
    private $replyToStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="intent", type="string", length=100, nullable=true)
     */
    private $intent;

    /**
     * @var string
     *
     * @ORM\Column(name="mailbox_id", type="string", length=36, nullable=true)
     */
    private $mailboxId;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_type", type="string", length=100, nullable=true)
     */
    private $parentType;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true)
     */
    private $parentId;



    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Emails
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
     * @return Emails
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return Emails
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     * @return Emails
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
     * @return Emails
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
     * @return Emails
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
     * Set dateSent
     *
     * @param \DateTime $dateSent
     * @return Emails
     */
    public function setDateSent($dateSent)
    {
        $this->dateSent = $dateSent;
    
        return $this;
    }

    /**
     * Get dateSent
     *
     * @return \DateTime 
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }

    /**
     * Set messageId
     *
     * @param string $messageId
     * @return Emails
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    
        return $this;
    }

    /**
     * Get messageId
     *
     * @return string 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Emails
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
     * Set type
     *
     * @param string $type
     * @return Emails
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Emails
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
     * Set flagged
     *
     * @param boolean $flagged
     * @return Emails
     */
    public function setFlagged($flagged)
    {
        $this->flagged = $flagged;
    
        return $this;
    }

    /**
     * Get flagged
     *
     * @return boolean 
     */
    public function getFlagged()
    {
        return $this->flagged;
    }

    /**
     * Set replyToStatus
     *
     * @param boolean $replyToStatus
     * @return Emails
     */
    public function setReplyToStatus($replyToStatus)
    {
        $this->replyToStatus = $replyToStatus;
    
        return $this;
    }

    /**
     * Get replyToStatus
     *
     * @return boolean 
     */
    public function getReplyToStatus()
    {
        return $this->replyToStatus;
    }

    /**
     * Set intent
     *
     * @param string $intent
     * @return Emails
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
    
        return $this;
    }

    /**
     * Get intent
     *
     * @return string 
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Set mailboxId
     *
     * @param string $mailboxId
     * @return Emails
     */
    public function setMailboxId($mailboxId)
    {
        $this->mailboxId = $mailboxId;
    
        return $this;
    }

    /**
     * Get mailboxId
     *
     * @return string 
     */
    public function getMailboxId()
    {
        return $this->mailboxId;
    }

    /**
     * Set parentType
     *
     * @param string $parentType
     * @return Emails
     */
    public function setParentType($parentType)
    {
        $this->parentType = $parentType;
    
        return $this;
    }

    /**
     * Get parentType
     *
     * @return string 
     */
    public function getParentType()
    {
        return $this->parentType;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     * @return Emails
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return string 
     */
    public function getParentId()
    {
        return $this->parentId;
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