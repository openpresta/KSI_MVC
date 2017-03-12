<?php
	
class VehicleSelectController
{
    
    public function __construct()
    {
        
    }
    
    public function run()
    {
    	require_once(PATH_MODELS . "Db.php");
    	
    	$make = $_GET['make'];
    	$model = $_GET['model'];
    	$generation = $_GET['generation'];
    	
    	$return = array();
		
		if ($make == "null" & $model == "null" & $generation == "null") {
			
			// Tout est "null", on doit retourner la liste des marques
			$makeList = Db::getInstance()->getMakes();
			$makeArray = array();
			$makeArray[] = array("value" => "Marque");
			
			foreach ($makeList as $value) 
				$makeArray[] = array("value" => $value->make);
			
			$return[] = $makeArray;
			$return[] = array("value" => "Modèle");
			$return[] = array("value" => "Génération");
			$return[] = array("value" => "Motorisation");
			
		}
		
		if ($make != "null" & $model == "null" & $generation == "null") {
			
			// La marque est séléctionnée, on doit retourner la liste des marques et les modèles
			
			$makeList = Db::getInstance()->getMakes();
			$makeArray = array();
			$makeArray[] = array("value" => "Marque");
			
			foreach ($makeList as $value) 
				$makeArray[] = array("value" => $value->make);
			
			$return[] = $makeArray;
			
			
			$modelList = Db::getInstance()->getModels($make);
			$modelArray = array();
			
			foreach ($modelList as $value) 
				$modelArray[] = array("value" => $value->model);
			
			$return[] = $modelArray;
			
			$return[] = array("value" => "Génération");
			$return[] = array("value" => "Motorisation");
			
			
		}
		
		if ($make != "null" & $model != "null" & $generation == "null") {
			
			// La marque et le modèle sont sélectionnés, on retourne les marques, modèles, générations disponibles			
		
			$makeList = Db::getInstance()->getMakes();
			$makeArray = array();
			$makeArray[] = array("value" => "Marque");
			
			foreach ($makeList as $value) 
				$makeArray[] = array("value" => $value->make);
			
			$return[] = $makeArray;
			
			
			$modelList = Db::getInstance()->getModels($make);
			$modelArray = array();
			
			foreach ($modelList as $value) 
				$modelArray[] = array("value" => $value->model);
			
			$return[] = $modelArray;
			
			
			$generationList = Db::getInstance()->getGenerations($make, $model);
			$generationArray = array();
			
			foreach ($generationList as $value) 
				$generationArray[] = array("value" => $value->generation);
			
			if ($generationArray[0]['value'] == "") {
				$generationArray[0]['value'] = "Toutes";
			}
			
			$return[] = $generationArray;
			
			
			$return[] = array("value" => "Motorisations");
			
		}
     
		if ($make != "null" & $model != "null" & $generation != "null") {
			
			// Tout est sélectionné, on retourne toutes les options + spécifique motorisations
			
			if ($generation == "Toutes") { $generation = ""; }
			
			$makeList = Db::getInstance()->getMakes();
			$makeArray = array();
			$makeArray[] = array("value" => "Marque");
			
			foreach ($makeList as $value) 
				$makeArray[] = array("value" => $value->make);
			
			$return[] = $makeArray;
			
			
			$modelList = Db::getInstance()->getModels($make);
			$modelArray = array();
			
			foreach ($modelList as $value) 
				$modelArray[] = array("value" => $value->model);
			
			$return[] = $modelArray;
			
			
			$generationList = Db::getInstance()->getGenerations($make, $model);
			$generationArray = array();
			
			foreach ($generationList as $value) 
				$generationArray[] = array("value" => $value->generation);
			
			if ($generationArray[0]['value'] == "") {
				$generationArray[0]['value'] = "Toutes";
			}
			
			$return[] = $generationArray;			
			
			$descriptionList = Db::getInstance()->getDescriptions($make, $model, $generation);
			$descriptionArray = array();
			
			foreach ($descriptionList as $value) 
				$descriptionArray[] = array("value" => $value->productDesc);
			
			$return[] = $descriptionArray;
			
			
			
		}
		/*
		echo '<pre>';
		print_r($return);
		echo '</pre>';
		*/
		
		$data = json_encode((array)$return);
        echo $data;
		
    }
    
}
?>