<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersPasswordLink
 *
 * @ORM\Table(name="users_password_link")
 * @ORM\Entity
 */
class UsersPasswordLink
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
     * @ORM\Column(name="username", type="string", length=36, nullable=true)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_generated", type="datetime", nullable=true)
     */
    private $dateGenerated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set username
     *
     * @param string $username
     * @return UsersPasswordLink
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set dateGenerated
     *
     * @param \DateTime $dateGenerated
     * @return UsersPasswordLink
     */
    public function setDateGenerated($dateGenerated)
    {
        $this->dateGenerated = $dateGenerated;
    
        return $this;
    }

    /**
     * Get dateGenerated
     *
     * @return \DateTime 
     */
    public function getDateGenerated()
    {
        return $this->dateGenerated;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return UsersPasswordLink
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