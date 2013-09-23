<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclSecurityIdentities
 *
 * @ORM\Table(name="acl_security_identities")
 * @ORM\Entity
 */
class AclSecurityIdentities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=200, nullable=false)
     */
    private $identifier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="username", type="boolean", nullable=false)
     */
    private $username;



    /**
     * Set identifier
     *
     * @param string $identifier
     * @return AclSecurityIdentities
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    
        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set username
     *
     * @param boolean $username
     * @return AclSecurityIdentities
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return boolean 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}