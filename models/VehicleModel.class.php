<?php

require_once(PATH_MODELS . 'Db.php');

class VehicleModel {
		
	private $_make;
	private $_model;
	private $_generation;
	private $_productID;
	private $_productDesc;
	private $_year;
	private $_volume;
	private $_motorCode;
	private $_tuv;
	private $_kwOri;
	private $_kwTun;
	private $_nmOri;
	private $_nmTun;
	private $_hpOri;
	private $_hpTun;
	private $_sbPrice;
	private $_cableSet;
	private $_electronics;

	public function __construct($description) {
		
		$db = Db::getInstance();
		$vehicle = $db->getAllData($description);
		
		$this->_make =		$vehicle->make;
		$this->_model =		$vehicle->model;
		$this->_generation =$vehicle->generation;
		$this->_productID =	$vehicle->productID;
		$this->_productDesc=$vehicle->productDesc;
		$this->_year =		$vehicle->year;
		$this->_volume = 	$vehicle->volume;
		$this->_motorCode = $vehicle->motorCode;
		$this->_tuv = 		$vehicle->tuv;
		$this->_kwOri = 	$vehicle->kwOri;
		$this->_kwTun = 	$vehicle->kwTun;
		$this->_nmOri = 	$vehicle->nmOri;
		$this->_nmTun = 	$vehicle->nmTun+6;
		$this->_hpOri = 	$vehicle->hpOri;
		$this->_hpTun = 	$vehicle->hpTun+6;
		$this->_sbPrice = 	$vehicle->sbPrice;
		$this->_cableSet = 	$vehicle->cableSet;
		$this->_electronics=$vehicle->electronics;

	}
	
	/* 
		
		DEBUT DES FONCTIONS COMPLEXES
		
	*/
	
	
	public function getHpDiff() {
		return $this->_hpTun - $this->_hpOri;
	}
	
	public function getNmDiff() {
		return $this->_nmTun - $this->_nmOri;
	}

	public function getHpProcentOri() {
		return ($this->_hpOri / $this->_hpTun)*100;
	}
	
	public function getHpProcentTun() {
		return 100;
	}
	
	public function getNmProcentOri() {
		return ($this->_nmOri / $this->_nmTun)*100;
	}
	
	public function getNmProcentTun() {
		return 100;
	}

	
	/* 
		
		DEBUT DES GETTERS DE BASE
		
	*/
	
	public function getMake() {
		return $this->_make;
	}
	
	public function getModel() {
		return $this->_model;
	}
	
	public function getGeneration() {
		return $this->_generation;
	}
	
	public function getProductID() {
		return $this->_productID;
	}
	
	public function getProductDesc() {
		return $this->_productDesc;
	}
	
	public function getYear() {
		return $this->_year;
	}
	
	public function getVolume() {
		return $this->_volume;
	}

	public function getMotorCode() {
		return $this->_motorCode;
	}
	
	public function getTuv() {
		return $this->_tuv;
	}
	
	public function getKwOri() {
		return $this->_kwOri;
	}
	
	public function getKwTun() {
		return $this->_kwTun;
	}
	
	public function getNmOri() {
		return $this->_nmOri;
	}
	
	public function getNmTun() {
		return $this->_nmTun;
	}
	
	public function getHpOri() {
		return $this->_hpOri;
	}
	
	public function getHpTun() {
		return $this->_hpTun;
	}

	public function getSbPrice() {
		return $this->_sbPrice;
	}
	
	public function getCableSet() {
		return $this->_cableSet;
	}
	
	public function getElectronics() {
		return $this->_electronics;
	}
	
	

}					
						
						
?>