<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressBook
 */
class AddressBook
{
    /**
     * @var string
     */
    private $assignedUserId;

    /**
     * @var string
     */
    private $bean;

    /**
     * @var string
     */
    private $beanId;

    /**
     * @var string
     */
    private $idAddressBook;


    /**
     * Set assignedUserId
     *
     * @param string $assignedUserId
     * @return AddressBook
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
     * Set bean
     *
     * @param string $bean
     * @return AddressBook
     */
    public function setBean($bean)
    {
        $this->bean = $bean;
    
        return $this;
    }

    /**
     * Get bean
     *
     * @return string 
     */
    public function getBean()
    {
        return $this->bean;
    }

    /**
     * Set beanId
     *
     * @param string $beanId
     * @return AddressBook
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
     * Get idAddressBook
     *
     * @return string 
     */
    public function getIdAddressBook()
    {
        return $this->idAddressBook;
    }
}
