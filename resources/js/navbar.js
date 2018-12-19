(function ($) {
  $(document).ready(function(){
    // hide .parent first
    $("#nav-wrapper").hide();

    $(window).scroll(function () {
       if ($(this).scrollTop() > 400) {
        $("#nav-wrapper").addClass("animated fadeInDown").show();
    } else {
        $("#nav-wrapper").removeClass("animated fadeInDown");
        $("#nav-wrapper").slideUp(500,'linear');
    }
});

});
}(jQuery));