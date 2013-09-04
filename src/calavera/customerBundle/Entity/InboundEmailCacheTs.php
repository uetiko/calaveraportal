<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InboundEmailCacheTs
 */
class InboundEmailCacheTs
{
    /**
     * @var integer
     */
    private $ieTimestamp;

    /**
     * @var string
     */
    private $id;


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
