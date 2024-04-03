<?php
include_once("admin_header.php");
echo "<br>";


?>
<div class="container">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Change Password</h2>
            <form action="admin_update_password.php" method="post" enctype="multipart/form-data" id="form1">
                <div class="form-group">
                    <label for="pwd"><b>Old Password:</b></label>
                    <input type="password" class="form-control" id="old_pswd_id" placeholder="Enter password" name="old_pswd" onblur="verify_old_password(this.value)">
                    <span id="old_pswd_err"></span>
                </div>
                <div class="form-group">
                    <label for="pwd"><b>New Password:</b></label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    <span id="pswd_err"></span>
                </div>
                <div class="form-group">
                    <label for="repwd"><b>Confirm New Password: </b></label>
                    <input type="password" class="form-control" id="repwd" placeholder="Enter password" name="repswd">
                    <span id="repswd_err"></span>
                </div>


                <input type="submit" class="btn" value="Submit" name="btn">
            </form>
        </div>

    </div>
</div>
<br>
<?php
include_once("footer.php");
?>