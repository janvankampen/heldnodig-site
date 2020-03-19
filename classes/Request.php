<?php

class Request extends Request_generated
{

	function __construct($arg) {
		parent::__construct($arg);
	}
	
	public function checkAmountOfOffers(){
		$query = "SELECT * FROM Offer WHERE RequestId=? AND ((IsVerifiedByMail=? AND IsAccepted IS NULL) OR (IsAccepted=?))";
		$stmt = $GLOBALS['database']->prepare($query);
		$stmt->bind_param("iii", $request->getId(),1,1);
		$stmt->execute();
		$result = $stmt->get_result();
		$amountOfOffers = $result->num_rows;
		$stmt->close();
		
		if($amountOfOffers>=$this->getMaxAmountOfOffers()){
			$this->setIsActive(0);
		}
	}
	
}
