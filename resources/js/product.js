window.addEventListener("load", function(){ 
	let sideC = document.getElementById("product-price");
	let paral = document.getElementById("related-tours");
	let footer = document.getElementById("foobar");
	// let tab = document.getElementById("tab-wrapper");

	window.addEventListener("scroll", function() {
		if(paral.getBoundingClientRect().top - window.innerHeight <= 0){
			$('#product-price').fadeOut();
		} else {
			$('#product-price').fadeIn();
		}
	});
	window.addEventListener("scroll", function() {
		if(footer.getBoundingClientRect().top - window.innerHeight <= 0){
			$('#tab-wrapper').fadeOut();
		} else {
			$('#tab-wrapper').fadeIn();
		}
	});	
});

(function ($) {
	$(document).ready(function(){		

		$(window).scroll(function () {
			if ($(this).scrollTop() > 150) {
				$("#nav-wrapper").removeClass("animated fadeInDown");
				$("#nav-wrapper").fadeOut(900,'linear');
				
			} else {
				$("#nav-wrapper").addClass("animated fadeIn").show();
			}
		});

		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
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
						$("#quick-enquiry").trigger("reset");
						$('.print-error-msg').find('ul').empty();
						$('.print-error-msg').css('display','block');
						$("#response-msg").toggleClass('uk-alert-danger uk-alert-success');
						$('.print-error-msg').find('ul').append("<li>"+ data.success +"</li>");
						setTimeout(function() {
							$('.print-error-msg').fadeOut();
							$(".submit").prop("disabled", false);
							UIkit.modal("#modal-quick-enquiry").hide();
						}, 3000);
					}
					else{
						printMessageErrors(data.error);
					}
				}
			});
		});
		function printMessageErrors(msg){
			$('.print-error-msg').find('ul').empty();
			$('.print-error-msg').css('display','block');
			$.each(msg,function(key,value){
				$('.print-error-msg').find('ul').append("<li>"+ value +"</li>");
			});
		}		

	});
}(jQuery));