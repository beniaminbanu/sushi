$(document).ready(function () {

    $('header .option ul li:first a').addClass('active-page');
    $('.burger-menu li:first a').addClass('active-page');

//ourValue
    $('.owl-our-value').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items: 1
            },
            576:{
                items: 2
            },
            768: {
                items: 3
            }
        }
    })

//hireUs
    $('.owl-hire').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items: 1
            },
            576:{
                items: 2
            },
            768: {
                items: 3
            }
        }
    })
})