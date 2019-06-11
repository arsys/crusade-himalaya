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

//Search Date Price
$('.search-wrapper').on('click', '#find-dates', function(a) {
	a.preventDefault();
	var t = $("#tour-id").val(),
	e = $("#travel-year").val(),
	o = $("#travel-month").val();

	$(".ajaxloader").show(), $.ajax({
		type: "GET",
		url: "/ajax/fetch-departures",
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
		},
		data: {
			tour_id: t,
			year: e,
			month: o
		},
		success: function(a) {
			$(".ajaxloadmoredeparture").html(a), $(".ajaxloader").hide()
		}
	})
});
//Post Quick Enquiry
$('#quick-enquiry').on('submit', function(e){
	e.preventDefault();
	$(".submit").prop("disabled", true);
	data = $(this).serialize();
	action = $(this).attr('action');
	$.ajax({
		type: 'POST',
		url: action,
		data: data,
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
		},
		success: function (data) {
			if($.isEmptyObject(data.error))
			{
				$("#response-msg").toggleClass('uk-alert-danger uk-alert-success');
				$("#quick-enquiry").trigger("reset");
				$('.print-error-msg').find('ul').empty();
				$('.print-error-msg').css('display','block');
				$('.print-error-msg').find('ul').append("<li>"+ data.success +"</li>");
				setTimeout(function() {
					$('.print-error-msg').fadeOut();
					$(".submit").prop("disabled", false);
				}, 3000);
			}
			else{
				printMessageErrors(data.error);
				$(".submit").prop("disabled", false);
				setTimeout(function() {					
					$('.print-error-msg').fadeOut();					
				}, 3000);
			}
		}
	});
});
//Print error message
function printMessageErrors(msg){
	$('.print-error-msg').find('ul').empty();
	$('.print-error-msg').css('display','block');
	$.each(msg,function(key,value){
		$('.print-error-msg').find('ul').append("<li>"+ value +"</li>");
	});
}
});