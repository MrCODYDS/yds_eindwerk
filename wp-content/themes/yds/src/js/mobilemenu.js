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

jQuery(document).ready(function($){
    $('.multiple-items').slick({
        dots:true,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 1,
        arrows: false,
        infinite: false
    });
});