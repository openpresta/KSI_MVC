<?php
	 
class NotFoundController {
	
	public function __construct() {
	
	}
			
	public function run(){	
				
		require_once(PATH_VIEWS . 'notFound.php');
		
	}
	
}
?>