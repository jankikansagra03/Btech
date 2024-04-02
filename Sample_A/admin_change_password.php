<?php
include_once('admin_header.php');

?>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Change Password</h2>
            <form action="admin_update_password.php" method="post" id="form1">
                <div class="form-group">
                    <label for="old_pwd">Old Password:</label>
                    <input type="password" class="form-control" id="old_pwd" placeholder="Enter old password" name="old_pswd" onblur="verify_old_pwd(document.getElementById('old_pwd').value)">
                    <span id="old_err"></span>
                </div>
                <div class="form-group">
                    <label for="npwd">New Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    <span id="pswd_err"></span>
                </div>
                <div class="form-group">
                    <label for="rpwd">Confirm New Password:</label>
                    <input type="password" class="form-control" id="rpwd" placeholder="Enter password" name="repswd">
                    <span id="repswd_err"></span>
                </div>

                <br>
                <input type="submit" class="btn" value="Change Password" name="btn" />


            </form>
        </div>
    </div>
</div>
<br>
<?php
include_once("footer.php");
?>