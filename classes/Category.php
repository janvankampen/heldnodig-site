<?php

if ($_SERVER['SERVER_NAME']!='localhost') {
    include('/home/site/wwwroot/classes/generated/Category.php');
} else {
    include('/Applications/MAMP/htdocs/heldnodig/classes/generated/Category.php');
}
        
class Category extends Category_generated
{
    public function __construct($arg)
    {
        parent::__construct($arg);
    }
}
