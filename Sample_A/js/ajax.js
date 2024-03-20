function check_email(em) {
    alert(em);
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
            }
        }
    })
}