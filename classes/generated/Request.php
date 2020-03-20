<?php

    /*
    Don't edit this file. This file is auto-generated, so everything can and will be overwritten.
    */

class Request_generated
{
    public $Id;
    public $LocationZipcode;
    public $LocationCity;
    public $Description;
    public $Firstname;
    public $Lastname;
    public $Mail;
    public $Phone;
    public $GuidPublic;
    public $GuidPrivate;
    public $MaxAmountOfOffers;
    public $DateTimePosted;
    public $DateTimeReviewed;
    public $IsVerifiedByMail;
    public $IsAccepted;
    public $IsActive;
    public $IsCanceled;
    public $CategoryId;
    public $ReviewedBy;

    public function __construct($arg)
    {
        if ($arg['CreateNew']==null) {
            if ($arg['Id']) {
                $this->Id = $arg['Id'];
            }
            if ($arg['LocationZipcode']) {
                $this->LocationZipcode = $arg['LocationZipcode'];
            }
            if ($arg['LocationCity']) {
                $this->LocationCity = $arg['LocationCity'];
            }
            if ($arg['Description']) {
                $this->Description = $arg['Description'];
            }
            if ($arg['Firstname']) {
                $this->Firstname = $arg['Firstname'];
            }
            if ($arg['Lastname']) {
                $this->Lastname = $arg['Lastname'];
            }
            if ($arg['Mail']) {
                $this->Mail = $arg['Mail'];
            }
            if ($arg['Phone']) {
                $this->Phone = $arg['Phone'];
            }
            if ($arg['GuidPublic']) {
                $this->GuidPublic = $arg['GuidPublic'];
            }
            if ($arg['GuidPrivate']) {
                $this->GuidPrivate = $arg['GuidPrivate'];
            }
            if ($arg['MaxAmountOfOffers']) {
                $this->MaxAmountOfOffers = $arg['MaxAmountOfOffers'];
            }
            if ($arg['DateTimePosted']) {
                $this->DateTimePosted = $arg['DateTimePosted'];
            }
            if ($arg['DateTimeReviewed']) {
                $this->DateTimeReviewed = $arg['DateTimeReviewed'];
            }
            if ($arg['IsVerifiedByMail']) {
                $this->IsVerifiedByMail = $arg['IsVerifiedByMail'];
            }
            if ($arg['IsAccepted']) {
                $this->IsAccepted = $arg['IsAccepted'];
            }
            if ($arg['IsActive']) {
                $this->IsActive = $arg['IsActive'];
            }
            if ($arg['IsCanceled']) {
                $this->IsCanceled = $arg['IsCanceled'];
            }
            if ($arg['CategoryId']) {
                $this->CategoryId = $arg['CategoryId'];
            }
            if ($arg['ReviewedBy']) {
                $this->ReviewedBy = $arg['ReviewedBy'];
            }
        }
    }
    
