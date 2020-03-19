<?php
    require("header.php");
    
    $openRequests = array();
    foreach ($HeldNodig->getOpenRequests($_GET['city']) as $r) {
        $x = $r->getTwig();
        $x['Category'] = $r->getCategory()->getName();
        
        
        array_push($openRequests, $x);
    }
    $closedRequests = array();
    foreach ($HeldNodig->getClosedRequests($_GET['city']) as $r) {
        $x = $r->getTwig();
        $x['Category'] = $r->getCategory()->getName();
        
        
        array_push($closedRequests, $x);
    }
            
    echo $twig->render('homepage.html', ["openRequests"=>$openRequests,"closedRequests"=>$closedRequests,"city"=>$_GET['city']]);
