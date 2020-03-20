<?php
    require_once 'vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

	$loader = new Twig\Loader\FilesystemLoader('html');
	$twig = new Twig\Environment($loader, []);

	$connectionString = explode(";", getenv("MYSQLCONNSTR_localdb"));
	$database = mysqli_connect(explode("=", $connectionString[1])[1], explode("=", $connectionString[2])[1], explode("=", $connectionString[3])[1], explode("=", $connectionString[0])[1]);

	$HeldNodig = new HeldNodig();

	function redirect($location){
		echo '<script> window.location.href = "'.$location.'"; </script>';
		exit();
	}
