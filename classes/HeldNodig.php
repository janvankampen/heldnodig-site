<?php

class HeldNodig
{
    public function __construct()
    {
    }
    
    public function getCategories()
    {
        $query = "SELECT * FROM Category";
        $categories = [];
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $category = new Category($row);
            array_push($categories, $category);
        }
        $stmt->close();
            
        return $categories;
    }
    
    public function sendMail($toMail, $subject, $message)
    {
        $json_data = json_encode(array("toMail"=>$toMail,"message"=>$message,"subject"=>"[HeldNodig] ".$subject));
        $post = file_get_contents(getenv("mailLogicAppEndpoint"), null, stream_context_create(array(
            'http' => array(
                'protocol_version' => 1.1,
                'user_agent'       => 'stofmelder',
                'method'           => 'POST',
                'header'           => "Content-type: application/json\r\n".
                                      "Connection: close\r\n" .
                                      "Content-length: " . strlen($json_data) . "\r\n",
                'content'          => $json_data,
            ),
        )));
    }
    public function createGuid()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
    
    public function createRequest($arg)
    {
        $query = "INSERT INTO Request (LocationZipcode, LocationCity, Firstname, Lastname, Mail, Phone, GuidPublic, GuidPrivate, Description, CategoryId) VALUES (?,?,?,?,?,?,?,?,?,?)";
        
        $guidPrivate = $this->createGuid();
        $guidPublic = $this->createGuid();
        
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("sssssssssi", $arg['zipcode'], $this->zipToCity($arg['zipcode']), $arg['firstname'], $arg['lastname'], $arg['mail'], $arg['phone'], $guidPublic, $guidPrivate, $arg['description'], intval($arg['categoryId']));
        $stmt->execute();
        $result = $stmt->get_result();
        
        $domain = getenv("domain");
        
        $this->sendMail($arg['mail'], "Verifieer je hulpvraag", "Beste ".$arg['firstname'].", onlangs is er een hulpvraag gepost op heldnodig.nl via dit mailadres. Klik op de link hieronder om deze te verifiëren.<br><br><a href='".$domain."/requestVerify.php?guid=".$privateGuid."'>".$domain."/requestVerify.php?guid=".$privateGuid."</a><br><br>Met vriendelijke groet,<br>HeldNodig.nl");
    }
    
    public function createOffer($arg, $request)
    {
        $query = "INSERT INTO Offer(RequestId, Firstname, Lastname, Mail, Phone, GuidPublic, GuidPrivate, Description) VALUES (?,?,?,?,?,?,?,?)";
        
        $guidPrivate = $this->createGuid();
        $guidPublic = $this->createGuid();
            
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("isssssss", $request->getId(), $arg['firstname'], $arg['lastname'], $arg['mail'], $arg['phone'], $guidPublic, $guidPrivate, $arg['description']);
        $stmt->execute();
        $result = $stmt->get_result();

        $domain = getenv("domain");
        
        $this->sendMail($arg['mail'], "Verifieer je aanbod", "Beste ".$arg['firstname'].", onlangs is er een aanbod gepost op heldnodig.nl via dit mailadres. Klik op de link hieronder om deze te verifiëren.<br><br><a href='".$domain."/offerVerify.php?guid=".$privateGuid."'>".$domain."/offerVerify.php?guid=".$privateGuid."</a><br><br>Met vriendelijke groet,<br>HeldNodig.nl");
    }
    
    public function createHero($arg)
    {
        $query = "SELECT * FROM Hero WHERE (Mail=? AND IsVerifiedByMail=?) OR (Mail=? AND IsVerifiedByMail=? AND DateTimeCreated>?)";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("sisis", $arg['mail'], 1, $arg['mail'], 0, date("Y-m-d H:i:s", time()-30*60));
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            return;
        }
        $stmt->close();
        
        $query = "INSERT INTO Hero(LocationZipcode, Mail, GuidPrivate) VALUES (?,?,?)";
        
        $guidPrivate = $this->createGuid();
        
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("sss", $arg['zipcode'], $arg['mail'], $guidPrivate);
        $stmt->execute();
        $result = $stmt->get_result();

        $domain = getenv("domain");
        
        $this->sendMail($arg['mail'], "Verifieer je mailadres", "Beste held, onlangs heb je je aangemeld als held op heldnodig.nl via dit mailadres. Klik op de link hieronder om dit te verifiëren.<br><br><a href='".$domain."/heroVerify.php?guid=".$privateGuid."'>".$domain."/heroVerify.php?guid=".$privateGuid."</a><br><br>Met vriendelijke groet,<br>HeldNodig.nl");
    }

    public function getOfferToMail()
    {
        $query = "SELECT * FROM Offer WHERE IsAccepted=1 AND IsMailed=0 LIMIT 1";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $offer = new Offer($row);
            return $offer;
        }
        $stmt->close();
        return false;
    }
    public function getRequestByPrivateGuid($guid)
    {
        $query = "SELECT * FROM Request WHERE GuidPrivate=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("s", $guid);
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $request = new Request($row);
            return $request;
        }
        $stmt->close();
        return false;
    }
    public function getHeroByPrivateGuid($guid)
    {
        $query = "SELECT * FROM Hero WHERE GuidPrivate=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("s", $guid);
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $hero = new Hero($row);
            return $hero;
        }
        $stmt->close();
        return false;
    }
    public function getOfferByPrivateGuid($guid)
    {
        $query = "SELECT * FROM Offer WHERE GuidPrivate=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("s", $guid);
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $x = new Offer($row);
            return $x;
        }
        $stmt->close();
        return false;
    }
    public function getRequestByPublicGuid($guid)
    {
        $query = "SELECT * FROM Request WHERE GuidPublic=?";
        $stmt = $GLOBALS['database']->prepare($query);
        $stmt->bind_param("s", $guid);
        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $request = new Request($row);
            return $request;
        }
        $stmt->close();
        return false;
    }
    
    public function getOpenRequests($city=null)
    {
        $openRequests = array();
        $query = "SELECT * FROM Request WHERE IsCanceled=0 AND IsActive=1 AND IsAccepted=1";
        
        if ($city!=null) {
            $query .= " AND LocationCity=?";
        }
        
        $stmt = $GLOBALS['database']->prepare($query);

        if ($city!=null) {
            $stmt->bind_param("s", $city);
        }

        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $request = new Request($row);
            array_push($openRequests, $request);
        }
        
        return $openRequests;
    }
    public function getClosedRequests($city=null)
    {
        $closedRequests = array();
        $query = "SELECT * FROM Request WHERE IsCanceled=0 AND IsActive=0 AND IsAccepted=1";
        
        if ($city!=null) {
            $query .= " AND LocationCity=?";
        }
            
        $query .= " ORDER BY Id DESC LIMIT 1";
        
        $stmt = $GLOBALS['database']->prepare($query);

        if ($city!=null) {
            $stmt->bind_param("s", $city);
        }

        $stmt->execute();
        $result = $stmt->get_result();
            
        while ($row = $result->fetch_assoc()) {
            $request = new Request($row);
            array_push($closedRequests, $request);
        }
        
        return $closedRequests;
    }

    public function validateCaptcha($code)
    {
        $postdata = http_build_query(
            array(
                'response' => $code,
                'secret' => getenv("captchaSecret")
            )
        );
        
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        
        $context  = stream_context_create($opts);
        
        $result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $result = json_decode($result, true);
        
        return $result['success'];
    }
}
