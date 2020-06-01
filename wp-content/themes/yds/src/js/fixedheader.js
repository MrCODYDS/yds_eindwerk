jQuery(document).ready(function($){
    // Calculate headerheight
    var headerHeight = $('.c-header').outerHeight();

    $(window).scroll(function(){
        if ($(window).scrollTop() >= 300) {
            $('.c-header').addClass('is-fixed');
            //Add headerheight to the div with class headerHeight that's in the header.php file
            $('.headerHeight').css('height', headerHeight);
        }
        else {
            $('.c-header').removeClass('is-fixed');
            //Remove headerheight to the div with class headerHeight that's in the header.php file
            $('.headerHeight').css('height', '0');
        }
    });
});