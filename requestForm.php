<?php
	require("header.php");
	
	$categoriesTwig = array();
	foreach($HeldNodig->getCategories() as $category){
		array_push($categoriesTwig, $category->getTwig());
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$error = '';
		
		$_POST['firstname'] = trim($_POST['firstname']);
		if(strlen($_POST['firstname']) == 0){
			$error .= "Voornaam klopt niet. ";
		}
		
		$_POST['lastname'] = trim($_POST['lastname']);
		if(strlen($_POST['lastname']) == 0){
			$error .= "Achternaam klopt niet. ";
		}
		
		if(strlen($_POST['phone']) < 8) {
			$error .= "Telefoonnummer klopt niet. ";
		}
		
		if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
			$error .= "E-mailadres klopt niet. ";
		}
		
		$_POST['zipcode'] = str_replace(" ", "", $_POST['zipcode']);
		$_POST['zipcode'] = strtoupper($_POST['zipcode']);

		if(strlen($_POST['zipcode'])!=6) {
			$error .= "Postcode klopt niet. ";
		}
		
		if(strlen($_POST['description']) < 5){
			$error .= "Omschrijving klopt niet. ";
		}
		
		$validCategory = false;
		foreach($categoriesTwig as $c){
			if($c['Id']==intval($_POST['categoryId'])){
				$validCategory = true;
			}
		}
		if($validCategory===false){
			$error .= "Categorie fout. ";
		}
		
		if($_POST['g-recaptcha-response']!=null){
			if($HeldNodig->validateCaptcha($_POST['g-recaptcha-response'])===false){
				$error .= "Captcha validatie fout. ";
			}
		}else{
			$error .= "Captcha fout. ";
		}
		
		if($error!=null){
			echo $error;
		}else{
			$HeldNodig->createRequest($_POST);
			redirect("requestDone.php");
		}
	}
	
	echo $twig->render('requestForm.html', ["categories"=>$categoriesTwig, "captchaSiteKey"=>getenv("captchaSiteKey")]);
?>