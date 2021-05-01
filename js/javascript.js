$(function () {
    'use strict';
    // Start Option NiceScroll
    $('html').niceScroll({
        cursorcolor: "#b1b493",
        cursorwidth: "5px",
        cursorheight: "50px",
        background: "none",
        cursorborder: 0,
        cursorborderradius: '10px'
    });
    // Start Option Navbar
    $('.navbar .links').hide();
    $('.navbar .icon').click(function () {
        $('.navbar .links').fadeIn();
    });
    $('.navbar .links span').click(function () {
        $('.navbar .links').fadeOut();
    });
    $('.navbar .links li a').click(function () {
        $(this).addClass('active').parent().siblings().find('a').removeClass('active');
    });
    $('.navbar .links li a').click(function (e) {
        e.preventDefault();
        $('html , body').animate({
            scrollTop: $('#' + $(this).data('section')).offset().top
        }, 1500);
    });
    // End Option Navbar
});