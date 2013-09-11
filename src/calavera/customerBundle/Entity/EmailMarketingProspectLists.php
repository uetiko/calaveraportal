<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailMarketingProspectLists
 *
 * @ORM\Table(name="email_marketing_prospect_lists")
 * @ORM\Entity
 */
class EmailMarketingProspectLists
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
     * @ORM\Column(name="prospect_list_id", type="string", length=36, nullable=true)
     */
    private $prospectListId;

    /**
     * @var string
     *
     * @ORM\Column(name="email_marketing_id", type="string", length=36, nullable=true)
     */
    private $emailMarketingId;

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
     * Set prospectListId
     *
     * @param string $prospectListId
     * @return EmailMarketingProspectLists
     */
    public function setProspectListId($prospectListId)
    {
        $this->prospectListId = $prospectListId;
    
        return $this;
    }

    /**
     * Get prospectListId
     *
     * @return string 
     */
    public function getProspectListId()
    {
        return $this->prospectListId;
    }

    /**
     * Set emailMarketingId
     *
     * @param string $emailMarketingId
     * @return EmailMarketingProspectLists
     */
    public function setEmailMarketingId($emailMarketingId)
    {
        $this->emailMarketingId = $emailMarketingId;
    
        return $this;
    }

    /**
     * Get emailMarketingId
     *
     * @return string 
     */
    public function getEmailMarketingId()
    {
        return $this->emailMarketingId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return EmailMarketingProspectLists
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
     * @return EmailMarketingProspectLists
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