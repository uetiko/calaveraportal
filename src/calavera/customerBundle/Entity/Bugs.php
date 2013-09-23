<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bugs
 *
 * @ORM\Table(name="bugs")
 * @ORM\Entity
 */
class Bugs
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="bug_number", type="integer", nullable=false)
     */
    private $bugNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=100, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="string", length=100, nullable=true)
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=255, nullable=true)
     */
    private $resolution;

    /**
     * @var string
     *
     * @ORM\Column(name="work_log", type="text", nullable=true)
     */
    private $workLog;

    /**
     * @var string
     *
     * @ORM\Column(name="found_in_release", type="string", length=255, nullable=true)
     */
    private $foundInRelease;

    /**
     * @var string
     *
     * @ORM\Column(name="fixed_in_release", type="string", length=255, nullable=true)
     */
    private $fixedInRelease;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="product_category", type="string", length=255, nullable=true)
     */
    private $productCategory;



    /**
     * Set name
     *
     * @param string $name
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * Set bugNumber
     *
     * @param integer $bugNumber
     * @return Bugs
     */
    public function setBugNumber($bugNumber)
    {
        $this->bugNumber = $bugNumber;
    
        return $this;
    }

    /**
     * Get bugNumber
     *
     * @return integer 
     */
    public function getBugNumber()
    {
        return $this->bugNumber;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Bugs
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
     * @return Bugs
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
     * Set priority
     *
     * @param string $priority
     * @return Bugs
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
     * Set resolution
     *
     * @param string $resolution
     * @return Bugs
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
    
        return $this;
    }

    /**
     * Get resolution
     *
     * @return string 
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set workLog
     *
     * @param string $workLog
     * @return Bugs
     */
    public function setWorkLog($workLog)
    {
        $this->workLog = $workLog;
    
        return $this;
    }

    /**
     * Get workLog
     *
     * @return string 
     */
    public function getWorkLog()
    {
        return $this->workLog;
    }

    /**
     * Set foundInRelease
     *
     * @param string $foundInRelease
     * @return Bugs
     */
    public function setFoundInRelease($foundInRelease)
    {
        $this->foundInRelease = $foundInRelease;
    
        return $this;
    }

    /**
     * Get foundInRelease
     *
     * @return string 
     */
    public function getFoundInRelease()
    {
        return $this->foundInRelease;
    }

    /**
     * Set fixedInRelease
     *
     * @param string $fixedInRelease
     * @return Bugs
     */
    public function setFixedInRelease($fixedInRelease)
    {
        $this->fixedInRelease = $fixedInRelease;
    
        return $this;
    }

    /**
     * Get fixedInRelease
     *
     * @return string 
     */
    public function getFixedInRelease()
    {
        return $this->fixedInRelease;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Bugs
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set productCategory
     *
     * @param string $productCategory
     * @return Bugs
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
    
        return $this;
    }

    /**
     * Get productCategory
     *
     * @return string 
     */
    public function getProductCategory()
    {
        return $this->productCategory;
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