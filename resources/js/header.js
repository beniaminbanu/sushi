$(document).ready(function () {
    $('.language span').click(function () {
        $(this).addClass('active-language');
        $(this).siblings().removeClass('active-language');
    })

    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('header').addClass('scroll');
        }
        else {
            $('header').removeClass('scroll');
        }
    });

    $('.open-menu').click(function () {
        $(this).toggleClass('close-menu');
        $('.burger-menu').toggleClass('burger-menu-active');
    })
});