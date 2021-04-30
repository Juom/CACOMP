$(window).on('load', function () {
    $('#preloader .inner').fadeOut();
    $('#preloader').delay(350).fadeOut('slow'); 
    $('body').delay(350).css({'overflow': 'visible'});
});

$(document).ready(function(){
    $(".menu i").click(function(){
        $("nav ul").toggleClass("active");
    })
});

$(function() {
    $('.page-scroll a').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
    })
});

$('#meuModal').on('shown.bs.modal', function () {
    $('#meuInput').trigger('focus')
})