    private function getBasicData()
    {
        $this->Twig = array();
        $query = 'SELECT Id, LocationZipcode, LocationCity, Description, Firstname, Lastname, Mail, Phone, GuidPublic, GuidPrivate, MaxAmountOfOffers, DateTimePosted, DateTimeReviewed, IsVerifiedByMail, IsAccepted, IsActive, IsCanceled, CategoryId, ReviewedBy FROM Request WHERE Id=?';
        $arr = [];
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("i", $this->getId());
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $this->Id = $row['Id'];
            $this->Twig[Id]=$row['Id'];
            $this->LocationZipcode = $row['LocationZipcode'];
            $this->Twig[LocationZipcode]=$row['LocationZipcode'];
            $this->LocationCity = $row['LocationCity'];
            $this->Twig[LocationCity]=$row['LocationCity'];
            $this->Description = $row['Description'];
            $this->Twig[Description]=$row['Description'];
            $this->Firstname = $row['Firstname'];
            $this->Twig[Firstname]=$row['Firstname'];
            $this->Lastname = $row['Lastname'];
            $this->Twig[Lastname]=$row['Lastname'];
            $this->Mail = $row['Mail'];
            $this->Twig[Mail]=$row['Mail'];
            $this->Phone = $row['Phone'];
            $this->Twig[Phone]=$row['Phone'];
            $this->GuidPublic = $row['GuidPublic'];
            $this->Twig[GuidPublic]=$row['GuidPublic'];
            $this->GuidPrivate = $row['GuidPrivate'];
            $this->Twig[GuidPrivate]=$row['GuidPrivate'];
            $this->MaxAmountOfOffers = $row['MaxAmountOfOffers'];
            $this->Twig[MaxAmountOfOffers]=$row['MaxAmountOfOffers'];
            $this->DateTimePosted = $row['DateTimePosted'];
            $this->Twig[DateTimePosted]=$row['DateTimePosted'];
            $this->DateTimeReviewed = $row['DateTimeReviewed'];
            $this->Twig[DateTimeReviewed]=$row['DateTimeReviewed'];
            $this->IsVerifiedByMail = $row['IsVerifiedByMail'];
            $this->Twig[IsVerifiedByMail]=$row['IsVerifiedByMail'];
            $this->IsAccepted = $row['IsAccepted'];
            $this->Twig[IsAccepted]=$row['IsAccepted'];
            $this->IsActive = $row['IsActive'];
            $this->Twig[IsActive]=$row['IsActive'];
            $this->IsCanceled = $row['IsCanceled'];
            $this->Twig[IsCanceled]=$row['IsCanceled'];
            $this->CategoryId = $row['CategoryId'];
            $this->Twig[CategoryId]=$row['CategoryId'];
            $this->ReviewedBy = $row['ReviewedBy'];
            $this->Twig[ReviewedBy]=$row['ReviewedBy'];
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
        $query = "UPDATE Request SET Id=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
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
        $query = "UPDATE Request SET LocationZipcode=? WHERE Id=?";
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
        $query = "UPDATE Request SET LocationCity=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getDescription()
    {
        if ($this->Description==null) {
            $this->getBasicData();
        }
        
        return $this->Description;
    }
    public function setDescription($value)
    {
        $query = "UPDATE Request SET Description=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getFirstname()
    {
        if ($this->Firstname==null) {
            $this->getBasicData();
        }
        
        return $this->Firstname;
    }
    public function setFirstname($value)
    {
        $query = "UPDATE Request SET Firstname=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getLastname()
    {
        if ($this->Lastname==null) {
            $this->getBasicData();
        }
        
        return $this->Lastname;
    }
    public function setLastname($value)
    {
        $query = "UPDATE Request SET Lastname=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
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
        $query = "UPDATE Request SET Mail=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getPhone()
    {
        if ($this->Phone==null) {
            $this->getBasicData();
        }
        
        return $this->Phone;
    }
    public function setPhone($value)
    {
        $query = "UPDATE Request SET Phone=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getGuidPublic()
    {
        if ($this->GuidPublic==null) {
            $this->getBasicData();
        }
        
        return $this->GuidPublic;
    }
    public function setGuidPublic($value)
    {
        $query = "UPDATE Request SET GuidPublic=? WHERE Id=?";
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
        $query = "UPDATE Request SET GuidPrivate=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getMaxAmountOfOffers()
    {
        if ($this->MaxAmountOfOffers==null) {
            $this->getBasicData();
        }
        
        return $this->MaxAmountOfOffers;
    }
    public function setMaxAmountOfOffers($value)
    {
        $query = "UPDATE Request SET MaxAmountOfOffers=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getDateTimePosted()
    {
        if ($this->DateTimePosted==null) {
            $this->getBasicData();
        }
        
        return $this->DateTimePosted;
    }
    public function setDateTimePosted($value)
    {
        $query = "UPDATE Request SET DateTimePosted=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getDateTimeReviewed()
    {
        if ($this->DateTimeReviewed==null) {
            $this->getBasicData();
        }
        
        return $this->DateTimeReviewed;
    }
    public function setDateTimeReviewed($value)
    {
        $query = "UPDATE Request SET DateTimeReviewed=? WHERE Id=?";
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
        $query = "UPDATE Request SET IsVerifiedByMail=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getIsAccepted()
    {
        if ($this->IsAccepted==null) {
            $this->getBasicData();
        }
        
        return $this->IsAccepted;
    }
    public function setIsAccepted($value)
    {
        $query = "UPDATE Request SET IsAccepted=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getIsActive()
    {
        if ($this->IsActive==null) {
            $this->getBasicData();
        }
        
        return $this->IsActive;
    }
    public function setIsActive($value)
    {
        $query = "UPDATE Request SET IsActive=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getIsCanceled()
    {
        if ($this->IsCanceled==null) {
            $this->getBasicData();
        }
        
        return $this->IsCanceled;
    }
    public function setIsCanceled($value)
    {
        $query = "UPDATE Request SET IsCanceled=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getCategoryId()
    {
        if ($this->CategoryId==null) {
            $this->getBasicData();
        }
        
        return $this->CategoryId;
    }
    public function setCategoryId($value)
    {
        $query = "UPDATE Request SET CategoryId=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getCategory()
    {
        $obj = new Category(['Id'=>$this->getCategoryId()]);
        return $obj;
    }
    public function setCategory($obj)
    {
        $this->setCategoryId($obj->getId());
    }
    
    public function getReviewedBy()
    {
        if ($this->ReviewedBy==null) {
            $this->getBasicData();
        }
        
        return $this->ReviewedBy;
    }
    public function setReviewedBy($value)
    {
        $query = "UPDATE Request SET ReviewedBy=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getOffers($arg=null)
    {
        $return = array();
        $query = 'SELECT';
                
                
        $query .= '* FROM Offer WHERE RequestId=?';
                
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
            $obj = new Offer($row);
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
