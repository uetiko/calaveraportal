<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomFields
 */
class CustomFields
{
    /**
     * @var string
     */
    private $beanId;

    /**
     * @var integer
     */
    private $setNum;

    /**
     * @var string
     */
    private $field0;

    /**
     * @var string
     */
    private $field1;

    /**
     * @var string
     */
    private $field2;

    /**
     * @var string
     */
    private $field3;

    /**
     * @var string
     */
    private $field4;

    /**
     * @var string
     */
    private $field5;

    /**
     * @var string
     */
    private $field6;

    /**
     * @var string
     */
    private $field7;

    /**
     * @var string
     */
    private $field8;

    /**
     * @var string
     */
    private $field9;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var integer
     */
    private $idCustomFields;


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
