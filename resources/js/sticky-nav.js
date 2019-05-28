$(function() {
//Navbar animation  (Show on scroll down)
    $("#nav-wrapper").hide();

    $(window).scroll(function () {
       if ($(this).scrollTop() > 400) {
        $("#nav-wrapper").addClass("uk-animation-slide-top-small").show();
    } else {
        $("#nav-wrapper").removeClass("animated fadeInDown");
        $("#nav-wrapper").slideUp(500,'linear');
        
    }
});

});