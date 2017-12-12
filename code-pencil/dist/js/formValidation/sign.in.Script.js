function checkAvailability() {

    jQuery.ajax({
        url: "../api/check_is_email_available.php",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function (data) {
            if (data === "false") {
                
                let info = '<div class="alert alert-danger" role="alert">Email not found</div>'
                $("#user-availability-status").html(info);
                $("#submitButton").attr("disabled", "disabled");
               

            }
            if (data === "true") {
                let data = '<div class="alert alert-success" role="alert">Email found</div>'
                $("#user-availability-status").html(data);
                $("#submitButton").removeAttr("disabled");
            }

        },
        error: function () {}
    });
}
