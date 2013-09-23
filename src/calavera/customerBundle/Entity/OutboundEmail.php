<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutboundEmail
 *
 * @ORM\Table(name="outbound_email")
 * @ORM\Entity
 */
class OutboundEmail
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=36, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_sendtype", type="string", length=8, nullable=true)
     */
    private $mailSendtype;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_smtptype", type="string", length=20, nullable=true)
     */
    private $mailSmtptype;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_smtpserver", type="string", length=100, nullable=true)
     */
    private $mailSmtpserver;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_smtpport", type="integer", nullable=true)
     */
    private $mailSmtpport;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_smtpuser", type="string", length=100, nullable=true)
     */
    private $mailSmtpuser;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_smtppass", type="string", length=100, nullable=true)
     */
    private $mailSmtppass;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mail_smtpauth_req", type="boolean", nullable=true)
     */
    private $mailSmtpauthReq;

    /**
     * @var integer
     *
     * @ORM\Column(name="mail_smtpssl", type="integer", nullable=true)
     */
    private $mailSmtpssl;



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