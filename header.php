<?php
    spl_autoload_register(function ($class_name) {
        include 'classes/'.$class_name . '.php';
    });
    
    require_once 'vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('html');
    $twig = new Twig_Environment($loader, []);
    
    $connectionString = explode(";", getenv("MYSQLCONNSTR_localdb"));
    $database = mysqli_connect(explode("=", $connectionString[1])[1], explode("=", $connectionString[2])[1], explode("=", $connectionString[3])[1], explode("=", $connectionString[0])[1]);
    
    $HeldNodig = new HeldNodig();
    
    function redirect($location)
    {
        echo '<script> window.location.href = "'.$location.'"; </script>';
        exit();
    }
