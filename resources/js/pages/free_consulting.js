const { css } = require("jquery");

$(document).ready(function () {
    
    $('header').addClass('header-hire-us');
    $('footer').addClass('footer-hire-us');

    $('.contact-input').keyup(function () {
        if ($(this).val()) {
            $(this).addClass('input-active');
        } else {
            $(this).removeClass('input-active');
        }
    })

    $('.open-menu').click(function () {
        
        if ($(window).width() > 991) {
            $('.burger-menu').hasClass('burger-menu-active') ? $('header').css('width', '100%') : $('header').css('width', '50%');
        }
    })

})