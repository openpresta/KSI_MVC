<?php
	 
class OrderController {
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		$articleID = $_GET['articleID'];
		
		$db = Db::getInstance();
		
		$isValid = $db->isValidArticleID($articleID);
		
		if ($isValid) {

			$description = $db->getProductDescFromProductID($articleID)->productDesc;
			
			$vehicle = new VehicleModel($description);
			$make = $vehicle->getMake();
			$model = $vehicle->getModel();
			$generation = $vehicle->getGeneration();
			$description = $vehicle->getProductDesc();
			$productID = $vehicle->getProductID();
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
			
			$powerBoxPrice = $vehicle->getPowerBoxPrice();
			$pedalBoxPrice = $vehicle->getPedalBoxPrice();
			
			$bothPrice = intval(($powerBoxPrice + $pedalBoxPrice)*0.9);
			$reducPrice = intval(($powerBoxPrice + $pedalBoxPrice)*0.1);
			
			$bothPriceTVA = round($bothPrice - ($bothPrice / 1.21), 2);
			
			$cableSet = $vehicle->getCableSet();
			
			$hpDiff = $vehicle->getHpDiff();
			$nmDiff = $vehicle->getNmDiff();
		
			$hpProcentOri = $vehicle->getHpProcentOri() - 8;
			$nmProcentOri = $vehicle->getNmProcentOri() - 8;
			
			require_once(PATH_VIEWS . 'order.php');

		}
		
		header('Location: ' . NOT_FOUND_URL);
		
	}
	
}
?>