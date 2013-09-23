<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CallsContacts
 *
 * @ORM\Table(name="calls_contacts")
 * @ORM\Entity
 */
class CallsContacts
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="call_id", type="string", length=36, nullable=true)
     */
    private $callId;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="required", type="string", length=1, nullable=true)
     */
    private $required;

    /**
     * @var string
     *
     * @ORM\Column(name="accept_status", type="string", length=25, nullable=true)
     */
    private $acceptStatus;

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

    public function __construct($id){
        $this->id = $id;
    }

    /**
     * Set callId
     *
     * @param string $callId
     * @return CallsContacts
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;
    
        return $this;
    }

    /**
     * Get callId
     *
     * @return string 
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * Set contactId
     *
     * @param string $contactId
     * @return CallsContacts
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
     * Set required
     *
     * @param string $required
     * @return CallsContacts
     */
    public function setRequired($required)
    {
        $this->required = $required;
    
        return $this;
    }

    /**
     * Get required
     *
     * @return string 
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set acceptStatus
     *
     * @param string $acceptStatus
     * @return CallsContacts
     */
    public function setAcceptStatus($acceptStatus)
    {
        $this->acceptStatus = $acceptStatus;
    
        return $this;
    }

    /**
     * Get acceptStatus
     *
     * @return string 
     */
    public function getAcceptStatus()
    {
        return $this->acceptStatus;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return CallsContacts
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
     * @return CallsContacts
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