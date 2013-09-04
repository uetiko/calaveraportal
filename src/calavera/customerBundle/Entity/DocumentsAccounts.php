<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsAccounts
 */
class DocumentsAccounts
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
    private $accountId;

    /**
     * @var string
     */
    private $id;


    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return DocumentsAccounts
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
     * @return DocumentsAccounts
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
     * @return DocumentsAccounts
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
     * Set accountId
     *
     * @param string $accountId
     * @return DocumentsAccounts
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    
        return $this;
    }

    /**
     * Get accountId
     *
     * @return string 
     */
    public function getAccountId()
    {
        return $this->accountId;
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
