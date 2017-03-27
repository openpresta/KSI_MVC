<?php 
class PedalBoxController{
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		$pedalBoxPrice = VehicleModel::getPedalBoxPrice();
		
		require_once(PATH_VIEWS . 'pedalbox.php');
		
	}
	
}
?>