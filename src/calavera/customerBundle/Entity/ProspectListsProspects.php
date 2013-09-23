<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProspectListsProspects
 *
 * @ORM\Table(name="prospect_lists_prospects")
 * @ORM\Entity
 */
class ProspectListsProspects
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
     * @ORM\Column(name="related_id", type="string", length=36, nullable=true)
     */
    private $relatedId;

    /**
     * @var string
     *
     * @ORM\Column(name="related_type", type="string", length=25, nullable=true)
     */
    private $relatedType;

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
     * @return ProspectListsProspects
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
     * Set relatedId
     *
     * @param string $relatedId
     * @return ProspectListsProspects
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;
    
        return $this;
    }

    /**
     * Get relatedId
     *
     * @return string 
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }

    /**
     * Set relatedType
     *
     * @param string $relatedType
     * @return ProspectListsProspects
     */
    public function setRelatedType($relatedType)
    {
        $this->relatedType = $relatedType;
    
        return $this;
    }

    /**
     * Get relatedType
     *
     * @return string 
     */
    public function getRelatedType()
    {
        return $this->relatedType;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return ProspectListsProspects
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
     * @return ProspectListsProspects
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