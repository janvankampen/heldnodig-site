<?php
    require('header.php');
    
    $categoriesTwig = array();
    foreach ($HeldNodig->getCategories() as $category) {
        $categoriesTwig[] = $category->getTwig();
    }

    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_POST['firstname'] = trim($_POST['firstname'] ?? '');
        if (strlen($_POST['firstname'] ?? '') === 0) {
            $errors['firstname'] = [
                'errors' => ['Voornaam is te kort.']
            ];
        }

        $_POST['lastname'] = trim($_POST['lastname'] ?? '');
        if (strlen($_POST['lastname'] ?? '') === 0) {
            $errors['lastname'] = [
                'errors' => ['Achternaam is te kort.']
            ];
        }

        if (strlen($_POST['phone'] ?? '') < 8) {
            $errors['phone'] = [
                'errors' => ['Telefoonnummer is te kort.']
            ];
        }

        if (!filter_var($_POST['mail'] ?? '', FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = [
                'errors' => ['E-mailadres klopt niet.']
            ];
        }

        $_POST['zipcode'] = str_replace(' ', '', $_POST['zipcode'] ?? '');
        $_POST['zipcode'] = strtoupper($_POST['zipcode']);

        if (strlen($_POST['zipcode'] ?? '') !== 6) {
            $errors['zipcode'] = [
                'errors' => ['Postcode klopt niet.']
            ];
        }

        if (strlen($_POST['description'] ?? '') < 5) {
            $errors['description'] = [
                'errors' => ['Omschrijving is te kort.']
            ];
        }

        $validCategory = false;
        foreach ($categoriesTwig as $c) {
            if ($c['Id'] === (int)$_POST['categoryId']) {
                $validCategory = true;
            }
        }
        if ($validCategory === false) {
            $errors['categoryId'] = [
                'errors' => ['Categorie fout.']
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

        // If errors array is empty, then we can continue
        if (count($errors) === 0) {
            $HeldNodig->createRequest($_POST);
            redirect('requestDone.php');
        }
    }
    
    echo $twig->render('requestForm.html.twig', [
        'categories' => $categoriesTwig,
        'captchaSiteKey' => getenv('captchaSiteKey'),
        'errors' => $errors,
        'form' => $_POST
    ]);
