<?php
    require("header.php");
    
    $request = $HeldNodig->getRequestByPublicGuid($_GET['guid']);
    if ($request===false) {
        redirect('/');
    }

    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_POST['firstname'] = trim($_POST['firstname']);
        if (strlen($_POST['firstname']) == 0) {
            $errors['firstname'] = [
                'errors' => ['Voornaam is niet lang genoeg']
            ];
        }
        
        $_POST['lastname'] = trim($_POST['lastname']);
        if (strlen($_POST['lastname']) == 0) {
            $errors['lastname'] = [
                'errors' => ['Achternaam is niet lang genoeg']
            ];
        }
        
        if (strlen($_POST['phone']) < 8) {
            $errors['phone'] = [
                'errors' => ['Telefoonnummer klopt niet']
            ];
        }
        
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = [
                'errors' => ['E-mailadres klopt niet']
            ];
        }
        
        if (strlen($_POST['description']) < 5) {
            $errors['description'] = [
                'errors' => ['Omschrijving moet langer zijn dan 5 tekens']
            ];
        }

        if (!isset($_POST['safety-check'])) {
            $errors['safety-check'] = [
                'errors' => ['Je moet akkoord gaan']
            ];
        }

        if (!isset($_POST['privacystatement'])) {
            $errors['privacystatement'] = [
                'errors' => ['Je moet akkoord gaan']
            ];
        }
        
        if (($_POST['g-recaptcha-response'] ?? null) !== null) {
            if ($HeldNodig->validateCaptcha($_POST['g-recaptcha-response'])===false) {
                $errors['g-recaptcha-response'] = [
                    'errors' => ['Captcha validatie fout.']
                ];
            }
        } else {
            $errors['g-recaptcha-response'] = [
                'errors' => ['Captcha fout.']
            ];
        }
        
        if (count($errors) === 0) {
            $HeldNodig->createOffer($_POST, $request);
            redirect('offerDone.php');
        }
    }
    
    $requestTwig = $request->getTwig();
    $requestTwig['Category'] = $request->getCategory()->getName();

    echo $twig->render('offerForm.html.twig', [
        'request' => $requestTwig,
        'captchaSiteKey' => getenv('captchaSiteKey'),
        'errors' => $errors,
        'form' => $_POST
    ]);
