<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersFeeds
 */
class UsersFeeds
{
    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $feedId;

    /**
     * @var integer
     */
    private $rank;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var integer
     */
    private $idUsersFeeds;


    /**
     * Set userId
     *
     * @param string $userId
     * @return UsersFeeds
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set feedId
     *
     * @param string $feedId
     * @return UsersFeeds
     */
    public function setFeedId($feedId)
    {
        $this->feedId = $feedId;
    
        return $this;
    }

    /**
     * Get feedId
     *
     * @return string 
     */
    public function getFeedId()
    {
        return $this->feedId;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return UsersFeeds
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return UsersFeeds
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
     * @return UsersFeeds
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
     * Get idUsersFeeds
     *
     * @return integer 
     */
    public function getIdUsersFeeds()
    {
        return $this->idUsersFeeds;
    }
}
