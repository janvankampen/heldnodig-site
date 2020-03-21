<?php
    require("header.php");
    
    $offer = $HeldNodig->getOfferByPrivateGuid($_GET['guid']);
    if ($offer===false) {
        redirect("/");
    }
    
    if ($_POST['verify']==="1") {
        $offer->setIsVerifiedByMail(1);
        
        if (getenv("autoreview")==="1") {
            $offer->setIsAccepted(1);
            $offer->setDateTimeReviewed(date("Y-m-d H:i:s"));
            $offer->setReviewedBy("AutoReview");
        }
        
        $request = $offer->getRequest();
        $request->checkAmountOfOffers();
    }
    
    echo $twig->render('offerVerify.html.twig', ["offer"=>$offer->getTwig()]);
