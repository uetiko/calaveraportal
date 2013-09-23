<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoldersRel
 *
 * @ORM\Table(name="folders_rel")
 * @ORM\Entity
 */
class FoldersRel
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
     * @ORM\Column(name="folder_id", type="string", length=36, nullable=false)
     */
    private $folderId;

    /**
     * @var string
     *
     * @ORM\Column(name="polymorphic_module", type="string", length=25, nullable=true)
     */
    private $polymorphicModule;

    /**
     * @var string
     *
     * @ORM\Column(name="polymorphic_id", type="string", length=36, nullable=false)
     */
    private $polymorphicId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set folderId
     *
     * @param string $folderId
     * @return FoldersRel
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;
    
        return $this;
    }

    /**
     * Get folderId
     *
     * @return string 
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * Set polymorphicModule
     *
     * @param string $polymorphicModule
     * @return FoldersRel
     */
    public function setPolymorphicModule($polymorphicModule)
    {
        $this->polymorphicModule = $polymorphicModule;
    
        return $this;
    }

    /**
     * Get polymorphicModule
     *
     * @return string 
     */
    public function getPolymorphicModule()
    {
        return $this->polymorphicModule;
    }

    /**
     * Set polymorphicId
     *
     * @param string $polymorphicId
     * @return FoldersRel
     */
    public function setPolymorphicId($polymorphicId)
    {
        $this->polymorphicId = $polymorphicId;
    
        return $this;
    }

    /**
     * Get polymorphicId
     *
     * @return string 
     */
    public function getPolymorphicId()
    {
        return $this->polymorphicId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return FoldersRel
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