<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFields
 *
 * @ORM\Table(name="custom_fields")
 * @ORM\Entity
 */
class CustomFields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_custom_fields", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCustomFields;

    /**
     * @var string
     *
     * @ORM\Column(name="bean_id", type="string", length=36, nullable=true)
     */
    private $beanId;

    /**
     * @var integer
     *
     * @ORM\Column(name="set_num", type="integer", nullable=true)
     */
    private $setNum;

    /**
     * @var string
     *
     * @ORM\Column(name="field0", type="string", length=255, nullable=true)
     */
    private $field0;

    /**
     * @var string
     *
     * @ORM\Column(name="field1", type="string", length=255, nullable=true)
     */
    private $field1;

    /**
     * @var string
     *
     * @ORM\Column(name="field2", type="string", length=255, nullable=true)
     */
    private $field2;

    /**
     * @var string
     *
     * @ORM\Column(name="field3", type="string", length=255, nullable=true)
     */
    private $field3;

    /**
     * @var string
     *
     * @ORM\Column(name="field4", type="string", length=255, nullable=true)
     */
    private $field4;

    /**
     * @var string
     *
     * @ORM\Column(name="field5", type="string", length=255, nullable=true)
     */
    private $field5;

    /**
     * @var string
     *
     * @ORM\Column(name="field6", type="string", length=255, nullable=true)
     */
    private $field6;

    /**
     * @var string
     *
     * @ORM\Column(name="field7", type="string", length=255, nullable=true)
     */
    private $field7;

    /**
     * @var string
     *
     * @ORM\Column(name="field8", type="string", length=255, nullable=true)
     */
    private $field8;

    /**
     * @var string
     *
     * @ORM\Column(name="field9", type="string", length=255, nullable=true)
     */
    private $field9;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set beanId
     *
     * @param string $beanId
     * @return CustomFields
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
     * Set setNum
     *
     * @param integer $setNum
     * @return CustomFields
     */
    public function setSetNum($setNum)
    {
        $this->setNum = $setNum;
    
        return $this;
    }

    /**
     * Get setNum
     *
     * @return integer 
     */
    public function getSetNum()
    {
        return $this->setNum;
    }

    /**
     * Set field0
     *
     * @param string $field0
     * @return CustomFields
     */
    public function setField0($field0)
    {
        $this->field0 = $field0;
    
        return $this;
    }

    /**
     * Get field0
     *
     * @return string 
     */
    public function getField0()
    {
        return $this->field0;
    }

    /**
     * Set field1
     *
     * @param string $field1
     * @return CustomFields
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;
    
        return $this;
    }

    /**
     * Get field1
     *
     * @return string 
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Set field2
     *
     * @param string $field2
     * @return CustomFields
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
    
        return $this;
    }

    /**
     * Get field2
     *
     * @return string 
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Set field3
     *
     * @param string $field3
     * @return CustomFields
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;
    
        return $this;
    }

    /**
     * Get field3
     *
     * @return string 
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Set field4
     *
     * @param string $field4
     * @return CustomFields
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;
    
        return $this;
    }

    /**
     * Get field4
     *
     * @return string 
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Set field5
     *
     * @param string $field5
     * @return CustomFields
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;
    
        return $this;
    }

    /**
     * Get field5
     *
     * @return string 
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Set field6
     *
     * @param string $field6
     * @return CustomFields
     */
    public function setField6($field6)
    {
        $this->field6 = $field6;
    
        return $this;
    }

    /**
     * Get field6
     *
     * @return string 
     */
    public function getField6()
    {
        return $this->field6;
    }

    /**
     * Set field7
     *
     * @param string $field7
     * @return CustomFields
     */
    public function setField7($field7)
    {
        $this->field7 = $field7;
    
        return $this;
    }

    /**
     * Get field7
     *
     * @return string 
     */
    public function getField7()
    {
        return $this->field7;
    }

    /**
     * Set field8
     *
     * @param string $field8
     * @return CustomFields
     */
    public function setField8($field8)
    {
        $this->field8 = $field8;
    
        return $this;
    }

    /**
     * Get field8
     *
     * @return string 
     */
    public function getField8()
    {
        return $this->field8;
    }

    /**
     * Set field9
     *
     * @param string $field9
     * @return CustomFields
     */
    public function setField9($field9)
    {
        $this->field9 = $field9;
    
        return $this;
    }

    /**
     * Get field9
     *
     * @return string 
     */
    public function getField9()
    {
        return $this->field9;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return CustomFields
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
     * Get idCustomFields
     *
     * @return integer 
     */
    public function getIdCustomFields()
    {
        return $this->idCustomFields;
    }
}