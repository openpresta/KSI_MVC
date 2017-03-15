<?php
	
class Db {
	
	private static $instance = null;
	
	private $_db;
	
	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new Db();
		}
		return self::$instance; 
	}

	private function __construct() {
		try {
			$this->_db = new PDO('mysql:host=localhost;dbname=products;charset=utf8','root','root');
			$this->_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		}
		catch (PDOException $e) {
			die('Erreur de connexion à la base de données : ' . $e->getMessage());
		}
	}
	
	
	function getMakes() {
		
		$req = $this->_db->query('SELECT DISTINCT make FROM tuningbox ORDER BY make');
		$req->execute();
		
		$retour = $req->fetchAll();
			
		return $retour;
		
	}
	
	function getModels($make) {
	
		$req = $this->_db->prepare('SELECT DISTINCT model FROM tuningbox WHERE make = ? ORDER BY model');
		$req->execute(array($make));
	
		$retour = $req->fetchAll();
			
		return $retour;
		
	}
	
	function getGenerations($make, $model) {

		$req = $this->_db->prepare('SELECT DISTINCT generation FROM tuningbox WHERE make = ? AND model = ?');
		$req->execute(array($make, $model));
		
		$retour = $req->fetchAll();
			
		return $retour;
		
	}
	
	
	function getDescriptions($make, $model, $generation) {
	
		$req = $this->_db->prepare('SELECT DISTINCT productDesc FROM tuningbox WHERE make = ? AND model = ? AND generation = ?');
		$req->execute(array($make, $model, $generation));
	
		$retour = $req->fetchAll();
			
		return $retour;
		
	}
	
	function getAllData($description) {
		
		$req = $this->_db->prepare('SELECT * FROM tuningbox WHERE productDesc = ?');
		$req->execute(array($description));
	
		$retour = $req->fetch();
		return $retour;
		
	}
	
	function isValidDescription($description) {
		
		$req = $this->_db->prepare('SELECT make FROM tuningbox WHERE productDesc = ?');
		$req->execute(array($description));
	
		$retour = $req->fetch();
		
		if ($retour != "") return true;
		
		return false;
				
	}

}