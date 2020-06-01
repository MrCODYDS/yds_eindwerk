// Open mobile menu
jQuery(document).ready(function($){
    $('.c-hamburger').click(function () {
        const hamburger = document.querySelectorAll('.c-hamburger');
        hamburger.forEach(function(part, index) {
            part.classList.toggle('is-open');
        });
        $('body').toggleClass('is-open-sidebar');        
    });
});