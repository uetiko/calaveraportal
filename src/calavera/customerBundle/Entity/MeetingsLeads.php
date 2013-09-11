<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeetingsLeads
 *
 * @ORM\Table(name="meetings_leads")
 * @ORM\Entity
 */
class MeetingsLeads
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
     * @ORM\Column(name="meeting_id", type="string", length=36, nullable=true)
     */
    private $meetingId;

    /**
     * @var string
     *
     * @ORM\Column(name="lead_id", type="string", length=36, nullable=true)
     */
    private $leadId;

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



    /**
     * Set meetingId
     *
     * @param string $meetingId
     * @return MeetingsLeads
     */
    public function setMeetingId($meetingId)
    {
        $this->meetingId = $meetingId;
    
        return $this;
    }

    /**
     * Get meetingId
     *
     * @return string 
     */
    public function getMeetingId()
    {
        return $this->meetingId;
    }

    /**
     * Set leadId
     *
     * @param string $leadId
     * @return MeetingsLeads
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;
    
        return $this;
    }

    /**
     * Get leadId
     *
     * @return string 
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * Set required
     *
     * @param string $required
     * @return MeetingsLeads
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
     * @return MeetingsLeads
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
     * @return MeetingsLeads
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
     * @return MeetingsLeads
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