<?php 
class HomeController{
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		require_once(PATH_MODELS . 'ConnectDB.php');
		$listeVehicules = getVehiclesNames();
		
		# Un contrôleur se termine en écrivant une vue
		
		require_once(PATH_VIEWS . 'home.php');
		
	}
	
}
?>