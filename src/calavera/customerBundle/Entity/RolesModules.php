<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesModules
 *
 * @ORM\Table(name="roles_modules")
 * @ORM\Entity
 */
class RolesModules
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
     * @ORM\Column(name="role_id", type="string", length=36, nullable=true)
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="module_id", type="string", length=36, nullable=true)
     */
    private $moduleId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow", type="boolean", nullable=true)
     */
    private $allow;

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
     * Set roleId
     *
     * @param string $roleId
     * @return RolesModules
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
     * Set moduleId
     *
     * @param string $moduleId
     * @return RolesModules
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;
    
        return $this;
    }

    /**
     * Get moduleId
     *
     * @return string 
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set allow
     *
     * @param boolean $allow
     * @return RolesModules
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;
    
        return $this;
    }

    /**
     * Get allow
     *
     * @return boolean 
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return RolesModules
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
     * @return RolesModules
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