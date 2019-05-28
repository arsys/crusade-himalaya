window.addEventListener("load", function(){ 
	let sideC = document.getElementById("datePrice--wrapper");
	let paral = document.getElementById("similarTours");
	let footer = document.getElementById("footer");
	// let tab = document.getElementById("tab-wrapper");

	window.addEventListener("scroll", function() {
		if(paral.getBoundingClientRect().top - window.innerHeight <= 0){
			$('#datePrice--wrapper').addClass("uk-animation-slide-top-medium uk-animation-reverse");
		} else {
			$('#datePrice--wrapper').removeClass("uk-animation-slide-top-medium uk-animation-reverse").addClass("uk-animation-slide-top-small")
		}
	});
	window.addEventListener("scroll", function() {
		if(paral.getBoundingClientRect().top - window.innerHeight <= 0){
			$('#tab-wrapper').fadeOut();
		} else {
			$('#tab-wrapper').fadeIn();
		}
	});	
});
$(function() {
//Navbar animation  (Show on scroll down)

    $(window).scroll(function () {
       if ($(this).scrollTop() > 200) {
        $("#nav-wrapper").addClass("uk-animation-slide-top-medium uk-animation-reverse");
    } else {
        $("#nav-wrapper").removeClass("uk-animation-slide-top-medium uk-animation-reverse").addClass("uk-animation-slide-top-small");
        
    }
});

});