<?php
    require("header.php");
    
    $request = $HeldNodig->getRequestByPublicGuid($_GET['guid']);
    if ($request===false) {
        redirect("/");
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $error = '';
        
        $_POST['firstname'] = trim($_POST['firstname']);
        if (strlen($_POST['firstname']) == 0) {
            $error .= "Voornaam klopt niet. ";
        }
        
        $_POST['lastname'] = trim($_POST['lastname']);
        if (strlen($_POST['lastname']) == 0) {
            $error .= "Achternaam klopt niet. ";
        }
        
        if (strlen($_POST['phone']) < 8) {
            $error .= "Telefoonnummer klopt niet. ";
        }
        
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $error .= "E-mailadres klopt niet. ";
        }
        
        if (strlen($_POST['description']) < 5) {
            $error .= "Omschrijving klopt niet. ";
        }
        
        if ($_POST['g-recaptcha-response']!=null) {
            if ($HeldNodig->validateCaptcha($_POST['g-recaptcha-response'])===false) {
                $error .= "Captcha validatie fout. ";
            }
        } else {
            $error .= "Captcha fout. ";
        }
        
        if ($error!='') {
            echo $error;
        } else {
            $HeldNodig->createOffer($_POST, $request);
            redirect("offerDone.php");
        }
    }
    
    $requestTwig = $request->getTwig();
    $requestTwig['Category'] = $request->getCategory()->getName();
    
    echo $twig->render('offerForm.html.twig', ["request"=>$requestTwig]);
