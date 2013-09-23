<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InboundEmailCacheTs
 *
 * @ORM\Table(name="inbound_email_cache_ts")
 * @ORM\Entity
 */
class InboundEmailCacheTs
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ie_timestamp", type="integer", nullable=true)
     */
    private $ieTimestamp;



    /**
     * Set ieTimestamp
     *
     * @param integer $ieTimestamp
     * @return InboundEmailCacheTs
     */
    public function setIeTimestamp($ieTimestamp)
    {
        $this->ieTimestamp = $ieTimestamp;
    
        return $this;
    }

    /**
     * Get ieTimestamp
     *
     * @return integer 
     */
    public function getIeTimestamp()
    {
        return $this->ieTimestamp;
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