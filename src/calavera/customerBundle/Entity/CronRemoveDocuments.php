<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CronRemoveDocuments
 */
class CronRemoveDocuments
{
    /**
     * @var string
     */
    private $beanId;

    /**
     * @var string
     */
    private $module;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $id;


    /**
     * Set beanId
     *
     * @param string $beanId
     * @return CronRemoveDocuments
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
     * Set module
     *
     * @param string $module
     * @return CronRemoveDocuments
     */
    public function setModule($module)
    {
        $this->module = $module;
    
        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return CronRemoveDocuments
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
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
