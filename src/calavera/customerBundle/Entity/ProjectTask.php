<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectTask
 *
 * @ORM\Table(name="project_task")
 * @ORM\Entity
 */
class ProjectTask
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
     * @ORM\Column(name="project_id", type="string", length=36, nullable=false)
     */
    private $projectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="project_task_id", type="integer", nullable=true)
     */
    private $projectTaskId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="predecessors", type="text", nullable=true)
     */
    private $predecessors;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=true)
     */
    private $dateStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="time_start", type="integer", nullable=true)
     */
    private $timeStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="time_finish", type="integer", nullable=true)
     */
    private $timeFinish;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_finish", type="date", nullable=true)
     */
    private $dateFinish;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="duration_unit", type="text", nullable=true)
     */
    private $durationUnit;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_duration", type="integer", nullable=true)
     */
    private $actualDuration;

    /**
     * @var integer
     *
     * @ORM\Column(name="percent_complete", type="integer", nullable=true)
     */
    private $percentComplete;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_due", type="date", nullable=true)
     */
    private $dateDue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_due", type="time", nullable=true)
     */
    private $timeDue;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_task_id", type="integer", nullable=true)
     */
    private $parentTaskId;

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
     * @ORM\Column(name="priority", type="string", length=255, nullable=true)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="milestone_flag", type="boolean", nullable=true)
     */
    private $milestoneFlag;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_number", type="integer", nullable=true)
     */
    private $orderNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="task_number", type="integer", nullable=true)
     */
    private $taskNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="estimated_effort", type="integer", nullable=true)
     */
    private $estimatedEffort;

    /**
     * @var integer
     *
     * @ORM\Column(name="actual_effort", type="integer", nullable=true)
     */
    private $actualEffort;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="utilization", type="integer", nullable=true)
     */
    private $utilization;



    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return ProjectTask
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
     * @return ProjectTask
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
     * Set projectId
     *
     * @param string $projectId
     * @return ProjectTask
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    
        return $this;
    }

    /**
     * Get projectId
     *
     * @return string 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set projectTaskId
     *
     * @param integer $projectTaskId
     * @return ProjectTask
     */
    public function setProjectTaskId($projectTaskId)
    {
        $this->projectTaskId = $projectTaskId;
    
        return $this;
    }

    /**
     * Get projectTaskId
     *
     * @return integer 
     */
    public function getProjectTaskId()
    {
        return $this->projectTaskId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ProjectTask
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
     * @return ProjectTask
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
     * Set description
     *
     * @param string $description
     * @return ProjectTask
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
     * Set predecessors
     *
     * @param string $predecessors
     * @return ProjectTask
     */
    public function setPredecessors($predecessors)
    {
        $this->predecessors = $predecessors;
    
        return $this;
    }

    /**
     * Get predecessors
     *
     * @return string 
     */
    public function getPredecessors()
    {
        return $this->predecessors;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return ProjectTask
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
     * Set timeStart
     *
     * @param integer $timeStart
     * @return ProjectTask
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;
    
        return $this;
    }

    /**
     * Get timeStart
     *
     * @return integer 
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * Set timeFinish
     *
     * @param integer $timeFinish
     * @return ProjectTask
     */
    public function setTimeFinish($timeFinish)
    {
        $this->timeFinish = $timeFinish;
    
        return $this;
    }

    /**
     * Get timeFinish
     *
     * @return integer 
     */
    public function getTimeFinish()
    {
        return $this->timeFinish;
    }

    /**
     * Set dateFinish
     *
     * @param \DateTime $dateFinish
     * @return ProjectTask
     */
    public function setDateFinish($dateFinish)
    {
        $this->dateFinish = $dateFinish;
    
        return $this;
    }

    /**
     * Get dateFinish
     *
     * @return \DateTime 
     */
    public function getDateFinish()
    {
        return $this->dateFinish;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return ProjectTask
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    
        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set durationUnit
     *
     * @param string $durationUnit
     * @return ProjectTask
     */
    public function setDurationUnit($durationUnit)
    {
        $this->durationUnit = $durationUnit;
    
        return $this;
    }

    /**
     * Get durationUnit
     *
     * @return string 
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * Set actualDuration
     *
     * @param integer $actualDuration
     * @return ProjectTask
     */
    public function setActualDuration($actualDuration)
    {
        $this->actualDuration = $actualDuration;
    
        return $this;
    }

    /**
     * Get actualDuration
     *
     * @return integer 
     */
    public function getActualDuration()
    {
        return $this->actualDuration;
    }

    /**
     * Set percentComplete
     *
     * @param integer $percentComplete
     * @return ProjectTask
     */
    public function setPercentComplete($percentComplete)
    {
        $this->percentComplete = $percentComplete;
    
        return $this;
    }

    /**
     * Get percentComplete
     *
     * @return integer 
     */
    public function getPercentComplete()
    {
        return $this->percentComplete;
    }

    /**
     * Set dateDue
     *
     * @param \DateTime $dateDue
     * @return ProjectTask
     */
    public function setDateDue($dateDue)
    {
        $this->dateDue = $dateDue;
    
        return $this;
    }

    /**
     * Get dateDue
     *
     * @return \DateTime 
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * Set timeDue
     *
     * @param \DateTime $timeDue
     * @return ProjectTask
     */
    public function setTimeDue($timeDue)
    {
        $this->timeDue = $timeDue;
    
        return $this;
    }

    /**
     * Get timeDue
     *
     * @return \DateTime 
     */
    public function getTimeDue()
    {
        return $this->timeDue;
    }

    /**
     * Set parentTaskId
     *
     * @param integer $parentTaskId
     * @return ProjectTask
     */
    public function setParentTaskId($parentTaskId)
    {
        $this->parentTaskId = $parentTaskId;
    
        return $this;
    }

    /**
     * Get parentTaskId
     *
     * @return integer 
     */
    public function getParentTaskId()
    {
        return $this->parentTaskId;
    }

    /**
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return ProjectTask
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
     * @return ProjectTask
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
     * Set priority
     *
     * @param string $priority
     * @return ProjectTask
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return ProjectTask
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
     * Set milestoneFlag
     *
     * @param boolean $milestoneFlag
     * @return ProjectTask
     */
    public function setMilestoneFlag($milestoneFlag)
    {
        $this->milestoneFlag = $milestoneFlag;
    
        return $this;
    }

    /**
     * Get milestoneFlag
     *
     * @return boolean 
     */
    public function getMilestoneFlag()
    {
        return $this->milestoneFlag;
    }

    /**
     * Set orderNumber
     *
     * @param integer $orderNumber
     * @return ProjectTask
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    
        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return integer 
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set taskNumber
     *
     * @param integer $taskNumber
     * @return ProjectTask
     */
    public function setTaskNumber($taskNumber)
    {
        $this->taskNumber = $taskNumber;
    
        return $this;
    }

    /**
     * Get taskNumber
     *
     * @return integer 
     */
    public function getTaskNumber()
    {
        return $this->taskNumber;
    }

    /**
     * Set estimatedEffort
     *
     * @param integer $estimatedEffort
     * @return ProjectTask
     */
    public function setEstimatedEffort($estimatedEffort)
    {
        $this->estimatedEffort = $estimatedEffort;
    
        return $this;
    }

    /**
     * Get estimatedEffort
     *
     * @return integer 
     */
    public function getEstimatedEffort()
    {
        return $this->estimatedEffort;
    }

    /**
     * Set actualEffort
     *
     * @param integer $actualEffort
     * @return ProjectTask
     */
    public function setActualEffort($actualEffort)
    {
        $this->actualEffort = $actualEffort;
    
        return $this;
    }

    /**
     * Get actualEffort
     *
     * @return integer 
     */
    public function getActualEffort()
    {
        return $this->actualEffort;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return ProjectTask
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
     * Set utilization
     *
     * @param integer $utilization
     * @return ProjectTask
     */
    public function setUtilization($utilization)
    {
        $this->utilization = $utilization;
    
        return $this;
    }

    /**
     * Get utilization
     *
     * @return integer 
     */
    public function getUtilization()
    {
        return $this->utilization;
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