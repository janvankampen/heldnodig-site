<?php

    /*
    Don't edit this file. This file is auto-generated, so everything can and will be overwritten.
    */

class Offer_generated
{
    public $Id;
    public $RequestId;
    public $Firstname;
    public $Lastname;
    public $Description;
    public $Mail;
    public $Phone;
    public $DateTimePosted;
    public $DateTimeReviewed;
    public $IsVerifiedByMail;
    public $IsAccepted;
    public $GuidPublic;
    public $GuidPrivate;
    public $ReviewedBy;
    public $IsMailed;

    public function __construct($arg)
    {
        if ($arg['CreateNew']==null) {
            if ($arg['Id']) {
                $this->Id = $arg['Id'];
            }
            if ($arg['RequestId']) {
                $this->RequestId = $arg['RequestId'];
            }
            if ($arg['Firstname']) {
                $this->Firstname = $arg['Firstname'];
            }
            if ($arg['Lastname']) {
                $this->Lastname = $arg['Lastname'];
            }
            if ($arg['Description']) {
                $this->Description = $arg['Description'];
            }
            if ($arg['Mail']) {
                $this->Mail = $arg['Mail'];
            }
            if ($arg['Phone']) {
                $this->Phone = $arg['Phone'];
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
            if ($arg['GuidPublic']) {
                $this->GuidPublic = $arg['GuidPublic'];
            }
            if ($arg['GuidPrivate']) {
                $this->GuidPrivate = $arg['GuidPrivate'];
            }
            if ($arg['ReviewedBy']) {
                $this->ReviewedBy = $arg['ReviewedBy'];
            }
            if ($arg['IsMailed']) {
                $this->IsMailed = $arg['IsMailed'];
            }
        }
    }
    
    private function getBasicData()
    {
        $this->Twig = array();
        $query = 'SELECT Id, RequestId, Firstname, Lastname, Description, Mail, Phone, DateTimePosted, DateTimeReviewed, IsVerifiedByMail, IsAccepted, GuidPublic, GuidPrivate, ReviewedBy, IsMailed FROM Offer WHERE Id=?';
        $arr = [];
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("i", $this->getId());
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $this->Id = $row['Id'];
            $this->Twig[Id]=$row['Id'];
            $this->RequestId = $row['RequestId'];
            $this->Twig[RequestId]=$row['RequestId'];
            $this->Firstname = $row['Firstname'];
            $this->Twig[Firstname]=$row['Firstname'];
            $this->Lastname = $row['Lastname'];
            $this->Twig[Lastname]=$row['Lastname'];
            $this->Description = $row['Description'];
            $this->Twig[Description]=$row['Description'];
            $this->Mail = $row['Mail'];
            $this->Twig[Mail]=$row['Mail'];
            $this->Phone = $row['Phone'];
            $this->Twig[Phone]=$row['Phone'];
            $this->DateTimePosted = $row['DateTimePosted'];
            $this->Twig[DateTimePosted]=$row['DateTimePosted'];
            $this->DateTimeReviewed = $row['DateTimeReviewed'];
            $this->Twig[DateTimeReviewed]=$row['DateTimeReviewed'];
            $this->IsVerifiedByMail = $row['IsVerifiedByMail'];
            $this->Twig[IsVerifiedByMail]=$row['IsVerifiedByMail'];
            $this->IsAccepted = $row['IsAccepted'];
            $this->Twig[IsAccepted]=$row['IsAccepted'];
            $this->GuidPublic = $row['GuidPublic'];
            $this->Twig[GuidPublic]=$row['GuidPublic'];
            $this->GuidPrivate = $row['GuidPrivate'];
            $this->Twig[GuidPrivate]=$row['GuidPrivate'];
            $this->ReviewedBy = $row['ReviewedBy'];
            $this->Twig[ReviewedBy]=$row['ReviewedBy'];
            $this->IsMailed = $row['IsMailed'];
            $this->Twig[IsMailed]=$row['IsMailed'];
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
        $query = "UPDATE Offer SET Id=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getRequestId()
    {
        if ($this->RequestId==null) {
            $this->getBasicData();
        }
        
        return $this->RequestId;
    }
    public function setRequestId($value)
    {
        $query = "UPDATE Offer SET RequestId=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
        $stmt->execute();
    }
    public function getRequest()
    {
        $obj = new Request(['Id'=>$this->getRequestId()]);
        return $obj;
    }
    public function setRequest($obj)
    {
        $this->setRequestId($obj->getId());
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
        $query = "UPDATE Offer SET Firstname=? WHERE Id=?";
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
        $query = "UPDATE Offer SET Lastname=? WHERE Id=?";
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
        $query = "UPDATE Offer SET Description=? WHERE Id=?";
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
        $query = "UPDATE Offer SET Mail=? WHERE Id=?";
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
        $query = "UPDATE Offer SET Phone=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
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
        $query = "UPDATE Offer SET DateTimePosted=? WHERE Id=?";
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
        $query = "UPDATE Offer SET DateTimeReviewed=? WHERE Id=?";
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
        $query = "UPDATE Offer SET IsVerifiedByMail=? WHERE Id=?";
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
        $query = "UPDATE Offer SET IsAccepted=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
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
        $query = "UPDATE Offer SET GuidPublic=? WHERE Id=?";
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
        $query = "UPDATE Offer SET GuidPrivate=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
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
        $query = "UPDATE Offer SET ReviewedBy=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("si", $value, $this->getId());
        $stmt->execute();
    }
    public function getIsMailed()
    {
        if ($this->IsMailed==null) {
            $this->getBasicData();
        }
        
        return $this->IsMailed;
    }
    public function setIsMailed($value)
    {
        $query = "UPDATE Offer SET IsMailed=? WHERE Id=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("ii", $value, $this->getId());
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
