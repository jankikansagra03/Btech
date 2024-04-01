<?php
include_once("guest_header.php"); ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Address</h1>
            <h4><i class="fa-solid fa-location-dot"></i> Main Campus</h4>
            RK University, <br> Bhavnagar Highway, Kasturbadham, <br> Rajkot, Gujarat, India 360020
            <br><br>

            <h4><i class="fa-solid fa-location-dot"></i> City Campus</h4>
            New 150ft Ring Road,<br> Mota Mawa,Kalawad Road,<br> Rajkot, Gujarat, India 360004.
            <br><br>
            <h4><i class="fa-solid fa-phone-volume"></i> Contact Details </h4>
            +91-9712489122 <br>
            +91-9925714450
        </div>
        <div class="col-6">
            <h1>Contact Form</h1>
            <form action="contact_action.php" method="post" enctype="multipart/form-data" id="form1">
                <div class="form-group">
                    <label for="fn1">Fullname:</label>
                    <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                    <span id="fn_err"></span>
                </div>
                <div class="form-group">
                    <label for="email1">Email:</label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter email" name="email">
                    <span id="email_err"></span>
                </div>
                <div class="form-group">
                    <label for="mn1">Mobile Number:</label>
                    <input type="text" class="form-control" id="mn1" placeholder="Enter Mobile Number" name="mobile">
                    <span id="mobile_err"></span>

                </div>
                <div class="form-group">
                    <label for="msg1">Enter Message:</label>
                    <textarea class="form-control" name="msg" id="msg1" cols="30" rows="5"></textarea>
                    <span id="msg1_err"></span>
                </div>

                <input type="submit" class="btn" value="Submit" name="btn">
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
