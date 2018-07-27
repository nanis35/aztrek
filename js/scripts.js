$(document).ready(function () {

    // Menu Burger

    $(".burger").sidr({
        name: "respNav",
        source: ".main-nav",
        displace: false,
    });

    $(document).on("click", function () {
        $.sidr('close', 'respNav');
    });

    // Carousel

    // $(".owl-carousel").owlCarousel({
    //     items: 1,
    //     loop: true,
    //     nav: true,
    //     navtext: ['Précédent', 'Suivant'],
    //     dots:true,
    //     autoplay: true,
    //     autoplaySpeed: 700,
    //     autoplayHoverPause: true,
    // });

    $(".owl-carousel").owlCarousel({
        items: 3,
        nav: true,
        loop: true,
        margin: 0,
        nav: true,
        navtext: ('Précédent', 'Suivant'),
        dots: false,
        autoplay: false,
        autoplaySpeed: 700,
        autoplayHoverPause: true,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }

    });

});