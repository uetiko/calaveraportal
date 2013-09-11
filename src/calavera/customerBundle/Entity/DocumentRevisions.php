<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentRevisions
 *
 * @ORM\Table(name="document_revisions")
 * @ORM\Entity
 */
class DocumentRevisions
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
     * @ORM\Column(name="change_log", type="string", length=255, nullable=true)
     */
    private $changeLog;

    /**
     * @var string
     *
     * @ORM\Column(name="document_id", type="string", length=36, nullable=true)
     */
    private $documentId;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_id", type="string", length=100, nullable=true)
     */
    private $docId;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_type", type="string", length=100, nullable=true)
     */
    private $docType;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_url", type="string", length=255, nullable=true)
     */
    private $docUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=36, nullable=true)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="file_ext", type="string", length=100, nullable=true)
     */
    private $fileExt;

    /**
     * @var string
     *
     * @ORM\Column(name="file_mime_type", type="string", length=100, nullable=true)
     */
    private $fileMimeType;

    /**
     * @var string
     *
     * @ORM\Column(name="revision", type="string", length=100, nullable=true)
     */
    private $revision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;



    /**
     * Set changeLog
     *
     * @param string $changeLog
     * @return DocumentRevisions
     */
    public function setChangeLog($changeLog)
    {
        $this->changeLog = $changeLog;
    
        return $this;
    }

    /**
     * Get changeLog
     *
     * @return string 
     */
    public function getChangeLog()
    {
        return $this->changeLog;
    }

    /**
     * Set documentId
     *
     * @param string $documentId
     * @return DocumentRevisions
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
     * Set docId
     *
     * @param string $docId
     * @return DocumentRevisions
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;
    
        return $this;
    }

    /**
     * Get docId
     *
     * @return string 
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * Set docType
     *
     * @param string $docType
     * @return DocumentRevisions
     */
    public function setDocType($docType)
    {
        $this->docType = $docType;
    
        return $this;
    }

    /**
     * Get docType
     *
     * @return string 
     */
    public function getDocType()
    {
        return $this->docType;
    }

    /**
     * Set docUrl
     *
     * @param string $docUrl
     * @return DocumentRevisions
     */
    public function setDocUrl($docUrl)
    {
        $this->docUrl = $docUrl;
    
        return $this;
    }

    /**
     * Get docUrl
     *
     * @return string 
     */
    public function getDocUrl()
    {
        return $this->docUrl;
    }

    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return DocumentRevisions
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
     * Set createdBy
     *
     * @param string $createdBy
     * @return DocumentRevisions
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
     * Set filename
     *
     * @param string $filename
     * @return DocumentRevisions
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set fileExt
     *
     * @param string $fileExt
     * @return DocumentRevisions
     */
    public function setFileExt($fileExt)
    {
        $this->fileExt = $fileExt;
    
        return $this;
    }

    /**
     * Get fileExt
     *
     * @return string 
     */
    public function getFileExt()
    {
        return $this->fileExt;
    }

    /**
     * Set fileMimeType
     *
     * @param string $fileMimeType
     * @return DocumentRevisions
     */
    public function setFileMimeType($fileMimeType)
    {
        $this->fileMimeType = $fileMimeType;
    
        return $this;
    }

    /**
     * Get fileMimeType
     *
     * @return string 
     */
    public function getFileMimeType()
    {
        return $this->fileMimeType;
    }

    /**
     * Set revision
     *
     * @param string $revision
     * @return DocumentRevisions
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;
    
        return $this;
    }

    /**
     * Get revision
     *
     * @return string 
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return DocumentRevisions
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return DocumentRevisions
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}