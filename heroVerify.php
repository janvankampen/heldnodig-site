<?php
    require("header.php");
    
    $hero = $HeldNodig->getHeroByPrivateGuid($_GET['guid']);
    if ($hero===false) {
        redirect("/");
    }
    
    if ($_POST['verify']==="1") {
        $hero->setIsVerifiedByMail(1);
    }
    
    
    echo $twig->render('heroVerify.html.twig', ["hero"=>$hero->getTwig()]);
