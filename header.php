<?php
	require_once 'vendor/autoload.php';

    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

	$loader = new Twig\Loader\FilesystemLoader('html');
	$twig = new Twig\Environment($loader, []);

    $paths = [__dir__ . '/classes/entities'];
    $isDevMode = true;

    // the connection configuration
    $connectionString = explode(";", getenv("MYSQLCONNSTR_localdb"));
    $dbParams = [
        'driver'   => 'pdo_mysql',
        'host'     => explode("=", $connectionString[1])[1],
        'user'     => explode("=", $connectionString[2])[1],
        'password' => explode("=", $connectionString[3])[1],
        'dbname'   => explode("=", $connectionString[0])[1],
    ];

    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    $entityManager = EntityManager::create($dbParams, $config);

	$HeldNodig = new HeldNodig();

	function redirect($location){
		echo '<script> window.location.href = "'.$location.'"; </script>';
		exit();
	}
