<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclRolesActions
 */
class AclRolesActions
{
    /**
     * @var string
     */
    private $roleId;

    /**
     * @var string
     */
    private $actionId;

    /**
     * @var integer
     */
    private $accessOverride;

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
     * Set roleId
     *
     * @param string $roleId
     * @return AclRolesActions
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    
        return $this;
    }

    /**
     * Get roleId
     *
     * @return string 
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set actionId
     *
     * @param string $actionId
     * @return AclRolesActions
     */
    public function setActionId($actionId)
    {
        $this->actionId = $actionId;
    
        return $this;
    }

    /**
     * Get actionId
     *
     * @return string 
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Set accessOverride
     *
     * @param integer $accessOverride
     * @return AclRolesActions
     */
    public function setAccessOverride($accessOverride)
    {
        $this->accessOverride = $accessOverride;
    
        return $this;
    }

    /**
     * Get accessOverride
     *
     * @return integer 
     */
    public function getAccessOverride()
    {
        return $this->accessOverride;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return AclRolesActions
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
     * @return AclRolesActions
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
