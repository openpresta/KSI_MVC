<?php
	
class RaceModel {
	
	private $_vehicle1;
						
	private $_vehicle2;

	public function __construct($vehicle1, $vehicle2) {
		
		$this->_vehicle1 = $vehicle1;
		$this->_vehicle2 = $vehicle2;
		
	}
	
	public function race() {
		
		$resultats = array(
		    "first" => null,
		    "second" => null
		);
		
		if ($this->_vehicle1->getWeightPowerRatio() < $this->_vehicle2->getWeightPowerRatio()) {
			$resultats['first'] = $this->_vehicle1;
			$resultats['second'] = $this->_vehicle2;
		} else {
			$resultats['first'] = $this->_vehicle2;
			$resultats['second'] = $this->_vehicle1;
		}
		
		return $resultats;
		
	}

}	
	
	
?>