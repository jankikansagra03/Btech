$(document).ready(function () {
    $.validator.addMethod("fnregex", function (value, element) {
        var regex = /^[a-zA-Z ]+$/;
        return this.optional(element) || regex.test(value);
    }, "Firstname must contain only letters");


    $.validator.addMethod("emregex", function (value, element) {
        regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i;
        return this.optional(element) || regex.test(value);

    }, "Please enter a valid email address.");

    $.validator.addMethod("pwdregex", function (value, element) {
            regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
            return this.optional(element) || regex.test(value);
        },
        "Password must contain atleast one uppercase letter, one lowercase letter, one digit and a special character"
    );

    $.validator.addMethod("mobregex", function (value, element) {
        regex = /^[0-9]{10}$/;
        return this.optional(element) || regex.test(value);
    }, "Mobile number must contain exactly 10 digits");

    $.validator.addMethod("filesize", function (value, element, size) {
        var maxSize = size * 1024 * 1024;
        for (var i = 0; i < element.files.length; i++) {
            var fileSize = element.files[i].size;
            if (fileSize > maxSize) {
                return false;
            }
        }
        return true; // File size is within the maximum limit
    }, "File size cannot exceed {0} MB.");

    $.validator.addMethod("atLeastTwoChecked", function (value, element) {
        return $('input[name="hobbies[]"]:checked').length >= 2;
    }, "Please select at least two checkboxes.");

    $('#reg').validate({
        ignore: ":hidden:not(#profile_pic1)",
        rules: {
            fn: {
                required: true,
                minlength: 2,
                maxlength: 25,
                fnregex: true
            },
            em: {
                required: true,
                emregex: true
            },
            gender: "required",
            'hobbies[]': {
                atLeastTwoChecked: true,
                required: true,
            },
            state: "required",
            mobile: {
                required: true,
                mobregex: true
            },
            pwd: {
                required: true,
                minlength: 8,
                maxlength: 20,
                pwdregex: true
            },
            repwd: {
                required: true,
                equalTo: '#pwd1'
            },
            address: "required",
            profile_pic: {
                required: true,
                accept: "image/jpeg,image/png,image/gif",
                filesize:2
            },
            profile_pic2: {
                // required: true,
                accept: "image/jpeg,image/png,image/gif",
                filesize: 2
            }

        },
        messages: {
            fn: {
                required: "Fullname is required Field",
                minlength: "Fullname must contain atleast 2 characters",
                maxlength: "Fullname must contain maximum 25 characters"
            },
            em: {
                required: "Email is a required Field",
                email: "Invalid Email address"
            },
            gender: {
                required: "Gender is a required field"
            },
            'hobbies[]': {
                required: "Hobbies is a required field"
            },
            state: {
                required: "State is a required field"
            },
            pwd: {
                required: "Password is a required Field",
                minlength: "Password must contain at least 8 characters",
                maxlength: "Password must not be more than 20 characters"
            },
            address: {
                required: "Address is a required field"
            },
            mobile: {
                required: "Mobile number is a required field",
            },
            repwd: {
                required: "Confirm password cannot be empty",
                equalTo: "Password and confirm password must be same"
            },
            profile_pic: {
                required: "Please select a file to upload",
                accept: "only imge file with extension jpg,png and gif are allowed",
                filesize: "File size must not be greater than 10KB"
            },
            profile_pic2: {
                // required: "Please select a file to upload",
                accept: "only imge file with extension jpg,png and gif are allowed",
                filesize: "File size must not be greater than 10KB"
            }

        },
        errorPlacement: function (error, element) {
            if (element.attr("name") === "fn") {
                $('#fn1_error').html(error);
            }
            if (element.attr("name") === "em") {
                $('#email_error').html(error);
            }
            if (element.attr("name") === "gender") {
                $('#gender_error').html(error);
            }
            if (element.attr("name") === "pwd") {
                $('#pwd_error').html(error);
            }
            if (element.attr("name") === "repwd") {
                $('#repwd_error').html(error);
            }
            if (element.attr("name") === "mobile") {
                $('#mobile_error').html(error);
            }
            if (element.attr("name") === "hobbies[]") {
                $('#hobbies_error').html(error);
            }
            if (element.attr("name") === "state") {
                $('#state_error').html(error);
            }
            if (element.attr("name") === "address") {
                $('#address_error').html(error);
            }
            if (element.attr("name") === "profile_pic") {
                $('#profile_error').html(error);
            }
            if (element.attr("name") === "profile_pic2") {
                $('#profile_error2').html(error);
            }
        },
    });
});