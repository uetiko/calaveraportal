<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailCache
 */
class EmailCache
{
    /**
     * @var string
     */
    private $ieId;

    /**
     * @var string
     */
    private $mbox;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $fromaddr;

    /**
     * @var string
     */
    private $toaddr;

    /**
     * @var \DateTime
     */
    private $senddate;

    /**
     * @var string
     */
    private $messageId;

    /**
     * @var integer
     */
    private $mailsize;

    /**
     * @var integer
     */
    private $imapUid;

    /**
     * @var integer
     */
    private $msgno;

    /**
     * @var boolean
     */
    private $recent;

    /**
     * @var boolean
     */
    private $flagged;

    /**
     * @var boolean
     */
    private $answered;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var boolean
     */
    private $seen;

    /**
     * @var boolean
     */
    private $draft;

    /**
     * @var integer
     */
    private $idEmailCache;


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
