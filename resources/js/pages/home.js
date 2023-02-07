$(document).ready(function () {

//Hero
    $('.owl-hero').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        smartSpeed: 450,
        onInitialized  : counter,
        onTranslated : counter
    })

    let total = $('.owl-hero .owl-item').not('.cloned').length;
    $('.counter-hero .total').html(total < 10 ? `0${total}` : `${total}`);
    $('.counter-hero .current').html('01');

    function counter() {
        let current = $('.owl-hero .owl-item.active').children().data('index') + 1;
        $('.counter-hero .current').html(current < 10 ? `0${current}` : `${current}`);
    }

//OurProject
    $('.owl-projects').owlCarousel({
        loop: true,
        center: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: false,
        margin: 40,
        responsive: {
            992: {
                items: 2,
            },
            0: {
                items: 1,
            }
        }

    })

//HireUs
    $('.owl-hire').owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            992: {
                margin: 50,
                items: 2
            },
            1600: {
                margin: 110,
                items: 2
            }
        },

    });
    
})