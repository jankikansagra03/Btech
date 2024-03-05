<?php
include_once("guest_header.php");
?>
<script>
    $(document).ready(function() {
        $.validator.addMethod("fnregex", function(value, element) {
            var regex = /^[a-zA-Z ]+$/;
            return regex.test(value);
        }, "Firstname must contain only letters");


        $.validator.addMethod("emregex", function(value, element) {
            regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i;
            return regex.test(value);

        }, "Please enter a valid email address.");

        $.validator.addMethod("pwdregex", function(value, element) {
                regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
                return this.optional(element) || regex.test(value);
            },
            "Password must contain atleast one uppercase letter, one lowercase letter, one digit and a special character"
        );

        $.validator.addMethod("mobregex", function(value, element) {
            regex = /^[0-9]{10}$/;
            return regex.test(value);
        }, "Mobile number must contain exactly 10 digits");

        $.validator.addMethod("filesize", function(value, element, size) {
            var maxSize = size * 1024 * 1024;
            for (var i = 0; i < element.files.length; i++) {
                var fileSize = element.files[i].size;
                if (fileSize > maxSize) {
                    return false;
                }
            }
            return true; // File size is within the maximum limit
        }, "File size cannot exceed {0} MB.");

        $.validator.addMethod("atLeastTwoChecked", function(value, element) {
            return $('input[name="hobbies"]:checked').length >= 2;
        }, "Please select at least two checkboxes.");

        $('#reg').validate({
            // ignore: ":hidden:not(#profile_pic1)",
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
                gen: "required",
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

                pic: {
                    required: true,
                    accept: "image/jpeg,image/png,image/gif",
                    filesize: 1
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
                gen: {
                    required: "Gender is a required field"
                },
                pwd: {
                    required: "Password is a required Field",
                    minlength: "Password must contain at least 8 characters",
                    maxlength: "Password must not be more than 20 characters"
                },
                mobile: {
                    required: "Mobile number is a required field",
                },
                repwd: {
                    required: "Confirm password cannot be empty",
                    equalTo: "Password and confirm password must be same"
                },
                pic: {
                    required: "Please select a file to upload",
                    accept: "only imge file with extension jpg,png and gif are allowed",
                    filesize: "File size must not be greater than 10KB"
                }

            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "fn") {
                    $('#fn1_error').html(error);
                }
                if (element.attr("name") == "em") {
                    $('#email_error').html(error);
                }
                if (element.attr("name") == "gen") {
                    $('#gender_error').html(error);
                }
                if (element.attr("name") == "pwd") {
                    $('#pwd_error').html(error);
                }
                if (element.attr("name") == "repwd") {
                    $('#repwd_error').html(error);
                }
                if (element.attr("name") == "mobile") {
                    $('#mobile_error').html(error);
                }
                if (element.attr("name") == "pic") {
                    $('#profile_error').html(error);
                }
            },
        });
    });
</script>
<script>
    function check_email(em) {

        var url123 = 'http://localhost/Tutorials/Btech-Tutorials/Tutorial-1(JQuery)/check_email12.php';

        $.ajax({
            type: "POST",
            url: url123,
            data: {
                em12: em,
                em: em
            },
            success: function(response) {
                $('#email_error').html(response);
            }
        });

    }
</script>
<div class="container">
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-sm-12 col-xs-12 col-12">

        </div>
        <div class="col-lg-6 col-xxl-6 col-xl-6 col-md-8 col-sm-12 col-xs-12 col-12">
            <h1>Register</h1>
            <br>
            <form action="" class="was_validated" method="post" id="reg">
                <div class="form-group">
                    <label for="fn1"><b>Fullname:</b></label>
                    <input type="email" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                    <span id="fn1_error"></span>
                </div>
                <div class="form-group">
                    <label for="email"><b>Email:</b></label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="em">
                    <span id="email_error"></span>
                </div>
                <div class="form-group">
                    <label for="pwd1"><b>Password:</b></label>
                    <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd">
                    <span id="pwd_error"></span>
                </div>
                <div class="form-group">
                    <label for="repwd1"><b>Confirm Password:</b></label>
                    <input type="password" class="form-control" id="repwd1" placeholder="Confirm password" name="repwd">
                    <span id="repwd_error"></span>
                </div>
                <div class="form-group">
                    <label><b>Select Gender:</b> </label>
                    <br>
                    <input type="radio" name="gen" value="Male"> Male
                    <input type="radio" name="gen" value="Female"> Female
                    <br>
                    <span id="gender_error"></span>

                </div>
                <div class="form-group">
                    <label for="mno"><b>Mobile Number:</b></label>
                    <input type="password" class="form-control" id="mno" placeholder="Mobile Numbers" name="mobile">
                    <span id="mobile_error"></span>
                </div>
                <div class="form-group">
                    <label for="file1"><b>Profile Picture:</b></label>
                    <input type="file" class="form-control" id="file1" name="pic">
                    <span id="profile_error"></span>
                </div>

                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>