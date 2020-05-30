jQuery(document).ready(function($){
    $('.b-flex-items').slick({
        dots: true,
        centerMode: true,
        centerPadding: '160px',
        slidesToShow: 1,
        arrows: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 850,
                settings: {
                    centerPadding: '120px'
                }
            },
            {
                breakpoint: 800,
                settings: {
                    centerPadding: '100px'
                }
            },
            {
                breakpoint: 700,
                settings: {
                    centerPadding: '60px'
                }
            },
            {
                breakpoint: 500,
                settings: {
                    centerPadding: '40px'
                }
            }
        ]
    });
});