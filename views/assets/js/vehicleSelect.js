// CREATE SELECTS USING SELECTIZE //

var $selects = $('.selectizeSelects').selectize({
	          create: false,
	          valueField: 'make',
			  labelField: 'make',
			  searchField: 'make',
			  sortField: 'make'
});

console.log($selects);
   		
// DEFINES REFERENCES FOR EACH SELECT //
		
makeSelectTop = $selects[0].selectize;
modelSelectTop = $selects[1].selectize;
generationSelectTop = $selects[2].selectize;
descriptionSelectTop = $selects[3].selectize;

makeSelectBottom = $selects[4].selectize;
modelSelectBottom = $selects[5].selectize;
generationSelectBottom = $selects[6].selectize;
descriptionSelectBottom = $selects[7].selectize;


// LISTENERS

var listenerMakeSelectTop = function() {
	
	console.log("Marque selectionnée, update modeleSelect");
	getData(modelSelectTop);
	
}

makeSelectTop.on('change', listenerMakeSelectTop);


var listenerModelSelectTop = function() {

	if (modelSelectTop.getValue() != "") {
		console.log("Modèle selectionné, update generationSelect");
		getData(generationSelectTop);
	}
}

modelSelectTop.on('change', listenerModelSelectTop);


// FUNCTIONS

function disable(select) {
	
	select.clearOptions();
	select.addOption({value:"Sélectionnez à gauche"});
	select.disable();
	
}

function getData(select) {
	
	var make = makeSelectTop.getValue();
	var model = modelSelectTop.getValue();
	var generation = generationSelectTop.getValue();
	
	var refreshedList = $.ajax({
		            url: 'index.php?page=vehicleSelect',
		            type: 'GET',
		            dataType: 'text',
		            data: {
			            make: 'Marque',
			            model: 'Modèle',
			            generation: 'Génération',
			            description: 'Motorisation'
		            },
		            error: function() {
			            console.log("erreur");
		            },
		            success: function() {
			            console.log("success, let's update data");
			            setData(select, refreshedList);
			            console.log("opération lancée");
		            }
	});
	
}

function setData(select, refreshedList) {
	console.log(JSON.parse(refreshedList.responseText));
	console.log("données mises à jour");
	select.clearOptions();
	select.addOption(JSON.parse(refreshedList.responseText));
	
}


getData(makeSelectTop);