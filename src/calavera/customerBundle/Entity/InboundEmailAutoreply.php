<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InboundEmailAutoreply
 *
 * @ORM\Table(name="inbound_email_autoreply")
 * @ORM\Entity
 */
class InboundEmailAutoreply
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
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

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
     * @ORM\Column(name="autoreplied_to", type="string", length=100, nullable=true)
     */
    private $autorepliedTo;

    /**
     * @var string
     *
     * @ORM\Column(name="ie_id", type="string", length=36, nullable=false)
     */
    private $ieId;



    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return InboundEmailAutoreply
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     * @return InboundEmailAutoreply
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
     * @return InboundEmailAutoreply
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
     * Set autorepliedTo
     *
     * @param string $autorepliedTo
     * @return InboundEmailAutoreply
     */
    public function setAutorepliedTo($autorepliedTo)
    {
        $this->autorepliedTo = $autorepliedTo;
    
        return $this;
    }

    /**
     * Get autorepliedTo
     *
     * @return string 
     */
    public function getAutorepliedTo()
    {
        return $this->autorepliedTo;
    }

    /**
     * Set ieId
     *
     * @param string $ieId
     * @return InboundEmailAutoreply
     */
    public function setIeId($ieId)
    {
        $this->ieId = $ieId;
    
        return $this;
    }

    /**
     * Get ieId
     *
     * @return string 
     */
    public function getIeId()
    {
        return $this->ieId;
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