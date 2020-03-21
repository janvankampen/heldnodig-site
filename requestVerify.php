<?php
    require('header.php');
    
    $request = $HeldNodig->getRequestByPrivateGuid($_GET['guid']);
    if ($request===false) {
        redirect('/');
    }
    
    if ($_POST['verify'] ===  '1') {
        $request->setIsVerifiedByMail(1);
        
        if ((getenv('AUTOREVIEW') ?? '0') === '1') {
            $request->setIsAccepted(1);
            $request->setDateTimeReviewed(date("Y-m-d H:i:s"));
            $request->setReviewedBy("System");
            $request->setMaxAmountOfOffers(5);
        }
    }
    
    
    echo $twig->render('requestVerify.html', [
        "request" => $request->getTwig()
    ]);
