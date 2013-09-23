<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsBugs
 *
 * @ORM\Table(name="contacts_bugs")
 * @ORM\Entity
 */
class ContactsBugs
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
     * @ORM\Column(name="contact_id", type="string", length=36, nullable=true)
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="bug_id", type="string", length=36, nullable=true)
     */
    private $bugId;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_role", type="string", length=50, nullable=true)
     */
    private $contactRole;

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
     * Set contactId
     *
     * @param string $contactId
     * @return ContactsBugs
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
     * Set bugId
     *
     * @param string $bugId
     * @return ContactsBugs
     */
    public function setBugId($bugId)
    {
        $this->bugId = $bugId;
    
        return $this;
    }

    /**
     * Get bugId
     *
     * @return string 
     */
    public function getBugId()
    {
        return $this->bugId;
    }

    /**
     * Set contactRole
     *
     * @param string $contactRole
     * @return ContactsBugs
     */
    public function setContactRole($contactRole)
    {
        $this->contactRole = $contactRole;
    
        return $this;
    }

    /**
     * Get contactRole
     *
     * @return string 
     */
    public function getContactRole()
    {
        return $this->contactRole;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return ContactsBugs
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
     * @return ContactsBugs
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