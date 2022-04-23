$(document).ready(function(){
    jQuery.validator.addMethod("name_regex", function(value, element) {
        return this.optional(element) || /^[a-zA-z\.\-_]{1,30}$/i.test(value);
    }, "Name with only a-z A-Z.");
    jQuery.validator.addMethod("phone_regex", function(value, element) {
        return this.optional(element) || /^[0-9\.\-_]{10,30}$/i.test(value);
    }, "Only 0-9");
    $(".formcheckout").validate({
        rules: {
            fName:{
                required: true,
                minlength: 1,
                name_regex: true,
            },
            lName:{
                required: true,
                minlength: 1,
                name_regex: true,
            },
            companyName:"required",
            country: "required",                    
            zip:"required",
            street:"required",
            phone:{
                required: true,
                phone_regex: true   
            },
            email:"required"
        },
        messages: {
            fName:{
                required: "Enter your first name"
            },
            lName:{
                required: "Enter your last name"
            },
            companyName:"Please choose your company",
            country: "Please choose your country",                   
            zip:"Please select your zip",
            street:"Please write your street",
            phone:{
                required:"Please enter your phone"
            },
            email:"Please enter your email"
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

