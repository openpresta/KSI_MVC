<?php
	
function getMakes() {
	
	
	$bdd = new PDO('mysql:host=localhost:8889;dbname=products;charset=utf8', 'root', 'root');
	$req = $bdd->query('SELECT DISTINCT make FROM tuningbox ORDER BY make');
	$req->execute();
	
	$retour = $req->fetchAll();
		
	return $retour;
	
}

function getModels($make) {

	$bdd = new PDO('mysql:host=localhost:8889;dbname=products;charset=utf8', 'root', 'root');
	
	$req = $bdd->prepare('SELECT DISTINCT model FROM tuningbox WHERE make = ? ORDER BY model');
	$req->execute(array($make));

	$retour = $req->fetchAll();
		
	return $retour;
	
}

function getGenerations($make, $model) {
	
	$bdd = new PDO('mysql:host=localhost:8889;dbname=products;charset=utf8', 'root', 'root');
	
	$req = $bdd->prepare('SELECT DISTINCT generation FROM tuningbox WHERE make = ? AND model = ?');
	$req->execute(array($make, $model));
	
	$retour = $req->fetchAll();
		
	return $retour;
	
}


function getDescriptions($make, $model, $generation) {

	$bdd = new PDO('mysql:host=localhost:8889;dbname=products;charset=utf8', 'root', 'root');

	$req = $bdd->prepare('SELECT DISTINCT productDesc FROM tuningbox WHERE make = ? AND model = ? AND generation = ?');
	$req->execute(array($make, $model, $generation));

	$retour = $req->fetchAll();
		
	return $retour;
	
}

function getAllData($description) {
	
	$bdd = new PDO('mysql:host=localhost:8889;dbname=products;charset=utf8', 'root', 'root');

	$req = $bdd->prepare('SELECT * FROM tuningbox WHERE productDesc = ?');
	$req->execute(array($description));

	$retour = $req->fetchAll();
		
	return $retour;
	
}

?>