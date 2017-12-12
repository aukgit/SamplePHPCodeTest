$.validator.setDefaults({
    submitHandler: function (form) {
        form.submit();
    }
});

$(document).ready(function () {
    $("#signupForm").validate({
        rules: {

            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 8
            },
            confirm_password: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            }
            
        },
        messages: {

            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address"
           
        },
        errorPlacement: function (error, element) {
            error.addClass("ui red pointing label transition");
            error.insertAfter(element.parent());
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".row").addClass(errorClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".row").removeClass(errorClass);
        }
        
    });
});

function checkAvailability() {

    jQuery.ajax({
        url: "../api/check_availability.php",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function (data) {
            
                if(data === "false")
                {
                    let info = '<div class="alert alert-danger" role="alert">Email Address not Available</div>'
                    $("#user-availability-status").html(info);
                    $("#submitButton").attr("disabled", "disabled");
                
                }
                if(data === "true")
                {
                    let data = '<div class="alert alert-success" role="alert">Username Available</div>'
                    $("#user-availability-status").html(data);
                    $("#submitButton").removeAttr("disabled");
                }
      
        },
        error: function () {}
    });
}