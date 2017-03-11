// CREATE SELECTS USING SELECTIZE //

var $selects = $('.selectizeSelects').selectize({
	          create: true,
	          valueField: 'value',
			  labelField: 'value',
			  searchField: 'value'

});

// OBJECTS FOR EACH CarSelector //

var carSelectors = [];

var makeSelects = [];
var modelSelects = [];
var generationSelects = [];
var descriptionSelects = [];

   		
// Boucle sur les selects trouvés et place dans les bons tableaux //
		
$.each($selects, function( index, value ) {
	if ($selects[index].id == 'makeSelect') {
  		makeSelects.push(this['selectize']);
	} else if ($selects[index].id == 'modelSelect') {
		modelSelects.push(this['selectize']);
	} else if ($selects[index].id == 'generationSelect') {
		generationSelects.push(this['selectize']);
	} else if ($selects[index].id == 'descriptionSelect') {
		descriptionSelects.push(this['selectize']);
	}
});


// Boucle sur le tableau d'un des selects et crée un objet CarSelector qui contient 4 attributs make, model, gen, description

if ((makeSelects.length != modelSelects.length) || (modelSelects.length != generationSelects.length) || (generationSelects.length != descriptionSelects.length)) {
	console.err("Pas le même nombre des selectes Make, Model, Generation et Description, les zones CarSelector sont invalides !!!")
}

makeSelects.forEach(createCarSelectors);

function createCarSelectors(value, index) {
	var carSelector = {
				make:makeSelects[index],
				model:modelSelects[index],
				generation:generationSelects[index],
				description:descriptionSelects[index],
	};
	
	carSelectors.push(carSelector);
}

// On parcourt tous les carSelectors et on assigne à chacun des attributs un listener

carSelectors.forEach(function(carSelector) {
	carSelector.make.on("change", function() {
		
		var valeur = carSelector.make.getValue();
		
		if (valeur == "" || valeur == "null" || valeur == "Marque" || valeur.charAt(0) == '>') {
			return false;
		}
		
		console.log("Make changed");
		makeChanged(carSelector);
	});
	
	carSelector.model.on("change", function() {
		
		var valeur = carSelector.model.getValue();
		
		if (valeur == "" || valeur == "null" || valeur == "Modèle" || valeur.charAt(0) == '>') {
			return false;
		}
		console.log("Model changed");
		modelChanged(carSelector);
	});
	
	carSelector.generation.on("change", function() {
		
		var valeur = carSelector.generation.getValue();
		
		if (valeur == "" || valeur == "null" || valeur == "Génération" || valeur.charAt(0) == '>') {
			return false;
		}
		console.log("Generation changed");
		generationChanged(carSelector);
	});
	
	carSelector.description.on("change", function() {
		
		var valeur = carSelector.description.getValue();
		
		if (valeur == "" || valeur == "null" || valeur == "Motorisation" || valeur.charAt(0) == '>') {
			return false;
		}
		descriptionChanged(carSelector);
	});
	
});

// Fonctions qui réagissent aux listeners avec comme paramètre le carSelector depuis lequel ils sont appelés

function makeChanged(carSelector) {
	var makeSelected = carSelector.make.getValue();
	getDatas(carSelector, makeSelected);
}

function modelChanged(carSelector) {
	var makeSelected = carSelector.make.getValue();
	var modelSelected = carSelector.model.getValue();
	getDatas(carSelector, makeSelected, modelSelected);
}

function generationChanged(carSelector) {
	var makeSelected = carSelector.make.getValue();
	var modelSelected = carSelector.model.getValue();
	var generationSelected = carSelector.generation.getValue();
	getDatas(carSelector, makeSelected, modelSelected, generationSelected);
	showDescriptions(carSelector);
}

function descriptionChanged(carSelector) {
	var description = carSelector.description.getValue();
	description = description.replace(" ", "_");
	window.location.href = "index.php?page=boitier_additionnel&description="+description;
}


// Fonctions AJAX

function getDatas(carSelector, make='null', model='null', generation='null') {
	
	if (make.charAt(0) == '>') { make = make.substring(2) }
	if (model.charAt(0) == '>') { model = model.substring(2) }
	if (generation.charAt(0) == '>') { generation = generation.substring(2) }
	
	console.log("Requete AJAX paramètres :")
	console.log("Marque = " + make);
	console.log("Modèle = " + model);
	console.log("Genera = " + generation);
	var refreshedList = $.ajax({
		            url: 'index.php?page=vehicleSelect',
		            type: 'GET',
		            dataType: 'text',
		            data: {
			            make: make,
			            model: model,
			            generation: generation
		            },
		            error: function() {
			            console.log("erreur récup AJAX");
		            },
		            success: function() {
			            console.log("success récup AJAX");
			            updateSelects(refreshedList, carSelector, make, model, generation);
		            }
	});
	
}

function updateSelects(refreshedList, carSelector, makeSelected, modelSelected, generationSelected) {

	var objectFromJSON = JSON.parse(refreshedList.responseText);
	var makeList = objectFromJSON[0];
	var modelList = objectFromJSON[1];
	var generationList = objectFromJSON[2];
	var descriptionList = objectFromJSON[3];
	carSelector.make.clearOptions();
	carSelector.make.addOption(makeList);
	if (makeSelected != 'null') {
		carSelector.make.addOption({value : "> " + makeSelected});
		carSelector.make.setValue("> " + makeSelected);
	}
	
	carSelector.model.clearOptions();
	carSelector.model.addOption(modelList);
	if (modelSelected != 'null') {
		carSelector.model.addOption({value : "> " + modelSelected});
		carSelector.model.setValue("> " + modelSelected);
	}
	
	carSelector.generation.clearOptions();
	carSelector.generation.addOption(generationList);
	if (generationSelected != 'null') {
		carSelector.generation.addOption({value : "> " + generationSelected});
		carSelector.generation.setValue("> " + generationSelected);
	}
	

	carSelector.description.clearOptions();
	carSelector.description.addOption(descriptionList);
	if (generationSelected != 'null') {
		carSelector.generation.addOption({value : "> " + generationSelected});
		carSelector.generation.setValue("> " + generationSelected);
	}

}

carSelectors.forEach(function(carSelector) {

	getDatas(carSelector);
	
});

function showDescriptions(carSelector) {
	carSelector.make.style="display:none;"
}

setTimeout(function(){ showPlaceholders() }, 1000);

function showPlaceholders() {
	carSelectors.forEach(function(carSelector) {

			carSelector.make.addOption("Marque");
			carSelector.make.setValue("Marque");
			
			carSelector.model.addOption("Modèle");
			carSelector.model.setValue("Modèle");
			
			carSelector.generation.addOption("Génération");
			carSelector.generation.setValue("Génération");
			
			carSelector.description.addOption("Motorisationyyy");
			carSelector.description.setValue("Motorisation");
	
	});	
	
}