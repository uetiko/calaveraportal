<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectsCases
 */
class ProjectsCases
{
    /**
     * @var string
     */
    private $caseId;

    /**
     * @var string
     */
    private $projectId;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var string
     */
    private $id;


    /**
     * Set caseId
     *
     * @param string $caseId
     * @return ProjectsCases
     */
    public function setCaseId($caseId)
    {
        $this->caseId = $caseId;
    
        return $this;
    }

    /**
     * Get caseId
     *
     * @return string 
     */
    public function getCaseId()
    {
        return $this->caseId;
    }

    /**
     * Set projectId
     *
     * @param string $projectId
     * @return ProjectsCases
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return ProjectsCases
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return ProjectsCases
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
