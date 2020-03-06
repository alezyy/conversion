$(document).ready(function(){
    $('#carousel-partners').carousel();
    if ( $(window).width() < 640 ) {
        $('.carousel-main-item').removeClass('carousel-item');
        $('.carItem').unwrap().addClass('carousel-item');
        $('.carItem:first').addClass('active');
        $('.carItem').css('margin-left','25px');
    }

});
