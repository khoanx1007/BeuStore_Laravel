$(document).ready(function(){
    $('.icon1').on('click', function() {
        $('.icon1').addClass('black');
        $('.icon2').removeClass('black');
        $('.bar-info').fadeOut(500);
        $('.product-pc').fadeIn(1000);

    })
    $('.icon2').on('click', function() {
        $('.icon2').addClass('black');
        $('.icon1').removeClass('black');
        $('.product-pc').fadeOut(500);
        $('.bar-info').fadeIn(1000);
    })
})