<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OauthNonce
 *
 * @ORM\Table(name="oauth_nonce")
 * @ORM\Entity
 */
class OauthNonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="conskey", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conskey;

    /**
     * @var string
     *
     * @ORM\Column(name="nonce", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nonce;

    /**
     * @var integer
     *
     * @ORM\Column(name="nonce_ts", type="bigint", nullable=true)
     */
    private $nonceTs;



    /**
     * Set nonceTs
     *
     * @param integer $nonceTs
     * @return OauthNonce
     */
    public function setNonceTs($nonceTs)
    {
        $this->nonceTs = $nonceTs;
    
        return $this;
    }

    /**
     * Get nonceTs
     *
     * @return integer 
     */
    public function getNonceTs()
    {
        return $this->nonceTs;
    }

    /**
     * Set conskey
     *
     * @param string $conskey
     * @return OauthNonce
     */
    public function setConskey($conskey)
    {
        $this->conskey = $conskey;
    
        return $this;
    }

    /**
     * Get conskey
     *
     * @return string 
     */
    public function getConskey()
    {
        return $this->conskey;
    }

    /**
     * Set nonce
     *
     * @param string $nonce
     * @return OauthNonce
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;
    
        return $this;
    }

    /**
     * Get nonce
     *
     * @return string 
     */
    public function getNonce()
    {
        return $this->nonce;
    }
}