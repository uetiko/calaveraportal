<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedulers
 *
 * @ORM\Table(name="schedulers")
 * @ORM\Entity
 */
class Schedulers
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
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_user_id", type="string", length=36, nullable=true)
     */
    private $modifiedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255, nullable=true)
     */
    private $job;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time_start", type="datetime", nullable=true)
     */
    private $dateTimeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time_end", type="datetime", nullable=true)
     */
    private $dateTimeEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="job_interval", type="string", length=100, nullable=true)
     */
    private $jobInterval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_from", type="time", nullable=true)
     */
    private $timeFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_to", type="time", nullable=true)
     */
    private $timeTo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_run", type="datetime", nullable=true)
     */
    private $lastRun;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var boolean
     *
     * @ORM\Column(name="catch_up", type="boolean", nullable=true)
     */
    private $catchUp;



    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Schedulers
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
     * @return Schedulers
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
     * @return Schedulers
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
     * Set createdBy
     *
     * @param string $createdBy
     * @return Schedulers
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     * @return Schedulers
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
     * Set name
     *
     * @param string $name
     * @return Schedulers
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
     * Set job
     *
     * @param string $job
     * @return Schedulers
     */
    public function setJob($job)
    {
        $this->job = $job;
    
        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set dateTimeStart
     *
     * @param \DateTime $dateTimeStart
     * @return Schedulers
     */
    public function setDateTimeStart($dateTimeStart)
    {
        $this->dateTimeStart = $dateTimeStart;
    
        return $this;
    }

    /**
     * Get dateTimeStart
     *
     * @return \DateTime 
     */
    public function getDateTimeStart()
    {
        return $this->dateTimeStart;
    }

    /**
     * Set dateTimeEnd
     *
     * @param \DateTime $dateTimeEnd
     * @return Schedulers
     */
    public function setDateTimeEnd($dateTimeEnd)
    {
        $this->dateTimeEnd = $dateTimeEnd;
    
        return $this;
    }

    /**
     * Get dateTimeEnd
     *
     * @return \DateTime 
     */
    public function getDateTimeEnd()
    {
        return $this->dateTimeEnd;
    }

    /**
     * Set jobInterval
     *
     * @param string $jobInterval
     * @return Schedulers
     */
    public function setJobInterval($jobInterval)
    {
        $this->jobInterval = $jobInterval;
    
        return $this;
    }

    /**
     * Get jobInterval
     *
     * @return string 
     */
    public function getJobInterval()
    {
        return $this->jobInterval;
    }

    /**
     * Set timeFrom
     *
     * @param \DateTime $timeFrom
     * @return Schedulers
     */
    public function setTimeFrom($timeFrom)
    {
        $this->timeFrom = $timeFrom;
    
        return $this;
    }

    /**
     * Get timeFrom
     *
     * @return \DateTime 
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * Set timeTo
     *
     * @param \DateTime $timeTo
     * @return Schedulers
     */
    public function setTimeTo($timeTo)
    {
        $this->timeTo = $timeTo;
    
        return $this;
    }

    /**
     * Get timeTo
     *
     * @return \DateTime 
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Set lastRun
     *
     * @param \DateTime $lastRun
     * @return Schedulers
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;
    
        return $this;
    }

    /**
     * Get lastRun
     *
     * @return \DateTime 
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Schedulers
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
     * Set catchUp
     *
     * @param boolean $catchUp
     * @return Schedulers
     */
    public function setCatchUp($catchUp)
    {
        $this->catchUp = $catchUp;
    
        return $this;
    }

    /**
     * Get catchUp
     *
     * @return boolean 
     */
    public function getCatchUp()
    {
        return $this->catchUp;
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