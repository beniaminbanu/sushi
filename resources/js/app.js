require('./bootstrap');

require('./header')

require('./common/services-carousel')

$(document).ready(function () {
    if (navigator.userAgent.includes('Windows')) {
        const white = $('.white-btn');
        const transparent = $('.transparent-btn');
        const gradient = $('.gradient-btn');
        const transparentFix = $('.transparent-btn-fix');
        const gradientFix = $('.gradient-btn-fix');

        $(white).removeClass('white-btn');
        $(white).addClass('white-btn-windows');
        $(transparent).removeClass('transparent-btn');
        $(transparent).addClass('transparent-btn-windows');
        $(gradient).removeClass('gradient-btn');
        $(gradient).addClass('gradient-btn-windows');
        $(transparentFix).removeClass('transparent-btn-fix');
        $(transparentFix).addClass('transparent-btn-fix-windows');
        $(gradientFix).removeClass('gradinet-btn-fix');
        $(gradientFix).addClass('gradient-btn-fix-windows');

        const language = $('.language');

        $(language).removeClass('language');
        $(language).addClass('language-windows');
    }
});