$(document).ready(function() {
    $('.incre').click(function (e) {
        var incre_value = $(this).parents('.quantity').find('.qty-in').val();
        var value = parseInt(incre_value);
        if(value<999){
            value++;
            $(this).parents('.quantity').find('.qty-in').val(value);
        }

    });
    $('.decre').click(function (e) {
        var decre_value = $(this).parents('.quantity').find('.qty-in').val();
        var value = parseInt(decre_value);
        if(value>1){
            value--;
            $(this).parents('.quantity').find('.qty-in').val(value);
        }
    });
    $('.productimg-bot').owlCarousel({
        autoplay:false,
        loop:false,
        margin:0,
        nav:false,
        dots:false,
        responsive:{
            320:{
                items:3
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    $(document).ready(function(){
        $(function() {
        // Setup form validation on the #register-form element
       $("form[name='register-form']").validate({   //#register-form is form id
           // Specify the validation rules
      rules: {
               firstname: "required", //firstname is corresponding input name   
            password: {
              required: true,
              minlength: 6
            },
        //passowrd:  is corresponding input name
               email: {               //email is corresponding input name
                   required: true,
                   email: true
               },
           },
           // Specify the validation error messages
      messages: {
               firstname: "Enter First Name",
               password: "Enter Passowrd",
               email: "Enter Valid Email ID"
           },
           submitHandler: function(form) {
               form.submit();
           }
       });
      
        });
      }) 
    $('.bt-img >img').on('click', function() {
        var img = $(this).attr('src')
        $('.goods-img >img').attr('src', img)
    })
    $('.gpbu').on('click', function() {
        $(this).addClass('blue')
        $('.rcbu').removeClass('blue')
        $('.dvbu').removeClass('blue')
        $('#rcdes').hide()
        $('#dvdes').hide()
        $('#gpdes').show()
    })
    $('.rcbu').on('click', function() {
        $(this).addClass('blue')
        $('.gpbu').removeClass('blue')
        $('.dvbu').removeClass('blue')
        $('#gpdes').hide()
        $('#dvdes').hide()
        $('#rcdes').show()
    })
    $('.dvbu').on('click', function() {
        $(this).addClass('blue')
        $('.rcbu').removeClass('blue')
        $('.gpbu').removeClass('blue')
        $('#rcdes').hide()
        $('#gpdes').hide()
        $('#dvdes').show()
    })
    var $form = $("form"),
    $successMsg = $(".alert");
    $.validator.addMethod("letters", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
    });
    
})
