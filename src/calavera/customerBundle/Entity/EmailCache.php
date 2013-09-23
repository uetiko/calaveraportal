<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailCache
 *
 * @ORM\Table(name="email_cache")
 * @ORM\Entity
 */
class EmailCache
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_email_cache", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmailCache;

    /**
     * @var string
     *
     * @ORM\Column(name="ie_id", type="string", length=36, nullable=true)
     */
    private $ieId;

    /**
     * @var string
     *
     * @ORM\Column(name="mbox", type="string", length=60, nullable=true)
     */
    private $mbox;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="fromaddr", type="string", length=100, nullable=true)
     */
    private $fromaddr;

    /**
     * @var string
     *
     * @ORM\Column(name="toaddr", type="string", length=255, nullable=true)
     */
    private $toaddr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="senddate", type="datetime", nullable=true)
     */
    private $senddate;

    /**
     * @var string
     *
     * @ORM\Column(name="message_id", type="string", length=255, nullable=true)
     */
    private $messageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailsize", type="integer", nullable=true)
     */
    private $mailsize;

    /**
     * @var integer
     *
     * @ORM\Column(name="imap_uid", type="integer", nullable=true)
     */
    private $imapUid;

    /**
     * @var integer
     *
     * @ORM\Column(name="msgno", type="integer", nullable=true)
     */
    private $msgno;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recent", type="boolean", nullable=true)
     */
    private $recent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagged", type="boolean", nullable=true)
     */
    private $flagged;

    /**
     * @var boolean
     *
     * @ORM\Column(name="answered", type="boolean", nullable=true)
     */
    private $answered;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="seen", type="boolean", nullable=true)
     */
    private $seen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="draft", type="boolean", nullable=true)
     */
    private $draft;



    /**
     * Set ieId
     *
     * @param string $ieId
     * @return EmailCache
     */
    public function setIeId($ieId)
    {
        $this->ieId = $ieId;
    
        return $this;
    }

    /**
     * Get ieId
     *
     * @return string 
     */
    public function getIeId()
    {
        return $this->ieId;
    }

    /**
     * Set mbox
     *
     * @param string $mbox
     * @return EmailCache
     */
    public function setMbox($mbox)
    {
        $this->mbox = $mbox;
    
        return $this;
    }

    /**
     * Get mbox
     *
     * @return string 
     */
    public function getMbox()
    {
        return $this->mbox;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return EmailCache
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set fromaddr
     *
     * @param string $fromaddr
     * @return EmailCache
     */
    public function setFromaddr($fromaddr)
    {
        $this->fromaddr = $fromaddr;
    
        return $this;
    }

    /**
     * Get fromaddr
     *
     * @return string 
     */
    public function getFromaddr()
    {
        return $this->fromaddr;
    }

    /**
     * Set toaddr
     *
     * @param string $toaddr
     * @return EmailCache
     */
    public function setToaddr($toaddr)
    {
        $this->toaddr = $toaddr;
    
        return $this;
    }

    /**
     * Get toaddr
     *
     * @return string 
     */
    public function getToaddr()
    {
        return $this->toaddr;
    }

    /**
     * Set senddate
     *
     * @param \DateTime $senddate
     * @return EmailCache
     */
    public function setSenddate($senddate)
    {
        $this->senddate = $senddate;
    
        return $this;
    }

    /**
     * Get senddate
     *
     * @return \DateTime 
     */
    public function getSenddate()
    {
        return $this->senddate;
    }

    /**
     * Set messageId
     *
     * @param string $messageId
     * @return EmailCache
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    
        return $this;
    }

    /**
     * Get messageId
     *
     * @return string 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set mailsize
     *
     * @param integer $mailsize
     * @return EmailCache
     */
    public function setMailsize($mailsize)
    {
        $this->mailsize = $mailsize;
    
        return $this;
    }

    /**
     * Get mailsize
     *
     * @return integer 
     */
    public function getMailsize()
    {
        return $this->mailsize;
    }

    /**
     * Set imapUid
     *
     * @param integer $imapUid
     * @return EmailCache
     */
    public function setImapUid($imapUid)
    {
        $this->imapUid = $imapUid;
    
        return $this;
    }

    /**
     * Get imapUid
     *
     * @return integer 
     */
    public function getImapUid()
    {
        return $this->imapUid;
    }

    /**
     * Set msgno
     *
     * @param integer $msgno
     * @return EmailCache
     */
    public function setMsgno($msgno)
    {
        $this->msgno = $msgno;
    
        return $this;
    }

    /**
     * Get msgno
     *
     * @return integer 
     */
    public function getMsgno()
    {
        return $this->msgno;
    }

    /**
     * Set recent
     *
     * @param boolean $recent
     * @return EmailCache
     */
    public function setRecent($recent)
    {
        $this->recent = $recent;
    
        return $this;
    }

    /**
     * Get recent
     *
     * @return boolean 
     */
    public function getRecent()
    {
        return $this->recent;
    }

    /**
     * Set flagged
     *
     * @param boolean $flagged
     * @return EmailCache
     */
    public function setFlagged($flagged)
    {
        $this->flagged = $flagged;
    
        return $this;
    }

    /**
     * Get flagged
     *
     * @return boolean 
     */
    public function getFlagged()
    {
        return $this->flagged;
    }

    /**
     * Set answered
     *
     * @param boolean $answered
     * @return EmailCache
     */
    public function setAnswered($answered)
    {
        $this->answered = $answered;
    
        return $this;
    }

    /**
     * Get answered
     *
     * @return boolean 
     */
    public function getAnswered()
    {
        return $this->answered;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return EmailCache
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
     * Set seen
     *
     * @param boolean $seen
     * @return EmailCache
     */
    public function setSeen($seen)
    {
        $this->seen = $seen;
    
        return $this;
    }

    /**
     * Get seen
     *
     * @return boolean 
     */
    public function getSeen()
    {
        return $this->seen;
    }

    /**
     * Set draft
     *
     * @param boolean $draft
     * @return EmailCache
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;
    
        return $this;
    }

    /**
     * Get draft
     *
     * @return boolean 
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Get idEmailCache
     *
     * @return integer 
     */
    public function getIdEmailCache()
    {
        return $this->idEmailCache;
    }
}