<?php
    require_once 'vendor/autoload.php';

    use Doctrine\Common\Cache\ArrayCache;
    use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;
    use Doctrine\Common\Annotations\AnnotationReader;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $loader = new Twig\Loader\FilesystemLoader('html');
    $twig = new Twig\Environment($loader, []);

    $paths = array(realpath(__DIR__) . '/classes/Entity');
    $isDevMode = true;

    // the connection configuration
    $connectionString = explode(';', getenv('MYSQLCONNSTR_localdb'));
    $dbParams = [
        'driver'   => 'pdo_mysql',
        'host'     => explode('=', $connectionString[1])[1],
        'user'     => explode('=', $connectionString[2])[1],
        'password' => explode('=', $connectionString[3])[1],
        'dbname'   => explode('=', $connectionString[0])[1],
    ];

    $cache = new ArrayCache();

    $reader = new AnnotationReader();
    $driver = new AnnotationDriver($reader, $paths);

    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    $config->setMetadataCacheImpl($cache);
    $config->setQueryCacheImpl($cache);
    $config->setMetadataDriverImpl($driver);

    $entityManager = EntityManager::create($dbParams, $config);

    $HeldNodig = new HeldNodig();

    function redirect($location)
    {
        echo '<script> window.location.href = "'.$location.'"; </script>';
        exit();
    }
