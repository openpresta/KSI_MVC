<?php
	
class VehicleSelectController
{
    
    public function __construct()
    {
        
    }
    
    public function run()
    {
     
    // REFACTOR DU CODE POUR EVITER LA STRUCTURE EN PYRAMIDE
	// PEU CLAIR LORSQUE L'ON ARRIVE AUX ELSE
	// ESSAYER DE CONSERVER DES INSTRUCTIONS PROCHES DES CONDITIONS PUR CLARIFIER
     
        require_once(PATH_MODELS . 'Db.php');
        
        if ($_GET['make']!="Marque") {
            // Si la marque a déjà été spécifiée, sinon getMakes()
            
            if ($_GET['model']!="Modèle") {
                // Si la modèle (+marque) ont été spécifiées, sinon getModels()
                
                if ($_GET['generation']!="Génération") {
                    // Si la génération (+modèle, + marque) ont été spécifiés, sinon getGenerations()
                    
                    $output = Db::getInstance()->getDescriptions($_GET['make'], $_GET['model'], $_GET['generation']);
                    
                } else {
                    
                    $output = Db::getInstance()->getGenerations($_GET['make'], $_GET['model']);
                }  
                
            } else {
                
                $output = Db::getInstance()->getModels($_GET['make']);
            }
            
        } else {
            
            $output = Db::getInstance()->getMakes();
        }
        
        $data = json_encode((array)$output);
        echo $data;
		
    }
    
}
?>