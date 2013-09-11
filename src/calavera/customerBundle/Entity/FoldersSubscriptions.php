<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoldersSubscriptions
 *
 * @ORM\Table(name="folders_subscriptions")
 * @ORM\Entity
 */
class FoldersSubscriptions
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
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=false)
     */
    private $assignedUserId;



    /**
     * Set folderId
     *
     * @param string $folderId
     * @return FoldersSubscriptions
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return FoldersSubscriptions
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}