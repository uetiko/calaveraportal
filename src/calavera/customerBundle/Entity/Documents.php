<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documents
 *
 * @ORM\Table(name="documents")
 * @ORM\Entity
 */
class Documents
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
     * @var string
     *
     * @ORM\Column(name="document_name", type="string", length=255, nullable=true)
     */
    private $documentName;

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
     * @ORM\Column(name="active_date", type="date", nullable=true)
     */
    private $activeDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exp_date", type="date", nullable=true)
     */
    private $expDate;

    /**
     * @var string
     *
     * @ORM\Column(name="category_id", type="string", length=100, nullable=true)
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="subcategory_id", type="string", length=100, nullable=true)
     */
    private $subcategoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="status_id", type="string", length=100, nullable=true)
     */
    private $statusId;

    /**
     * @var string
     *
     * @ORM\Column(name="document_revision_id", type="string", length=36, nullable=true)
     */
    private $documentRevisionId;

    /**
     * @var string
     *
     * @ORM\Column(name="related_doc_id", type="string", length=36, nullable=true)
     */
    private $relatedDocId;

    /**
     * @var string
     *
     * @ORM\Column(name="related_doc_rev_id", type="string", length=36, nullable=true)
     */
    private $relatedDocRevId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_template", type="boolean", nullable=true)
     */
    private $isTemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="template_type", type="string", length=100, nullable=true)
     */
    private $templateType;



    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * Set documentName
     *
     * @param string $documentName
     * @return Documents
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;
    
        return $this;
    }

    /**
     * Get documentName
     *
     * @return string 
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * Set docId
     *
     * @param string $docId
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * Set activeDate
     *
     * @param \DateTime $activeDate
     * @return Documents
     */
    public function setActiveDate($activeDate)
    {
        $this->activeDate = $activeDate;
    
        return $this;
    }

    /**
     * Get activeDate
     *
     * @return \DateTime 
     */
    public function getActiveDate()
    {
        return $this->activeDate;
    }

    /**
     * Set expDate
     *
     * @param \DateTime $expDate
     * @return Documents
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;
    
        return $this;
    }

    /**
     * Get expDate
     *
     * @return \DateTime 
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * Set categoryId
     *
     * @param string $categoryId
     * @return Documents
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    
        return $this;
    }

    /**
     * Get categoryId
     *
     * @return string 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set subcategoryId
     *
     * @param string $subcategoryId
     * @return Documents
     */
    public function setSubcategoryId($subcategoryId)
    {
        $this->subcategoryId = $subcategoryId;
    
        return $this;
    }

    /**
     * Get subcategoryId
     *
     * @return string 
     */
    public function getSubcategoryId()
    {
        return $this->subcategoryId;
    }

    /**
     * Set statusId
     *
     * @param string $statusId
     * @return Documents
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    
        return $this;
    }

    /**
     * Get statusId
     *
     * @return string 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set documentRevisionId
     *
     * @param string $documentRevisionId
     * @return Documents
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
     * Set relatedDocId
     *
     * @param string $relatedDocId
     * @return Documents
     */
    public function setRelatedDocId($relatedDocId)
    {
        $this->relatedDocId = $relatedDocId;
    
        return $this;
    }

    /**
     * Get relatedDocId
     *
     * @return string 
     */
    public function getRelatedDocId()
    {
        return $this->relatedDocId;
    }

    /**
     * Set relatedDocRevId
     *
     * @param string $relatedDocRevId
     * @return Documents
     */
    public function setRelatedDocRevId($relatedDocRevId)
    {
        $this->relatedDocRevId = $relatedDocRevId;
    
        return $this;
    }

    /**
     * Get relatedDocRevId
     *
     * @return string 
     */
    public function getRelatedDocRevId()
    {
        return $this->relatedDocRevId;
    }

    /**
     * Set isTemplate
     *
     * @param boolean $isTemplate
     * @return Documents
     */
    public function setIsTemplate($isTemplate)
    {
        $this->isTemplate = $isTemplate;
    
        return $this;
    }

    /**
     * Get isTemplate
     *
     * @return boolean 
     */
    public function getIsTemplate()
    {
        return $this->isTemplate;
    }

    /**
     * Set templateType
     *
     * @param string $templateType
     * @return Documents
     */
    public function setTemplateType($templateType)
    {
        $this->templateType = $templateType;
    
        return $this;
    }

    /**
     * Get templateType
     *
     * @return string 
     */
    public function getTemplateType()
    {
        return $this->templateType;
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