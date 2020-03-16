<?php

if($_SERVER['SERVER_NAME']!='localhost'){
include('/home/site/wwwroot/classes/generated/Request.php');
}else{
include('/Applications/MAMP/htdocs/heldnodig/classes/generated/Request.php');
}
		
class Request extends Request_generated
{

	function __construct($arg) {
		parent::__construct($arg);
	}
	
}
?>