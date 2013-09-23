<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersFeeds
 *
 * @ORM\Table(name="users_feeds")
 * @ORM\Entity
 */
class UsersFeeds
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_users_feeds", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsersFeeds;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="feed_id", type="string", length=36, nullable=true)
     */
    private $feedId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

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