<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinkedDocuments
 *
 * @ORM\Table(name="linked_documents")
 * @ORM\Entity
 */
class LinkedDocuments
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
     * @ORM\Column(name="parent_id", type="string", length=36, nullable=true)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="parent_type", type="string", length=25, nullable=true)
     */
    private $parentType;

    /**
     * @var string
     *
     * @ORM\Column(name="document_id", type="string", length=36, nullable=true)
     */
    private $documentId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_revision_id", type="string", length=36, nullable=true)
     */
    private $documentRevisionId;

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
     * Set parentId
     *
     * @param string $parentId
     * @return LinkedDocuments
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
     * Set parentType
     *
     * @param string $parentType
     * @return LinkedDocuments
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
     * Set documentId
     *
     * @param string $documentId
     * @return LinkedDocuments
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
     * Set documentRevisionId
     *
     * @param string $documentRevisionId
     * @return LinkedDocuments
     */
    public function setDocumentRevisionId($documentRevisionId)
    {
        $this->documentRevisionId = $documentRevisionId;
    
        return $this;
    }

    /**
     * Get documentRevisionId
     *
     * @return string 
     */
    public function getDocumentRevisionId()
    {
        return $this->documentRevisionId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return LinkedDocuments
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
     * @return LinkedDocuments
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