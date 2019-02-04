//homepage scroll ghost start
$(document).ready(function() {

    var scrollLink = $('.scroll');

      // Smooth scrolling
      scrollLink.click(function(e) {
        e.preventDefault();
        $('body,html').animate({
          scrollTop: $(this.hash).offset().top
      }, 1000 );
    });
  });
//homepage scroll ghost end
//back to top botton start

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
    $('#brochure-request').on('submit', function(e){
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
                    $('#brochure-request').fadeOut(1000);
                    $("#response-msg").toggleClass('uk-alert-danger uk-alert-success');
                    $("#brochure-request").trigger("reset");
                    // $("#response-msg").prop('uk-alert-danger ','uk-alert-success');
                    $('.print-error-msg').find('ul').empty();
                    $('.print-error-msg').css('display','block');
                    $('.print-error-msg').find('ul').append("<li>"+ data.success +"</li>");
                    setTimeout(function() {
                        $('.print-error-msg').fadeOut();                        
                        $(".submit").prop("disabled", false);
                        UIkit.modal('#modal-broucher').hide();
                    }, 3000);
                }
                else{
                    printMessageErrors(data.error);
                }
            }
        });
    });
});
//back to top botton end