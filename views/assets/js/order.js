var both = $(".product#both");
var powerbox = $(".product#powerbox");
var pedalbox = $(".product#pedalbox");

var products = [both, powerbox, pedalbox];

products.forEach(function(element, index, array) {
	element.click(function(element) {
		both.removeClass("selected");
		powerbox.removeClass("selected");
		pedalbox.removeClass("selected");
		$("#" + element.currentTarget.id).addClass("selected");
		$("#selectedProduct").val(element.currentTarget.id);
		
		updateTotal(element.currentTarget.id);
		
	});
});


function updateTotal(choice) {
	
	if (choice = 'both') {
		
	} else if (choice = 'powerbox') {
		
	} else {
		
	}
	
	
}