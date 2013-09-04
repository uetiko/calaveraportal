<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CasesBugs
 */
class CasesBugs
{
    /**
     * @var string
     */
    private $caseId;

    /**
     * @var string
     */
    private $bugId;

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
     * @return CasesBugs
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
     * Set bugId
     *
     * @param string $bugId
     * @return CasesBugs
     */
    public function setBugId($bugId)
    {
        $this->bugId = $bugId;
    
        return $this;
    }

    /**
     * Get bugId
     *
     * @return string 
     */
    public function getBugId()
    {
        return $this->bugId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return CasesBugs
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
     * @return CasesBugs
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
