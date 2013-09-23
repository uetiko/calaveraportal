<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatNewsletterStatus
 *
 * @ORM\Table(name="cat_newsletter_status")
 * @ORM\Entity
 */
class CatNewsletterStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_newsletter_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNewsletterStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false)
     */
    private $status;



    /**
     * Set status
     *
     * @param string $status
     * @return CatNewsletterStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get idNewsletterStatus
     *
     * @return integer 
     */
    public function getIdNewsletterStatus()
    {
        return $this->idNewsletterStatus;
    }
}