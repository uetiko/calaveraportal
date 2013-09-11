<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersLastImport
 *
 * @ORM\Table(name="users_last_import")
 * @ORM\Entity
 */
class UsersLastImport
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
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=true)
     */
    private $assignedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="import_module", type="string", length=36, nullable=true)
     */
    private $importModule;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_type", type="string", length=36, nullable=true)
     */
    private $beanType;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=true)
     */
    private $beanId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return UsersLastImport
     */
    public function setAssignedUserId($assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;
    
        return $this;
    }

    /**
     * Get assignedUserId
     *
     * @return string 
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * Set importModule
     *
     * @param string $importModule
     * @return UsersLastImport
     */
    public function setImportModule($importModule)
    {
        $this->importModule = $importModule;
    
        return $this;
    }

    /**
     * Get importModule
     *
     * @return string 
     */
    public function getImportModule()
    {
        return $this->importModule;
    }

    /**
     * Set beanType
     *
     * @param string $beanType
     * @return UsersLastImport
     */
    public function setBeanType($beanType)
    {
        $this->beanType = $beanType;
    
        return $this;
    }

    /**
     * Get beanType
     *
     * @return string 
     */
    public function getBeanType()
    {
        return $this->beanType;
    }

    /**
     * Set beanId
     *
     * @param string $beanId
     * @return UsersLastImport
     */
    public function setBeanId($beanId)
    {
        $this->beanId = $beanId;
    
        return $this;
    }

    /**
     * Get beanId
     *
     * @return string 
     */
    public function getBeanId()
    {
        return $this->beanId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return UsersLastImport
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