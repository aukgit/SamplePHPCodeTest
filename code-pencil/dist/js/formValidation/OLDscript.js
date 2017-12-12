$(document).ready(function () {


    $("form[name='registration']").validate({
        // Specify validation rules
        rules: {
            username: "required",
            password: {
                required: true,
                minlength: 8
            },
            confirm_pass: {
                required: true,
                minlength: 8,
                equalTo: "#Password"
            },
        },
        messages: {
            firstname: "Please enter your username",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long"
            },
            confirm_pass: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
                equalTo: "Please enter the same password as above"
            },
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        }
    });
});