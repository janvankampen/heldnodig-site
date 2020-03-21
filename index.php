<?php
    /**
     * Uncomment the next lines for debug.
     * Don forget to reset them when checking in
     * to git!
     */

    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);
    require("header.php");
    
    $openRequests = array();
    foreach ($HeldNodig->getOpenRequests($_GET['city'] ?? '') as $r) {
        $x = $r->getTwig();
        $x['Category'] = $r->getCategory()->getName();

        $openRequests[] = $x;
    }
    $closedRequests = array();
    foreach ($HeldNodig->getClosedRequests($_GET['city'] ?? '') as $r) {
        $x = $r->getTwig();
        $x['Category'] = $r->getCategory()->getName();
        
        $closedRequests[] = $x;
    }

  echo $twig->render('homepage.html', [
    'openRequests' => $openRequests,
    'closedRequests' => $closedRequests,
    'city' => $_GET['city'] ?? ''
  ]);
