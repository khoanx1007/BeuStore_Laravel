$(document).ready(function() {
    $('.acoask').on('click', function() {
        if($(this).hasClass('active')) {
          $(this).siblings('.acoanswer').slideUp();
          $(this).removeClass('active');
        }
        else {
          $('.acoanswer').slideUp();
          $('.acoask').removeClass('active');
          $(this).siblings('.acoanswer').slideToggle();
          $(this).toggleClass('active');
        }
    });     
    });