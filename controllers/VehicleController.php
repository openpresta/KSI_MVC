<?php 
class VehicleController {
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		require_once(PATH_MODELS . 'VehicleModel.class.php');
		
		if (isset($_GET['description'])) {
			
			$descriptionUnderlined = $_GET['description'];
			
			$descriptionClean = str_replace("_", " ", $descriptionUnderlined);			
			$vehicle = new VehicleModel($descriptionClean);
		
			// Le paramètre véhicule est envoyé séparé de _ pour l'URL, il faut que la Classe traite ces underscore
			// Pour obtenir des résultats cohérents dans la BDD
			// On créée le véhicule sur base de sa description
			//$vehicle = new Vehicle($_GET['description']);
		
			//require_once(PATH_VIEWS . 'vehicle.php');
			
		} else { 
			
			echo "Aucun véhicule passé en paramètre.";
		
		}
		
	}
	
}
?>