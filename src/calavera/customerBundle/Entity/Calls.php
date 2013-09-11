<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calls
 *
 * @ORM\Table(name="calls")
 * @ORM\Entity
 */
class Calls
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
     * @var integer
     *
     * @ORM\Column(name="duration_hours", type="integer", nullable=true)
     */
    private $durationHours;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration_minutes", type="integer", nullable=true)
     */
    private $durationMinutes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_type", type="string", length=255, nullable=true)
     */
    private $parentType;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="direction", type="string", length=100, nullable=true)
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="reminder_time", type="integer", nullable=true)
     */
    private $reminderTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="email_reminder_time", type="integer", nullable=true)
     */
    private $emailReminderTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_reminder_sent", type="boolean", nullable=true)
     */
    private $emailReminderSent;

    /**
     * @var string
     *
     * @ORM\Column(name="outlook_id", type="string", length=255, nullable=true)
     */
    private $outlookId;

    /**
     * @var string
     *
     * @ORM\Column(name="repeat_type", type="string", length=36, nullable=true)
     */
    private $repeatType;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeat_interval", type="integer", nullable=true)
     */
    private $repeatInterval;

    /**
     * @var string
     *
     * @ORM\Column(name="repeat_dow", type="string", length=7, nullable=true)
     */
    private $repeatDow;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="repeat_until", type="date", nullable=true)
     */
    private $repeatUntil;

    /**
     * @var integer
     *
     * @ORM\Column(name="repeat_count", type="integer", nullable=true)
     */
    private $repeatCount;

    /**
     * @var string
     *
     * @ORM\Column(name="repeat_parent_id", type="string", length=36, nullable=true)
     */
    private $repeatParentId;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_source", type="string", length=36, nullable=true)
     */
    private $recurringSource;

    public function __construct($id){
        $this->id = $id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * Set durationHours
     *
     * @param integer $durationHours
     * @return Calls
     */
    public function setDurationHours($durationHours)
    {
        $this->durationHours = $durationHours;
    
        return $this;
    }

    /**
     * Get durationHours
     *
     * @return integer 
     */
    public function getDurationHours()
    {
        return $this->durationHours;
    }

    /**
     * Set durationMinutes
     *
     * @param integer $durationMinutes
     * @return Calls
     */
    public function setDurationMinutes($durationMinutes)
    {
        $this->durationMinutes = $durationMinutes;
    
        return $this;
    }

    /**
     * Get durationMinutes
     *
     * @return integer 
     */
    public function getDurationMinutes()
    {
        return $this->durationMinutes;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Calls
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
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Calls
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set parentType
     *
     * @param string $parentType
     * @return Calls
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
     * Set status
     *
     * @param string $status
     * @return Calls
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
     * Set direction
     *
     * @param string $direction
     * @return Calls
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    
        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     * @return Calls
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
     * Set reminderTime
     *
     * @param integer $reminderTime
     * @return Calls
     */
    public function setReminderTime($reminderTime)
    {
        $this->reminderTime = $reminderTime;
    
        return $this;
    }

    /**
     * Get reminderTime
     *
     * @return integer 
     */
    public function getReminderTime()
    {
        return $this->reminderTime;
    }

    /**
     * Set emailReminderTime
     *
     * @param integer $emailReminderTime
     * @return Calls
     */
    public function setEmailReminderTime($emailReminderTime)
    {
        $this->emailReminderTime = $emailReminderTime;
    
        return $this;
    }

    /**
     * Get emailReminderTime
     *
     * @return integer 
     */
    public function getEmailReminderTime()
    {
        return $this->emailReminderTime;
    }

    /**
     * Set emailReminderSent
     *
     * @param boolean $emailReminderSent
     * @return Calls
     */
    public function setEmailReminderSent($emailReminderSent)
    {
        $this->emailReminderSent = $emailReminderSent;
    
        return $this;
    }

    /**
     * Get emailReminderSent
     *
     * @return boolean 
     */
    public function getEmailReminderSent()
    {
        return $this->emailReminderSent;
    }

    /**
     * Set outlookId
     *
     * @param string $outlookId
     * @return Calls
     */
    public function setOutlookId($outlookId)
    {
        $this->outlookId = $outlookId;
    
        return $this;
    }

    /**
     * Get outlookId
     *
     * @return string 
     */
    public function getOutlookId()
    {
        return $this->outlookId;
    }

    /**
     * Set repeatType
     *
     * @param string $repeatType
     * @return Calls
     */
    public function setRepeatType($repeatType)
    {
        $this->repeatType = $repeatType;
    
        return $this;
    }

    /**
     * Get repeatType
     *
     * @return string 
     */
    public function getRepeatType()
    {
        return $this->repeatType;
    }

    /**
     * Set repeatInterval
     *
     * @param integer $repeatInterval
     * @return Calls
     */
    public function setRepeatInterval($repeatInterval)
    {
        $this->repeatInterval = $repeatInterval;
    
        return $this;
    }

    /**
     * Get repeatInterval
     *
     * @return integer 
     */
    public function getRepeatInterval()
    {
        return $this->repeatInterval;
    }

    /**
     * Set repeatDow
     *
     * @param string $repeatDow
     * @return Calls
     */
    public function setRepeatDow($repeatDow)
    {
        $this->repeatDow = $repeatDow;
    
        return $this;
    }

    /**
     * Get repeatDow
     *
     * @return string 
     */
    public function getRepeatDow()
    {
        return $this->repeatDow;
    }

    /**
     * Set repeatUntil
     *
     * @param \DateTime $repeatUntil
     * @return Calls
     */
    public function setRepeatUntil($repeatUntil)
    {
        $this->repeatUntil = $repeatUntil;
    
        return $this;
    }

    /**
     * Get repeatUntil
     *
     * @return \DateTime 
     */
    public function getRepeatUntil()
    {
        return $this->repeatUntil;
    }

    /**
     * Set repeatCount
     *
     * @param integer $repeatCount
     * @return Calls
     */
    public function setRepeatCount($repeatCount)
    {
        $this->repeatCount = $repeatCount;
    
        return $this;
    }

    /**
     * Get repeatCount
     *
     * @return integer 
     */
    public function getRepeatCount()
    {
        return $this->repeatCount;
    }

    /**
     * Set repeatParentId
     *
     * @param string $repeatParentId
     * @return Calls
     */
    public function setRepeatParentId($repeatParentId)
    {
        $this->repeatParentId = $repeatParentId;
    
        return $this;
    }

    /**
     * Get repeatParentId
     *
     * @return string 
     */
    public function getRepeatParentId()
    {
        return $this->repeatParentId;
    }

    /**
     * Set recurringSource
     *
     * @param string $recurringSource
     * @return Calls
     */
    public function setRecurringSource($recurringSource)
    {
        $this->recurringSource = $recurringSource;
    
        return $this;
    }

    /**
     * Get recurringSource
     *
     * @return string 
     */
    public function getRecurringSource()
    {
        return $this->recurringSource;
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