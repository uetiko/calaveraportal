<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressBook
 *
 * @ORM\Table(name="address_book")
 * @ORM\Entity
 */
class AddressBook
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_address_book", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAddressBook;

    /**
     * @var string
     *
     * @ORM\Column(name="assigned_user_id", type="string", length=36, nullable=false)
     */
    private $assignedUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="bean", type="string", length=50, nullable=true)
     */
    private $bean;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=false)
     */
    private $beanId;



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