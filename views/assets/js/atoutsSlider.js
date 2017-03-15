jQuery(document).ready(function($) {
	$('#slider_atouts').unslider({
		arrows: false
	});
});

function slideTo(n) {
	$('#slider_atouts').unslider('animate:' + n);
	$('#slider_atouts_icones > div > div').removeClass('selected');
	$('#slider_atouts_icones > div:nth-child(' + (n+1) + ') > div').addClass('selected');
	debut++;
}
