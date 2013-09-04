<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountsBugs
 */
class AccountsBugs
{
    /**
     * @var string
     */
    private $accountId;

    /**
     * @var string
     */
    private $bugId;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var string
     */
    private $id;


    /**
     * Set accountId
     *
     * @param string $accountId
     * @return AccountsBugs
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    
        return $this;
    }

    /**
     * Get accountId
     *
     * @return string 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set bugId
     *
     * @param string $bugId
     * @return AccountsBugs
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return AccountsBugs
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
     * @return AccountsBugs
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
