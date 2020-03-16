<?php

if($_SERVER['SERVER_NAME']!='localhost'){
include('/home/site/wwwroot/classes/generated/Offer.php');
}else{
include('/Applications/MAMP/htdocs/heldnodig/classes/generated/Offer.php');
}
		
class Offer extends Offer_generated
{

	function __construct($arg) {
		parent::__construct($arg);
	}
	
}
?>