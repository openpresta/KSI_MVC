// CREATE SELECTS USING SELECTIZE //

var $selects = $('.selectizeSelects').selectize({
	          create: false,
	          valueField: 'value',
			  labelField: 'value',
			  searchField: 'value',
			  sortField: 'value'
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
		makeChanged(carSelector);
	});
	
	carSelector.model.on("change", function() {
		modelChanged(carSelector);
	});
	
	carSelector.generation.on("change", function() {
		generationChanged(carSelector);
	});
	
	carSelector.description.on("change", function() {
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
}


// Fonctions AJAX

function getDatas(carSelector, make='null', model='null', generation='null') {
	console.log(make);
	console.log(model);
	console.log(generation);
	var refreshedList = $.ajax({
		            url: 'index.php?page=vehicleSelect',
		            type: 'GET',
		            dataType: 'text',
		            data: {
			            make: 'Marque',
			            model: 'null',
			            generation: 'null'
		            },
		            error: function() {
			            console.log("erreur");
		            },
		            success: function() {
			            updateSelects(refreshedList, carSelector, make, model, generation);
		            }
	});
	
}

function updateSelects(refreshedList, carSelector, makeSelected, modelSelected, generationSelected) {
	console.log("go update");
	console.log(refreshedList.responseText);
}