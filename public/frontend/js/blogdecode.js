$(document).ready(function(){
    jQuery.validator.addMethod("customEmail", function(value, element) { 
        return this.optional( element ) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value ); 
      }, "Please enter valid email address!");
    $('.formblog').validate({
        rules: {
            name : "required",
            email: {
                required:true,
                email:true,
                customEmail: true
            },
            text:"required"
            
        },
        messages: {
            name: {
                required: "Please enter your name"
            },
            email: {
                required: "Please enter your email",
            },
            text : {
                required: "Please write something ",
            }
        }
        ,
         errorPlacement: function(error, element) 
{
    { 
        error.insertBefore( element );
    }
 },
        submitHandler: function(form) {
            form.submit();
        }
    })
})