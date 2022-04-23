$(document).ready(function(){
    var height=$('#helloworld').height();
    $(window).scroll(function(){    
        if ($(this).scrollTop()>height){
            $('.header').addClass('fixed');
        }
        else{
            $('.header').removeClass('fixed');
        }
    })
    $('.category').on('click', function() {
        $('.category-menu').slideToggle(500);
    })
    $('.banner-language').on('click', function() {
        $('.listcate2').slideToggle(500);
    })
    $('.banner-language').on('click', function() {
        $('.listcate3').slideToggle(500);
    })
    $('.card').mouseover(function() {
        $(this).children('.action_link').show();
        $(this).children('.action_link').addClass('animate__fadeIn');
    })
    $('.card').mouseout(function() {
        $(this).children('.action_link').hide();
    })
    // btn
    $('.PC').on('click', function() {
        $('.Console').removeClass('blue');
        $('.Switch').removeClass('blue');
        $(this).addClass('blue')
        $('.product-console').fadeOut(500);
        $('.product-switch').fadeOut(500);
        $('.product-pc').fadeIn(1000);

    })
    $('.Console').on('click', function() {
        $('.PC').removeClass('blue');
        $('.Switch').removeClass('blue');
        $(this).addClass('blue')
        $('.product-switch').fadeOut(500);
        $('.product-pc').fadeOut(500);
        $('.product-console').fadeIn(1000);
    })
    $('.Switch').on('click', function() {
        $('.Console').removeClass('blue');
        $('.PC').removeClass('blue');
        $(this).addClass('blue')
        $('.product-console').fadeOut(500);
        $('.product-pc').fadeOut(500);
        $('.product-switch').fadeIn(1000);
    })
        
        
          $('.productnew-box').owlCarousel({
            autoplay:true,
            loop:true,
            margin:15,
            dots: false,
            nav:false,
            responsive:{
                320:{
                    items:1
                },  
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })
$(function() {
    $("form[name='registration']").validate({
      rules: {
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        email: "Please enter a valid email address"
      },    
      submitHandler: function(form) {
        form.submit();
      },
      errorPlacement: function(error, element) 
    {
    { 
        error.insertAfter( element );
    }
    }
    });
  });
        $('.bannerslide').owlCarousel({
            autoplay:true,
            loop:true,
            margin:0,
            dots: false,
            nav:false,
            responsive:{
                320:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        $('.client-block').owlCarousel({
            autoplay:true,
            loop:true,
            margin:0,
            dots: false,
            nav:false,
            responsive:{
                320:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        $('.news-slides').owlCarousel({
            autoplay:true,
            loop:true,
            margin:0,
            dots: false,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
        $('.logo-brand-slider').owlCarousel({
            autoplay:true,
            loop:true,
            margin:0,
            nav:false,
            dots: false,
            responsive:{
                320:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
        $('.res-menu').on('click', function() {
            $(this).children('.menu-icon').children('#plus').toggle();
            $(this).children('.menu-icon').children('#minus').toggle();
            $('.res-menu2').slideToggle(500)
        })
        $('.menu-bars').on('click', function() {
            $('.menu-resin').removeClass('animate__fadeOutLeft')
            $('.menu-responsive').fadeIn(700)
            $('.menu-resin').addClass('animate__fadeInLeft')
        })
        $('.close-button').on('click', function() {
            $('.menu-responsive').fadeOut(700)
            $('.menu-resin').removeClass('animate__fadeInLeft')
            $('.menu-resin').addClass('animate__fadeOutLeft')
        })
        var heightMax = $('body').height()
    $('.menu-responsive').css({
        "height" : heightMax
    })
    $('#back-to-top').hide();
    $(window).on('scroll', function(){
        if($(this).scrollTop() >= 250){
            $('#back-to-top').fadeIn();
        }else {
            $('#back-to-top').fadeOut();
        }
    })
    $('#back-to-top').on('click', function(){
        $('html,body').animate({
            "scrollTop" : 0,
        },1000)
    })
})

