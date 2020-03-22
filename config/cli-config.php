<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once dirname(__DIR__) . '/header.php';

return ConsoleRunner::createHelperSet($entityManager);
