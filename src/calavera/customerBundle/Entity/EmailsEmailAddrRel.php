<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsEmailAddrRel
 *
 * @ORM\Table(name="emails_email_addr_rel")
 * @ORM\Entity
 */
class EmailsEmailAddrRel
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
     * @ORM\Column(name="email_id", type="string", length=36, nullable=false)
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="address_type", type="string", length=4, nullable=true)
     */
    private $addressType;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address_id", type="string", length=36, nullable=false)
     */
    private $emailAddressId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set emailId
     *
     * @param string $emailId
     * @return EmailsEmailAddrRel
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
    
        return $this;
    }

    /**
     * Get emailId
     *
     * @return string 
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set addressType
     *
     * @param string $addressType
     * @return EmailsEmailAddrRel
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
    
        return $this;
    }

    /**
     * Get addressType
     *
     * @return string 
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Set emailAddressId
     *
     * @param string $emailAddressId
     * @return EmailsEmailAddrRel
     */
    public function setEmailAddressId($emailAddressId)
    {
        $this->emailAddressId = $emailAddressId;
    
        return $this;
    }

    /**
     * Get emailAddressId
     *
     * @return string 
     */
    public function getEmailAddressId()
    {
        return $this->emailAddressId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return EmailsEmailAddrRel
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