setInterval(function(){
  nextPositionBoxIndicator();
}, 2000);

function nextPositionBoxIndicator() {
	var element = $(".movingBoxIndicator");
	var image = $(".imageVoitures");
	if (element.hasClass("left")) {
		element.removeClass("left");
		element.addClass("center");
		image.attr("src", PATH_PICS + "carsSelectedCenter.png");
	} else if (element.hasClass("center")) {
		element.removeClass("center");
		element.addClass("right");
		image.attr("src", PATH_PICS + "carsSelectedRight.png");
	} else if (element.hasClass("right")) {
		element.removeClass("right");
		element.addClass("left");
		image.attr("src", PATH_PICS + "carsSelectedLeft.png");
	}
	
}
