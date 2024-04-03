  $(document).ready(function () {
      $.validator.addMethod("fnregex", function (value, element) {
          var regex = /^[a-zA-Z ]+$/;
          return regex.test(value);
      }, "Firstname must contain only letters");


      $.validator.addMethod("emregex", function (value, element) {
          regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/;
          return regex.test(value);

      }, "Please enter a valid email address.");

      $.validator.addMethod("pwdregex", function (value, element) {
              regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
              return this.optional(element) || regex.test(value);
          },
          "Password must contain atleast one uppercase letter, one lowercase letter, one digit and a special character"
      );

      $.validator.addMethod("mobregex", function (value, element) {
          regex = /^[0-9]{10}$/;
          return regex.test(value);
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
      }, "File size cannot exceed 1 MB.");

      $.validator.addMethod("atLeastTwoChecked", function (value, element) {
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
              },
              pswd: {
                  required: true
              },
              msg: {
                  required: true
              }

          },
          messages: {
              fn: {
                  required: "*Fullname is required Field*",
                  minlength: "*Fullname must contain atleast 2 characters*",
                  maxlength: "*Fullname must contain maximum 25 characters*"
              },
              em: {
                  required: "*Email is a required Field*",
                  email: "*Invalid Email address*"
              },
              gen: {
                  required: "*Gender is a required field*"
              },
              pwd: {
                  required: "*Password is a required Field*",
                  minlength: "*Password must contain at least 8 characters*",
                  maxlength: "*Password must not be more than 20 characters*"
              },
              mobile: {
                  required: "*Mobile number is a required field*",
              },
              repwd: {
                  required: "*Confirm password cannot be empty*",
                  equalTo: "*Password and confirm password must be same*"
              },
              pic: {
                  required: "*Please select a file to upload*",
                  accept: "*only imge file with extension jpg,png and gif are allowed*",
                  filesize: "*File size must not be greater than 10KB*"
              },
              pswd: {
                  required: "*Password is a required field*"
              },
              msg: {
                  required: "*Message is a required field*"
              }

          },
          errorPlacement: function (error, element) {
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
              if (element.attr("name") == "pswd") {
                  $('#pswd_error').html(error);
              }
              if (element.attr("name") == "msg") {
                  $('#msg_error').html(error);
              }

          },
      });
  });