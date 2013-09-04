<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentsContacts
 */
class DocumentsContacts
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
    private $contactId;

    /**
     * @var string
     */
    private $id;


    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return DocumentsContacts
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
     * @return DocumentsContacts
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
     * @return DocumentsContacts
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
     * Set contactId
     *
     * @param string $contactId
     * @return DocumentsContacts
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
    
        return $this;
    }

    /**
     * Get contactId
     *
     * @return string 
     */
    public function getContactId()
    {
        return $this->contactId;
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
