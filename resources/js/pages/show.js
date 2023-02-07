$(document).ready(function () {
    
    var $sync1 = $(".big-images"),
        $sync2 = $(".thumbs"),
        flag = false,
        duration = 300;
 
    $sync1
        .owlCarousel({
            items: 1,
            margin: 10,
            nav: true,
            navText: ["<img src='img/left-arrow1.png'>", "<img src='img/right-arrow1.png'>"],
            responsive:{
                0:{
                    items: 1,
                    dots: true
                },
                992:{
                    items:1,
                    dots: false
                }
            }
        })
        .on('changed.owl.carousel', function (e) {
            if (!flag) {
                flag = true;
                $sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                flag = false;
            }
            let currentIndex = $('.big-images .owl-item.active').children().data('index');
        });
 
    $sync2
        .owlCarousel({
            margin: 20,
            items: 3,
            nav: false,
            center: true,
            dots: false
        })
        .on('click', '.owl-item', function () {
            $sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
 
        })
        .on('changed.owl.carousel', function (e) {
            if (!flag) {
                flag = true;        
                $sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
                flag = false;
            }
        });

})