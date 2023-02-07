$(document).ready(function () {

    $('header .option ul li:nth-child(3) a').addClass('active-page');
    $('.burger-menu li:nth-child(3) a').addClass('active-page');

    $('.contact-input').keyup(function () {
        if ($(this).val()) {
            $(this).addClass('input-active');
        } else {
            $(this).removeClass('input-active');
        }
    })

})