<?php

    /*
    Don't edit this file. This file is auto-generated, so everything can and will be overwritten.
    */

class Hero_generated
{
    public $Id;
    public $Mail;
    public $DateTimeCreated;
    public $IsVerifiedByMail;
    public $LocationZipcode;
    public $LocationCity;
    public $GuidPrivate;

    public function __construct($arg)
    {
        if ($arg['CreateNew']==null) {
            if ($arg['Id']) {
                $this->Id = $arg['Id'];
            }
            if ($arg['Mail']) {
                $this->Mail = $arg['Mail'];
            }
            if ($arg['DateTimeCreated']) {
                $this->DateTimeCreated = $arg['DateTimeCreated'];
            }
            if ($arg['IsVerifiedByMail']) {
                $this->IsVerifiedByMail = $arg['IsVerifiedByMail'];
            }
            if ($arg['LocationZipcode']) {
                $this->LocationZipcode = $arg['LocationZipcode'];
            }
            if ($arg['LocationCity']) {
                $this->LocationCity = $arg['LocationCity'];
            }
            if ($arg['GuidPrivate']) {
                $this->GuidPrivate = $arg['GuidPrivate'];
            }
        }
    }
    
    private function getBasicData()
    {
        $this->Twig = array();
        $query = 'SELECT Id, Mail, DateTimeCreated, IsVerifiedByMail, LocationZipcode, LocationCity, GuidPrivate FROM Hero WHERE Id=?';
        $arr = [];
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("i", $this->getId());
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $this->Id = $row['Id'];
            $this->Twig[Id]=$row['Id'];
            $this->Mail = $row['Mail'];
            $this->Twig[Mail]=$row['Mail'];
            $this->DateTimeCreated = $row['DateTimeCreated'];
            $this->Twig[DateTimeCreated]=$row['DateTimeCreated'];
            $this->IsVerifiedByMail = $row['IsVerifiedByMail'];
            $this->Twig[IsVerifiedByMail]=$row['IsVerifiedByMail'];
            $this->LocationZipcode = $row['LocationZipcode'];
            $this->Twig[LocationZipcode]=$row['LocationZipcode'];
            $this->LocationCity = $row['LocationCity'];
            $this->Twig[LocationCity]=$row['LocationCity'];
            $this->GuidPrivate = $row['GuidPrivate'];
            $this->Twig[GuidPrivate]=$row['GuidPrivate'];
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
        $query = "UPDATE Hero SET Id=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getMail()
    {
        if ($this->Mail==null) {
            $this->getBasicData();
        }
        
        return $this->Mail;
    }
    public function setMail($value)
    {
        $query = "UPDATE Hero SET Mail=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getDateTimeCreated()
    {
        if ($this->DateTimeCreated==null) {
            $this->getBasicData();
        }
        
        return $this->DateTimeCreated;
    }
    public function setDateTimeCreated($value)
    {
        $query = "UPDATE Hero SET DateTimeCreated=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getIsVerifiedByMail()
    {
        if ($this->IsVerifiedByMail==null) {
            $this->getBasicData();
        }
        
        return $this->IsVerifiedByMail;
    }
    public function setIsVerifiedByMail($value)
    {
        $query = "UPDATE Hero SET IsVerifiedByMail=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getLocationZipcode()
    {
        if ($this->LocationZipcode==null) {
            $this->getBasicData();
        }
        
        return $this->LocationZipcode;
    }
    public function setLocationZipcode($value)
    {
        $query = "UPDATE Hero SET LocationZipcode=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getLocationCity()
    {
        if ($this->LocationCity==null) {
            $this->getBasicData();
        }
        
        return $this->LocationCity;
    }
    public function setLocationCity($value)
    {
        $query = "UPDATE Hero SET LocationCity=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getGuidPrivate()
    {
        if ($this->GuidPrivate==null) {
            $this->getBasicData();
        }
        
        return $this->GuidPrivate;
    }
    public function setGuidPrivate($value)
    {
        $query = "UPDATE Hero SET GuidPrivate=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
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
