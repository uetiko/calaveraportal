<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsText
 *
 * @ORM\Table(name="emails_text")
 * @ORM\Entity
 */
class EmailsText
{
    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emailId;

    /**
     * @var string
     *
     * @ORM\Column(name="from_addr", type="string", length=255, nullable=true)
     */
    private $fromAddr;

    /**
     * @var string
     *
     * @ORM\Column(name="reply_to_addr", type="string", length=255, nullable=true)
     */
    private $replyToAddr;

    /**
     * @var string
     *
     * @ORM\Column(name="to_addrs", type="text", nullable=true)
     */
    private $toAddrs;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_addrs", type="text", nullable=true)
     */
    private $ccAddrs;

    /**
     * @var string
     *
     * @ORM\Column(name="bcc_addrs", type="text", nullable=true)
     */
    private $bccAddrs;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="description_html", type="text", nullable=true)
     */
    private $descriptionHtml;

    /**
     * @var string
     *
     * @ORM\Column(name="raw_source", type="text", nullable=true)
     */
    private $rawSource;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set fromAddr
     *
     * @param string $fromAddr
     * @return EmailsText
     */
    public function setFromAddr($fromAddr)
    {
        $this->fromAddr = $fromAddr;
    
        return $this;
    }

    /**
     * Get fromAddr
     *
     * @return string 
     */
    public function getFromAddr()
    {
        return $this->fromAddr;
    }

    /**
     * Set replyToAddr
     *
     * @param string $replyToAddr
     * @return EmailsText
     */
    public function setReplyToAddr($replyToAddr)
    {
        $this->replyToAddr = $replyToAddr;
    
        return $this;
    }

    /**
     * Get replyToAddr
     *
     * @return string 
     */
    public function getReplyToAddr()
    {
        return $this->replyToAddr;
    }

    /**
     * Set toAddrs
     *
     * @param string $toAddrs
     * @return EmailsText
     */
    public function setToAddrs($toAddrs)
    {
        $this->toAddrs = $toAddrs;
    
        return $this;
    }

    /**
     * Get toAddrs
     *
     * @return string 
     */
    public function getToAddrs()
    {
        return $this->toAddrs;
    }

    /**
     * Set ccAddrs
     *
     * @param string $ccAddrs
     * @return EmailsText
     */
    public function setCcAddrs($ccAddrs)
    {
        $this->ccAddrs = $ccAddrs;
    
        return $this;
    }

    /**
     * Get ccAddrs
     *
     * @return string 
     */
    public function getCcAddrs()
    {
        return $this->ccAddrs;
    }

    /**
     * Set bccAddrs
     *
     * @param string $bccAddrs
     * @return EmailsText
     */
    public function setBccAddrs($bccAddrs)
    {
        $this->bccAddrs = $bccAddrs;
    
        return $this;
    }

    /**
     * Get bccAddrs
     *
     * @return string 
     */
    public function getBccAddrs()
    {
        return $this->bccAddrs;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return EmailsText
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionHtml
     *
     * @param string $descriptionHtml
     * @return EmailsText
     */
    public function setDescriptionHtml($descriptionHtml)
    {
        $this->descriptionHtml = $descriptionHtml;
    
        return $this;
    }

    /**
     * Get descriptionHtml
     *
     * @return string 
     */
    public function getDescriptionHtml()
    {
        return $this->descriptionHtml;
    }

    /**
     * Set rawSource
     *
     * @param string $rawSource
     * @return EmailsText
     */
    public function setRawSource($rawSource)
    {
        $this->rawSource = $rawSource;
    
        return $this;
    }

    /**
     * Get rawSource
     *
     * @return string 
     */
    public function getRawSource()
    {
        return $this->rawSource;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return EmailsText
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
     * Get emailId
     *
     * @return string 
     */
    public function getEmailId()
    {
        return $this->emailId;
    }
}