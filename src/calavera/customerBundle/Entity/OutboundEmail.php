<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutboundEmail
 */
class OutboundEmail
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $mailSendtype;

    /**
     * @var string
     */
    private $mailSmtptype;

    /**
     * @var string
     */
    private $mailSmtpserver;

    /**
     * @var integer
     */
    private $mailSmtpport;

    /**
     * @var string
     */
    private $mailSmtpuser;

    /**
     * @var string
     */
    private $mailSmtppass;

    /**
     * @var boolean
     */
    private $mailSmtpauthReq;

    /**
     * @var integer
     */
    private $mailSmtpssl;

    /**
     * @var string
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return OutboundEmail
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return OutboundEmail
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return OutboundEmail
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
     * Set mailSendtype
     *
     * @param string $mailSendtype
     * @return OutboundEmail
     */
    public function setMailSendtype($mailSendtype)
    {
        $this->mailSendtype = $mailSendtype;
    
        return $this;
    }

    /**
     * Get mailSendtype
     *
     * @return string 
     */
    public function getMailSendtype()
    {
        return $this->mailSendtype;
    }

    /**
     * Set mailSmtptype
     *
     * @param string $mailSmtptype
     * @return OutboundEmail
     */
    public function setMailSmtptype($mailSmtptype)
    {
        $this->mailSmtptype = $mailSmtptype;
    
        return $this;
    }

    /**
     * Get mailSmtptype
     *
     * @return string 
     */
    public function getMailSmtptype()
    {
        return $this->mailSmtptype;
    }

    /**
     * Set mailSmtpserver
     *
     * @param string $mailSmtpserver
     * @return OutboundEmail
     */
    public function setMailSmtpserver($mailSmtpserver)
    {
        $this->mailSmtpserver = $mailSmtpserver;
    
        return $this;
    }

    /**
     * Get mailSmtpserver
     *
     * @return string 
     */
    public function getMailSmtpserver()
    {
        return $this->mailSmtpserver;
    }

    /**
     * Set mailSmtpport
     *
     * @param integer $mailSmtpport
     * @return OutboundEmail
     */
    public function setMailSmtpport($mailSmtpport)
    {
        $this->mailSmtpport = $mailSmtpport;
    
        return $this;
    }

    /**
     * Get mailSmtpport
     *
     * @return integer 
     */
    public function getMailSmtpport()
    {
        return $this->mailSmtpport;
    }

    /**
     * Set mailSmtpuser
     *
     * @param string $mailSmtpuser
     * @return OutboundEmail
     */
    public function setMailSmtpuser($mailSmtpuser)
    {
        $this->mailSmtpuser = $mailSmtpuser;
    
        return $this;
    }

    /**
     * Get mailSmtpuser
     *
     * @return string 
     */
    public function getMailSmtpuser()
    {
        return $this->mailSmtpuser;
    }

    /**
     * Set mailSmtppass
     *
     * @param string $mailSmtppass
     * @return OutboundEmail
     */
    public function setMailSmtppass($mailSmtppass)
    {
        $this->mailSmtppass = $mailSmtppass;
    
        return $this;
    }

    /**
     * Get mailSmtppass
     *
     * @return string 
     */
    public function getMailSmtppass()
    {
        return $this->mailSmtppass;
    }

    /**
     * Set mailSmtpauthReq
     *
     * @param boolean $mailSmtpauthReq
     * @return OutboundEmail
     */
    public function setMailSmtpauthReq($mailSmtpauthReq)
    {
        $this->mailSmtpauthReq = $mailSmtpauthReq;
    
        return $this;
    }

    /**
     * Get mailSmtpauthReq
     *
     * @return boolean 
     */
    public function getMailSmtpauthReq()
    {
        return $this->mailSmtpauthReq;
    }

    /**
     * Set mailSmtpssl
     *
     * @param integer $mailSmtpssl
     * @return OutboundEmail
     */
    public function setMailSmtpssl($mailSmtpssl)
    {
        $this->mailSmtpssl = $mailSmtpssl;
    
        return $this;
    }

    /**
     * Get mailSmtpssl
     *
     * @return integer 
     */
    public function getMailSmtpssl()
    {
        return $this->mailSmtpssl;
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
