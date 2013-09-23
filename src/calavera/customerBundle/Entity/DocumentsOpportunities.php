<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsOpportunities
 *
 * @ORM\Table(name="documents_opportunities")
 * @ORM\Entity
 */
class DocumentsOpportunities
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
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="document_id", type="string", length=36, nullable=true)
     */
    private $documentId;

    /**
     * @var string
     *
     * @ORM\Column(name="opportunity_id", type="string", length=36, nullable=true)
     */
    private $opportunityId;



    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return DocumentsOpportunities
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
     * @return DocumentsOpportunities
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
     * @return DocumentsOpportunities
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
     * Set opportunityId
     *
     * @param string $opportunityId
     * @return DocumentsOpportunities
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
    
        return $this;
    }

    /**
     * Get opportunityId
     *
     * @return string 
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
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