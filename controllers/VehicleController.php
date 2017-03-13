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
		
			$make = $vehicle->getMake();
			$model = $vehicle->getModel();
			$generation = $vehicle->getGeneration();
			$description = $vehicle->getProductDesc();
			$year = $vehicle->getYear();
			$volume = $vehicle->getVolume();
			$motorCode = $vehicle->getMotorCode();
			$tuv = $vehicle->getTuv();
			$kwOri = $vehicle->getKwOri();
			$kwTun = $vehicle->getKwTun();
			$nmOri = $vehicle->getNmOri();
			$nmTun = $vehicle->getNmTun();
			$hpOri = $vehicle->getHpOri();
			$hpTun = $vehicle->getHpTun();
			$sbPrice = $vehicle->getSbPrice();
			$cableSet = $vehicle->getCableSet();
			
			$hpDiff = $vehicle->getHpDiff();
			$nmDiff = $vehicle->getNmDiff();
		
			$hpProcentOri = $vehicle->getHpProcentOri() - 8;
			$nmProcentOri = $vehicle->getNmProcentOri() - 8;
			
			
			if ($generation != "") {
				$modelDetailed = $model . "(" . $generation . ")";
			} else {
				$modelDetailed = $model;
			}
			
			$make_url = str_replace(" ", "_", $make);
		
			require_once(PATH_VIEWS . 'vehicle.php');
			
		} else { 
			
			echo "Aucun véhicule passé en paramètre.";
		
		}
		
	}
	
}
?>