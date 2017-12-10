jQuery(document).ready(function($) {

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var scrollPos = $(document).scrollTop();

    $(".js-owl").owlCarousel({
        items: 1,
        dots : true,
        loop : true,
        autoplay : true,
        autoplayTimeout : 4000,
        autoplaySpeed : 600,
        navSpeed : 600
    })

});
