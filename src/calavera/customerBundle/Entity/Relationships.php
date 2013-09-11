<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationships
 *
 * @ORM\Table(name="relationships")
 * @ORM\Entity
 */
class Relationships
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
     * @ORM\Column(name="relationship_name", type="string", length=150, nullable=true)
     */
    private $relationshipName;

    /**
     * @var string
     *
     * @ORM\Column(name="lhs_module", type="string", length=100, nullable=true)
     */
    private $lhsModule;

    /**
     * @var string
     *
     * @ORM\Column(name="lhs_table", type="string", length=64, nullable=true)
     */
    private $lhsTable;

    /**
     * @var string
     *
     * @ORM\Column(name="lhs_key", type="string", length=64, nullable=true)
     */
    private $lhsKey;

    /**
     * @var string
     *
     * @ORM\Column(name="rhs_module", type="string", length=100, nullable=true)
     */
    private $rhsModule;

    /**
     * @var string
     *
     * @ORM\Column(name="rhs_table", type="string", length=64, nullable=true)
     */
    private $rhsTable;

    /**
     * @var string
     *
     * @ORM\Column(name="rhs_key", type="string", length=64, nullable=true)
     */
    private $rhsKey;

    /**
     * @var string
     *
     * @ORM\Column(name="join_table", type="string", length=64, nullable=true)
     */
    private $joinTable;

    /**
     * @var string
     *
     * @ORM\Column(name="join_key_lhs", type="string", length=64, nullable=true)
     */
    private $joinKeyLhs;

    /**
     * @var string
     *
     * @ORM\Column(name="join_key_rhs", type="string", length=64, nullable=true)
     */
    private $joinKeyRhs;

    /**
     * @var string
     *
     * @ORM\Column(name="relationship_type", type="string", length=64, nullable=true)
     */
    private $relationshipType;

    /**
     * @var string
     *
     * @ORM\Column(name="relationship_role_column", type="string", length=64, nullable=true)
     */
    private $relationshipRoleColumn;

    /**
     * @var string
     *
     * @ORM\Column(name="relationship_role_column_value", type="string", length=50, nullable=true)
     */
    private $relationshipRoleColumnValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reverse", type="boolean", nullable=true)
     */
    private $reverse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=true)
     */
    private $deleted;



    /**
     * Set relationshipName
     *
     * @param string $relationshipName
     * @return Relationships
     */
    public function setRelationshipName($relationshipName)
    {
        $this->relationshipName = $relationshipName;
    
        return $this;
    }

    /**
     * Get relationshipName
     *
     * @return string 
     */
    public function getRelationshipName()
    {
        return $this->relationshipName;
    }

    /**
     * Set lhsModule
     *
     * @param string $lhsModule
     * @return Relationships
     */
    public function setLhsModule($lhsModule)
    {
        $this->lhsModule = $lhsModule;
    
        return $this;
    }

    /**
     * Get lhsModule
     *
     * @return string 
     */
    public function getLhsModule()
    {
        return $this->lhsModule;
    }

    /**
     * Set lhsTable
     *
     * @param string $lhsTable
     * @return Relationships
     */
    public function setLhsTable($lhsTable)
    {
        $this->lhsTable = $lhsTable;
    
        return $this;
    }

    /**
     * Get lhsTable
     *
     * @return string 
     */
    public function getLhsTable()
    {
        return $this->lhsTable;
    }

    /**
     * Set lhsKey
     *
     * @param string $lhsKey
     * @return Relationships
     */
    public function setLhsKey($lhsKey)
    {
        $this->lhsKey = $lhsKey;
    
        return $this;
    }

    /**
     * Get lhsKey
     *
     * @return string 
     */
    public function getLhsKey()
    {
        return $this->lhsKey;
    }

    /**
     * Set rhsModule
     *
     * @param string $rhsModule
     * @return Relationships
     */
    public function setRhsModule($rhsModule)
    {
        $this->rhsModule = $rhsModule;
    
        return $this;
    }

    /**
     * Get rhsModule
     *
     * @return string 
     */
    public function getRhsModule()
    {
        return $this->rhsModule;
    }

    /**
     * Set rhsTable
     *
     * @param string $rhsTable
     * @return Relationships
     */
    public function setRhsTable($rhsTable)
    {
        $this->rhsTable = $rhsTable;
    
        return $this;
    }

    /**
     * Get rhsTable
     *
     * @return string 
     */
    public function getRhsTable()
    {
        return $this->rhsTable;
    }

    /**
     * Set rhsKey
     *
     * @param string $rhsKey
     * @return Relationships
     */
    public function setRhsKey($rhsKey)
    {
        $this->rhsKey = $rhsKey;
    
        return $this;
    }

    /**
     * Get rhsKey
     *
     * @return string 
     */
    public function getRhsKey()
    {
        return $this->rhsKey;
    }

    /**
     * Set joinTable
     *
     * @param string $joinTable
     * @return Relationships
     */
    public function setJoinTable($joinTable)
    {
        $this->joinTable = $joinTable;
    
        return $this;
    }

    /**
     * Get joinTable
     *
     * @return string 
     */
    public function getJoinTable()
    {
        return $this->joinTable;
    }

    /**
     * Set joinKeyLhs
     *
     * @param string $joinKeyLhs
     * @return Relationships
     */
    public function setJoinKeyLhs($joinKeyLhs)
    {
        $this->joinKeyLhs = $joinKeyLhs;
    
        return $this;
    }

    /**
     * Get joinKeyLhs
     *
     * @return string 
     */
    public function getJoinKeyLhs()
    {
        return $this->joinKeyLhs;
    }

    /**
     * Set joinKeyRhs
     *
     * @param string $joinKeyRhs
     * @return Relationships
     */
    public function setJoinKeyRhs($joinKeyRhs)
    {
        $this->joinKeyRhs = $joinKeyRhs;
    
        return $this;
    }

    /**
     * Get joinKeyRhs
     *
     * @return string 
     */
    public function getJoinKeyRhs()
    {
        return $this->joinKeyRhs;
    }

    /**
     * Set relationshipType
     *
     * @param string $relationshipType
     * @return Relationships
     */
    public function setRelationshipType($relationshipType)
    {
        $this->relationshipType = $relationshipType;
    
        return $this;
    }

    /**
     * Get relationshipType
     *
     * @return string 
     */
    public function getRelationshipType()
    {
        return $this->relationshipType;
    }

    /**
     * Set relationshipRoleColumn
     *
     * @param string $relationshipRoleColumn
     * @return Relationships
     */
    public function setRelationshipRoleColumn($relationshipRoleColumn)
    {
        $this->relationshipRoleColumn = $relationshipRoleColumn;
    
        return $this;
    }

    /**
     * Get relationshipRoleColumn
     *
     * @return string 
     */
    public function getRelationshipRoleColumn()
    {
        return $this->relationshipRoleColumn;
    }

    /**
     * Set relationshipRoleColumnValue
     *
     * @param string $relationshipRoleColumnValue
     * @return Relationships
     */
    public function setRelationshipRoleColumnValue($relationshipRoleColumnValue)
    {
        $this->relationshipRoleColumnValue = $relationshipRoleColumnValue;
    
        return $this;
    }

    /**
     * Get relationshipRoleColumnValue
     *
     * @return string 
     */
    public function getRelationshipRoleColumnValue()
    {
        return $this->relationshipRoleColumnValue;
    }

    /**
     * Set reverse
     *
     * @param boolean $reverse
     * @return Relationships
     */
    public function setReverse($reverse)
    {
        $this->reverse = $reverse;
    
        return $this;
    }

    /**
     * Get reverse
     *
     * @return boolean 
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Relationships
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