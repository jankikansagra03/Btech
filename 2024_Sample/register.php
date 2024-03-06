<?php
include_once("guest_header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-sm-12 col-xs-12 col-12">

        </div>
        <div class="col-lg-6 col-xxl-6 col-xl-6 col-md-8 col-sm-12 col-xs-12 col-12">
            <h1>Register</h1>
            <br>
            <form action="" method="post" id="reg" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fn1"><b>Fullname:</b></label>
                    <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                    <span id="fn1_error"></span>
                </div>
                <div class="form-group">
                    <label for="email1"><b>Email:</b></label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter Email" name="em" onblur="check_email(document.getElementById('email1').value)">
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