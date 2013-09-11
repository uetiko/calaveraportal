<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatGender
 *
 * @ORM\Table(name="cat_gender")
 * @ORM\Entity
 */
class CatGender
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_gender", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGender;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=15, nullable=false)
     */
    private $gender;



    /**
     * Set gender
     *
     * @param string $gender
     * @return CatGender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Get idGender
     *
     * @return integer 
     */
    public function getIdGender()
    {
        return $this->idGender;
    }
}