! function(t) {
    "use strict";
    t(window).on("load", function() {
	    setTimeout(function() {
        t(".progress").each(function() {
            var i = t(this);
            i.visible(!0) && i.each(function() {
                var t = i.find(".progress-bar"),
                    n = i.find(".ct-progressBar-text"),
                    r = t.attr("aria-valuenow"),
                    puissance = i.find(".progressBarTextPuissance"),
                    couple = i.find(".progressBarTextCouple"),
                    puissanceValue = puissance.attr("aria-x-value"),
                    coupleValue = couple.attr("aria-x-value");                   
                // n.text(r + "%"), t.addClass("animating").css("width", r + "%")
                puissance.text(puissanceValue + "ch"), t.addClass("animating").css("width", r + "%");
                couple.text(coupleValue + "Nm"), t.addClass("animating").css("width", r + "%");
            })
        })
		}, 800);
    })
}(jQuery);