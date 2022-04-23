$(document).ready(function() {
    $('.incre').click(function (e) {
        var incre_value = $(this).parents('.quantity').find('.qty-in').val();
        var value = parseInt(incre_value);
        if(value<999){
            value++;
            $(this).parents('.quantity').find('.qty-in').val(value);
        }

    });
    $('.clc').click(function () {
        $('.cartitem').css({'display':'none'});
    });
    $('.decre').click(function (e) {
        var decre_value = $(this).parents('.quantity').find('.qty-in').val();
        var value = parseInt(decre_value);
        if(value>1){
            value--;
            $(this).parents('.quantity').find('.qty-in').val(value);
        }
    });
    jQuery.validator.addMethod("zipocheck", function(value, element) {
        return this.optional(element) || /^[0-9\.\-_]{6,10}$/i.test(value);
    }, "Only number");
    $(".formcart").validate({
        rules: {
            country: "required",                    
            rgst: "required",
           zipo: {
               required:true,
               zipocheck:true
           }
        },
        messages: {
            country: "Please choose your country",                    
            rgst: "Please choose your region/state",
           zipo: {
               required:"Please write your zipcode"
            }
        },
         errorPlacement: function(error, element) 
{
    { 
        error.insertBefore( element );
    }
 },
        submitHandler: function(form) {
            form.submit();
        }
        
    });
})    