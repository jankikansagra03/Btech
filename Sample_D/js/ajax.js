function check_email(em) {
    //alert(em);
    url1 = "http://localhost/2024_Sample/check_email.php";
    $.ajax({
        type: "POST",
        url: url1,
        data: {
            email: em,
        },
        success: function (response) {
            if (response == "email registered") {
                $('#em_err').html("Email already registered");
                $('#em_err').css('color', 'red');
                $('#email1').val('');
            }
        }
    })
}

function verify_old_password(pwd) {
    alert(pwd);
    url1 = "http://localhost/2024_Sample/verify_old_password.php";
    $.ajax({
        type: 'POST',
        url: url1,
        data: {
            pwd: pwd,
        },
        success: function (response) {
            alert(response);
            if (response == "Invalid") {
                $('#old_pswd_err').html("Incorrect Old Password");
                $('#old_pswd_err').css('color', 'red');
                $('#old_pswd_id').val('');
            } else {
                $('#old_pswd_err').html("");
            }
        }
    });
}

function check_valid_email(em) {
    url1 = "http://localhost/2024_Sample/check_email.php";
    $.ajax({
        type: "POST",
        url: url1,
        data: {
            email: em,
        },
        success: function (response) {
            if (response != "email registered") {
                $('#em_err').html("Email Is not registered. Kindly enter registered email address");
                $('#em_err').css('color', 'red');
                $('#email1').val('');
            }

        }
    })

}