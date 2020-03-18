<?php
	require("header.php");
	
	$openRequests = array();
	foreach($HeldNodig->getOpenRequests($_GET['city'] ?? '') as $r){
		$x = $r->getTwig();
		$x['Category'] = $r->getCategory()->getName();

		$openRequests[] = $x;
	}
	$closedRequests = array();
	foreach($HeldNodig->getClosedRequests($_GET['city'] ?? '') as $r){
		$x = $r->getTwig();
		$x['Category'] = $r->getCategory()->getName();
		
		$closedRequests[] = $x;
	}
			
	echo $twig->render('homepage.html', [
	    'openRequests' => $openRequests,
        'closedRequests' => $closedRequests,
        'city' => $_GET['city'] ?? ''
    ]);
