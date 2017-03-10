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
			$stdObj = Db::getInstance()->getMakes();
			$arrayFromStd = array();
			
			foreach ($stdObj as $value) 
				$arrayFromStd[] = json_encode($value->make);
			
			$return[] = json_encode($arrayFromStd);
			$return[] = array("value" => "Modèles");
			$return[] = array("value" => "Génération");
			$return[] = array("value" => "Motorisations");
			
		}
		
		if ($make != "null" & $model == "null" & $generation == "null") {
			
			// La marque est séléctionnée, on doit retourner la liste des marques et les modèles
			
			
		}
		
		if ($make != "null" & $model != "null" & $generation == "null") {
			
			// La marque et le modèle sont sélectionnés, on retourne les marques, modèles, générations disponibles			
			
		}
     
		if ($make != "null" & $model != "null" & $generation != "null") {
			
			// Tout est sélectionné, on retourne toutes les options + spécifique motorisations
			
			
		}
		echo '<pre>';
		print_r($return);
		echo '</pre>';
		
		$data = json_encode((array)$return);
        echo $data;
		
    }
    
}
?>