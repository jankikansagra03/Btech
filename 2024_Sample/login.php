<?php
include_once("guest_header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2 col-sm-12 col-xs-12 col-12">

        </div>
        <div class="col-lg-6 col-xxl-6 col-xl-6 col-md-8 col-sm-12 col-xs-12 col-12">
            <h1>Login</h1>
            <br>
            <form action="" class="was_validated" method="post" id="reg">
                <div class="form-group">
                    <label for="email"><b>Email:</b></label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="em">
                    <span id="email_error"></span>
                </div>
                <div class="form-group">
                    <label for="pwd1"><b>Password:</b></label>
                    <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pswd">
                    <span id="pswd_error"></span>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> <b>Remember me</b>
                    </label>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>