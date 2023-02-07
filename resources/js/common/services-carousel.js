$(document).ready(function(){
    $('.owl-hero-about').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        dots: true,
        responsive: {
            992: {
                items: 2
            },
            0: {
                items: 1
            }
        }
    })
})