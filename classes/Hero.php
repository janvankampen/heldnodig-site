<?php

if($_SERVER['SERVER_NAME']!='localhost'){
include('/home/site/wwwroot/classes/generated/Hero.php');
}else{
include('/Applications/MAMP/htdocs/heldnodig/classes/generated/Hero.php');
}
		
class Hero extends Hero_generated
{

	function __construct($arg) {
		parent::__construct($arg);
	}
	
}
?>