<?php
include_once("guest_header.php");

?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Registration Form</h2>
            <form action="/action_page.php" method="post" enctype="multipart/form-data" id="form1">
                <div class="form-group">
                    <label for="fn1">Fullname:</label>
                    <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                    <span id="fn_err"></span>
                </div>
                <div class="form-group">
                    <label for="email1">Email:</label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter email" name="email">
                    <span id="em_err"></span>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    <span id="pswd_err"></span>
                </div>
                <div class="form-group">
                    <label for="repwd">Confirm Password</label>
                    <input type="password" class="form-control" id="repwd" placeholder="Enter password" name="repswd">
                    <span id="repswd_err"></span>
                </div>
                <div class="form-group">
                    <label for="file1">Select Profile Picture:</label>
                    <input type="file" class="form-control" id="file1" name="pic">
                    <span id="file1_err"></span>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>

    </div>


</div>