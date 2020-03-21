<?php
    
    require("header.php");
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $error = '';
                
        if (strlen($_POST['mail']) > 0) {
        } else {
            $error .= "E-mailadres klopt niet. ";
        }
        
        $_POST['zipcode'] = str_replace(" ", "", $_POST['zipcode']);
        $_POST['zipcode'] = strtoupper($_POST['zipcode']);

        if (strlen($_POST['zipcode'])==6) {
        } else {
            $error .= "Postcode klopt niet. ";
        }

        
        if ($_POST['g-recaptcha-response']!=null) {
            if ($HeldNodig->validateCaptcha($_POST['g-recaptcha-response'])===false) {
                $error = "Captcha validatie fout. ";
            }
        } else {
            $error .= "Captcha fout. ";
        }
        
        if ($error!='') {
            echo $error;
        } else {
            $HeldNodig->createHero($_POST);
            redirect("heroDone.php");
        }
    }
    

    
    echo $twig->render('heroForm.html', [
        'recaptchaSiteKey' => getenv('CAPTCHA_SITE_KEY')
    ]);
