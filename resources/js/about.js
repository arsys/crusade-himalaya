window.addEventListener("load", function(){ 
	console.log('loaded');
	let footer = document.getElementById("footer");

	window.addEventListener("scroll", function() {
		console.log('scroll');
		if(footer.getBoundingClientRect().top - window.innerHeight <= 0){
			$('#sticky-menu').addClass("uk-animation-slide-top-medium uk-animation-reverse");
		} else {
			$('#sticky-menu').removeClass("uk-animation-slide-top-medium uk-animation-reverse").addClass("uk-animation-slide-top-small")
		}
	});
});