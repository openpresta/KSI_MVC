<?php
	 
class NotFoundController {
	
	public function __construct() {
	
	}
			
	public function run(){	
		
		if (isset($_GET["redirect"]) && $_GET["redirect"] == true) {
			header("Location: page_introuvable.html");
		}
		
		require_once(PATH_VIEWS . 'notFound.php');
		
	}
	
}
?>