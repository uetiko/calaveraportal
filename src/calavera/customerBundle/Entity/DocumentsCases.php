<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsCases
 */
class DocumentsCases
{
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
    private $documentId;

    /**
     * @var string
     */
    private $caseId;

    /**
     * @var string
     */
    private $id;


    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return DocumentsCases
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
     * @return DocumentsCases
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
     * Set documentId
     *
     * @param string $documentId
     * @return DocumentsCases
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;
    
        return $this;
    }

    /**
     * Get documentId
     *
     * @return string 
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set caseId
     *
     * @param string $caseId
     * @return DocumentsCases
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
