// Open mobile menu
jQuery(document).ready(function($){
    $('.c-hamburger').click(function () {
        $(this).toggleClass('is-open');
        $('body').toggleClass('is-open-sidebar');
    });
});
