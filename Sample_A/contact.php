<?php
include_once("guest_header.php");
?>

<br>
<div class="container">
    <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <h1>Contact Form</h1>
            <form action="/action_page.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fn1">Fullname:</label>
                    <input type="email" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                </div>
                <div class="form-group">
                    <label for="email1">Email:</label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="mn1">Mobile Number:</label>
                    <input type="text" class="form-control" id="mn1" placeholder="Enter Mobile Number" name="mn">
                </div>
                <div class="form-group">
                    <label for="msg1">Enter Message:</label>
                    <textarea class="form-control" name="msg" id="msg1" cols="30" rows="5"></textarea>
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</div>
<br>
<?php
include_once("footer.php");
?>