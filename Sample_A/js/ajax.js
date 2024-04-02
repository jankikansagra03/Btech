function check_email(em) {
    // alert(em);
    url1 = "http://localhost/btech/Sample_A/check_email.php";
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
            } else {
                $('#em_err').html("");
            }
        }
    })
}

function verify_old_pwd(pwd) {
    url1 = "http://localhost/btech/Sample_A/check_password.php";
    $.ajax({
        type: "POST",
        url: url1,
        data: {
            pwd: pwd,
        },
        success: function (response) {
            if (response == "0") {
                $('#old_err').html('incorrect Old Password');
                $('#old_err').css('color', 'red');
                $('#old_pwd').val('');
            } else {
                $('#old_err').html('');
            }
        }
    })
}