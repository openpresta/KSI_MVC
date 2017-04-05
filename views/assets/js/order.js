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

		updateRecap(element.currentTarget.id);

	});
});


function updateRecap(choice) {
	showLinesRecap(choice);
	updateTotal(choice);
	updateTVA(choice);
    updatePaypal()
}

function showLinesRecap(choice) {
	console.log(choice);
	if (choice === 'both') {
		$("#powerBoxLine").css("display", "table-row");
		$("#pedalBoxLine").css("display", "table-row");
	} else if (choice === 'powerbox') {
		$("#powerBoxLine").css("display", "table-row");
		$("#pedalBoxLine").css("display", "none");
	} else {
		$("#powerBoxLine").css("display", "none");
		$("#pedalBoxLine").css("display", "table-row");
	}

}

function updateTotal(choice) {
	if (choice === 'both') {
		$("#grandtotal").text("€ " + bothPrice);
	} else if (choice === 'powerbox') {
		$("#grandtotal").text("€ " + powerBoxPrice);
	} else {
		$("#grandtotal").text("€ " + pedalBoxPrice);
	}
}

function updateTVA(choice) {
	if (choice === 'both') {
		$("#tva").text("€ " + (bothPrice - (bothPrice/(1.21))).toFixed(2));
	} else if (choice === 'powerbox') {
		$("#tva").text("€ " + (powerBoxPrice - (powerBoxPrice/(1.21))).toFixed(2));
	} else {
		$("#tva").text("€ " + (pedalBoxPrice - (pedalBoxPrice/(1.21))).toFixed(2));
	}

}
function updatePaypal(choice) {
        var productSelect=$('#selectedProduct').val();
        $('#item_description').val($('#'+productSelect).find('.productLabel').text());
        $('#item_amount').val($('#'+productSelect).find('.priceProd').val());
}