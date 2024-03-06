<?php
include_once("guest_header.php");
?>
<div class="container">
    <div class="row">

        <div class="col-lg-6 col-xxl-6 col-xl-6 col-md-12 col-sm-12 col-xs-12 col-12">

            <h1>Address</h1> <br>
            <h4><i class="fa-solid fa-location-dot"></i> &nbsp;Main Campus</h4>
            RK University, Bhavnagar Highway, Kasturbadham, Rajkot, Gujarat, India 360020
            <br>
            <br>
            <h4><i class="fa-solid fa-location-dot"></i> &nbsp;City Campus</h4>
            New 150ft Ring Road,Mota Mawa,Kalawad Road,Rajkot, Gujarat, India 360004
            <br><br>
            <h4><i class="fa-solid fa-phone-volume"></i>&nbsp; Contact Number</h4>
            +91-9712489122
            <br>
            +91-9925714450
            <br>
            <br>
            <br>

        </div>
        <div class="col-lg-6 col-xxl-6 col-xl-6 col-md-12 col-sm-12 col-xs-12 col-12">
            <h1>Contact Us</h1>
            <br>
            <form action="" id="reg" method="post">
                <div class="form-group">
                    <label for="fn1"><b>Fullname:</b></label>
                    <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                    <span id="fn1_error"></span>
                </div>
                <div class="form-group">
                    <label for="email"><b>Email:</b></label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="em">
                    <span id="email_error"></span>
                </div>

                <div class="form-group">
                    <label for="address1"><b>Message</b></label>
                    <textarea name="msg" class="form-control" id="address1" cols="30" rows="5"></textarea>
                    <span id="msg_error"></span>
                </div>

                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>