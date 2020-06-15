//////////////////////
// Open mobile menu //
//////////////////////
jQuery(document).ready(function($){
    $('.c-hamburger').click(function () {
        const hamburger = document.querySelectorAll('.c-hamburger');
        hamburger.forEach(function(part, index) {
            part.classList.toggle('is-open');
        });
        $('body').toggleClass('is-open-sidebar');        
    });
});



//////////////////////////////////////////
// Login Form Placeholder & add classes //
//////////////////////////////////////////
jQuery(document).ready(function($){
    $('.login-username input').attr( 'placeholder', 'Email of gebruikersnaam' );
    $('.login-password input').attr( 'placeholder', 'Wachtwoord' );

    $('.login-submit').addClass('text-center mb-2');
});



/////////////////////////////////////
// Make fixed header on scrolldown //
/////////////////////////////////////
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



////////////////////////////////////////////////////
// Scroll to top when clicked on scrolltop button //
////////////////////////////////////////////////////
jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height >= 300) {
            $('#scrollTop').css({'opacity': 1, "display": "block"});
        } else {
            $('#scrollTop').css({'opacity': 0, "display": "block"});
        }
    });
    $(document).ready(function() {
        $("#scrollTop").click(function(event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
    });
});