jQuery(document).ready(function($) {
    //Scroll to top when clicked on button
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