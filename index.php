<?php
	
	error_reporting(-1);
	ini_set('display_errors', 'On');

	// GLOBAL VARS FOR MVC PATHS
		
	define("PATH_CONTROLLERS", "controllers/");
	define("PATH_VIEWS", "views/");
	define("PATH_MODELS", "models/");
	
	
	// GLOBAL VARS FOR ASSETS, PICS, JS, CSS, ...

	define("PATH_ASSETS", PATH_VIEWS . "assets/");
	define("PATH_CSS", PATH_ASSETS . "css/");
	define("PATH_PICS", PATH_ASSETS . "pics/");
	define("PATH_IMAGES", PATH_ASSETS . "images/");
	define("PATH_FONTS", PATH_ASSETS . "fonts/");
	define("PATH_FORM", PATH_ASSETS . "form/");
	define("PATH_JS", PATH_ASSETS . "js/");
	define("PATH_MAKES_COVER", PATH_ASSETS . "makes/");
	
	
	// GLOBAL VARS FOR LINKS
	
	define("ROOT_FOLDER", "KSI_GITHUB/");
	
	define("PEDALBOX_URL", "pedalbox.html");
	define("POWERBOX_URL", "boitier-additionnel.html");
	define("FAQ_URL", "faq.html");
	define("CONTACT_URL", "contact.html");
	define("CGV_URL", "conditions-generales-vente.html");
	define("CONFID_URL", "politique-confidentialite.html");
	define("RESELLER_URL", "revendeur.html");
	define("ORDER_URL", "commander-");
	define("NOT_FOUND_URL", "page-introuvable.html");
	
	
	function chargerClasse($classe) {
		require_once(PATH_MODELS . $classe . '.class.php');
	}
	
	spl_autoload_register('chargerClasse');
	
	
	$page = 'powerbox';
	
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	
	switch ($page) {
	
		case 'powerbox':
			require_once(PATH_CONTROLLERS . "PowerboxController.php");
			$controller = new PowerboxController();
			break;
			
		case 'pedalbox':
			require_once(PATH_CONTROLLERS . "PedalboxController.php");
			$controller = new PedalboxController();
			break;
			
		case 'faq':
			require_once(PATH_CONTROLLERS . "FAQController.php");
			$controller = new FAQController();
			break;
			
		case 'contact':
			require_once(PATH_CONTROLLERS . "ContactController.php");
			$controller = new ContactController();
			break;
			
		case 'order':
			require_once(PATH_CONTROLLERS . "OrderController.php");
			$controller = new OrderController();
			break;
			
		case 'not_found':
			require_once(PATH_CONTROLLERS . "notFoundController.php");
			$controller = new notFoundController();
			break;
		
		case 'vehicle':
			require_once(PATH_CONTROLLERS . "VehicleController.php");
			$controller = new VehicleController();
			break;
			
		case 'vehicleSelect':
			require_once(PATH_CONTROLLERS . "VehicleSelectController.php");
			$controller = new VehicleSelectController();
			break;
			
	}
	
	$controller->run();
	
?>