<?php
	
class VehicleSelectController
{
    
    public function __construct()
    {
        
    }
    
    public function run()
    {
     
        require_once(PATH_MODELS . 'Db.php');
        
        if ($_GET['make']!="Marque") {
            // Si la marque a déjà été spécifiée, sinon getMakes()
            
            if ($_GET['model']!="Modèle") {
                // Si la modèle (+marque) ont été spécifiées, sinon getModels()
                
                if ($_GET['generation']!="Génération") {
                    // Si la génération (+modèle, + marque) ont été spécifiés, sinon getGenerations()
                    
                    if ($_GET['description']!="Motorisation") {
                        // Si la motorisation a été séléctionnée, alors redirection page sinon getDescriptions() 
                        
                    } else {
                        
                        $output = getDescriptions($_GET['make'], $_GET['model'], $_GET['generation']);
                        
                    }
                    
                } else {
                    
                    $output = getGenerations($_GET['make'], $_GET['model']);
                    
                }  
                
            } else {
                
                $output = getModels($_GET['make']);
                
            }
            
        } else {
            
            $output = getMakes();
            
        }
        
        $jsobject = "";
		
		$jsobject .= "[";

        foreach ($output as $key => $value) {
	        $jsobject .= '{value:"' . $value[0] . '"},';
		}
		
		$jsobject=rtrim($jsobject,", ");
		
		$jsobject .= "]";
		
		echo $jsobject;
		
    }
    
}
?>