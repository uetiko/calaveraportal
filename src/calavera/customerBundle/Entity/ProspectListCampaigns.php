<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProspectListCampaigns
 *
 * @ORM\Table(name="prospect_list_campaigns")
 * @ORM\Entity
 */
class ProspectListCampaigns
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
     * @ORM\Column(name="campaign_id", type="string", length=36, nullable=true)
     */
    private $campaignId;

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
     * @return ProspectListCampaigns
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
     * Set campaignId
     *
     * @param string $campaignId
     * @return ProspectListCampaigns
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
    
        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string 
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return ProspectListCampaigns
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
     * @return ProspectListCampaigns
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