<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tracker
 *
 * @ORM\Table(name="tracker")
 * @ORM\Entity
 */
class Tracker
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
     * @ORM\Column(name="monitor_id", type="string", length=36, nullable=false)
     */
    private $monitorId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=true)
     */
    private $moduleName;

    /**
     * @var string
     *
     * @ORM\Column(name="item_id", type="string", length=36, nullable=true)
     */
    private $itemId;

    /**
     * @var string
     *
     * @ORM\Column(name="item_summary", type="string", length=255, nullable=true)
     */
    private $itemSummary;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    private $dateModified;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=36, nullable=true)
     */
    private $sessionId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set monitorId
     *
     * @param string $monitorId
     * @return Tracker
     */
    public function setMonitorId($monitorId)
    {
        $this->monitorId = $monitorId;
    
        return $this;
    }

    /**
     * Get monitorId
     *
     * @return string 
     */
    public function getMonitorId()
    {
        return $this->monitorId;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return Tracker
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
     * Set moduleName
     *
     * @param string $moduleName
     * @return Tracker
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    
        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string 
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set itemId
     *
     * @param string $itemId
     * @return Tracker
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    
        return $this;
    }

    /**
     * Get itemId
     *
     * @return string 
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set itemSummary
     *
     * @param string $itemSummary
     * @return Tracker
     */
    public function setItemSummary($itemSummary)
    {
        $this->itemSummary = $itemSummary;
    
        return $this;
    }

    /**
     * Get itemSummary
     *
     * @return string 
     */
    public function getItemSummary()
    {
        return $this->itemSummary;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return Tracker
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
     * Set action
     *
     * @param string $action
     * @return Tracker
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     * @return Tracker
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    
        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Tracker
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
    
        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Tracker
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
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}