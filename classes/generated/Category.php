<?php

    /*
    Don't edit this file. This file is auto-generated, so everything can and will be overwritten.
    */

class Category_generated
{
    public $Id;
    public $Name;

    public function __construct($arg)
    {
        if ($arg['CreateNew']==null) {
            if ($arg['Id']) {
                $this->Id = $arg['Id'];
            }
            if ($arg['Name']) {
                $this->Name = $arg['Name'];
            }
        }
    }
    
    private function getBasicData()
    {
        $this->Twig = array();
        $query = 'SELECT Id, Name FROM Category WHERE Id=?';
        $arr = [];
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("i", $this->getId());
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $this->Id = $row['Id'];
            $this->Twig[Id]=$row['Id'];
            $this->Name = $row['Name'];
            $this->Twig[Name]=$row['Name'];
        }
        $stmt->close();
    }

    public function getId()
    {
        if ($this->Id==null) {
            $this->getBasicData();
        }
        
        return $this->Id;
    }
    public function setId($value)
    {
        $query = "UPDATE Category SET Id=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getName()
    {
        if ($this->Name==null) {
            $this->getBasicData();
        }
        
        return $this->Name;
    }
    public function setName($value)
    {
        $query = "UPDATE Category SET Name=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getRequests($arg=null)
    {
        $return = array();
        $query = 'SELECT';
                
                
        $query .= '* FROM Request WHERE CategoryId=?';
                
        if ($arg['OrderBy']!=null) {
            $query .= ' ORDER BY '.$arg['OrderBy']['FieldName'].' '.$arg['OrderBy']['Type'];
        }
            
        if ($arg['Limit']!=null) {
            $query .= ' LIMIT '.$arg['Limit'];
        }
                    
        $arr = [];
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("i", $this->getId());
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $obj = new Request($row);
            array_push($return, $obj);
        }
        $stmt->close();
                
        return $return;
    }
    public function getTwig()
    {
        if ($this->Twig==null) {
            $this->getBasicData();
        }
        
        return $this->Twig;
    }
    
    /*
    END OF GENERATED CODE
    */
}
