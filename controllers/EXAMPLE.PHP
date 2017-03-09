<?php 
class EXAMPLEController{
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		require_once(PATH_MODELS . "Db.php");
		
		$marques = Db::getInstance()->getMakes();
		
		echo '<pre>';
		print_r($marques);
		echo '</pre>';
		
	}

}
?>