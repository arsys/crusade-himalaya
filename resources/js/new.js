import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';
window.moment = require('moment/moment');
// loads the Icon plugin
UIkit.use(Icons);

$(function() {
 var date = moment().format('M');

  //Homepage Scroll Down Button
  $('.scroll-down').click (function() {
    $('html, body').animate({scrollTop: $('section#scroll-end').offset().top }, 'slow');
    return false;
  });

  $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
          $('#toTop').fadeIn(); 
      } else { 
          $('#toTop').fadeOut(); 
      } 
  }); 
  $('#toTop').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 600); 
      return false; 
  }); 

  //Broucher
$("#requestBroucher").submit(function(e) {

  e.preventDefault(); // avoid to execute the actual submit of the form.

  let data = $(this).serialize();
	let action = $(this).attr('action');

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
            $('#requestBroucher').trigger("reset");
            $("#response-msg").toggleClass('uk-alert-danger uk-alert-success');
            $('.print-error-msg').find('ul').empty();
            $('.print-error-msg').css('display','block');
            $('.print-error-msg').find('ul').append("<li>"+ data.success +"</li>");
            setTimeout(function() {
              UIkit.modal('#request-broucher').hide();
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
// UIkit.tab('.event-month-list').toggle(date-1);
// UIkit.accordion('.event-list--sm').toggle(date-1, true);

});