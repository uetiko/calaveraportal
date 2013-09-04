<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Versions
 */
class Versions
{
    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var \DateTime
     */
    private $dateEntered;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $modifiedUserId;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $fileVersion;

    /**
     * @var string
     */
    private $dbVersion;

    /**
     * @var string
     */
    private $id;


    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Versions
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
     * @return Versions
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
     * @return Versions
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
     * @return Versions
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
     * @return Versions
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
     * @return Versions
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
     * Set fileVersion
     *
     * @param string $fileVersion
     * @return Versions
     */
    public function setFileVersion($fileVersion)
    {
        $this->fileVersion = $fileVersion;
    
        return $this;
    }

    /**
     * Get fileVersion
     *
     * @return string 
     */
    public function getFileVersion()
    {
        return $this->fileVersion;
    }

    /**
     * Set dbVersion
     *
     * @param string $dbVersion
     * @return Versions
     */
    public function setDbVersion($dbVersion)
    {
        $this->dbVersion = $dbVersion;
    
        return $this;
    }

    /**
     * Get dbVersion
     *
     * @return string 
     */
    public function getDbVersion()
    {
        return $this->dbVersion;
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
