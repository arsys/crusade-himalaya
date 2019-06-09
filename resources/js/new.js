import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';
// loads the Icon plugin
UIkit.use(Icons);

$(function() {
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
});