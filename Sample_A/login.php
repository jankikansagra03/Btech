<?php
include_once("guest_header.php");
if (isset($_SESSION['admin_uname'])) {
?>
    <script>
        window.location.href = "admin_dashboard.php";
    </script>
<?php
}
if (isset($_SESSION['user_uname'])) {
?>
    <script>
        window.location.href = "user_dashboard.php";
    </script>
<?php
}
if (isset($_SESSION['success'])) {
?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
    </div>
<?php
}
if (isset($_SESSION['error'])) {
?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
    </div>
<?php
}
?>
<br>

<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Login Form</h2>
            <form action="login_action.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <input type="submit" class="btn" value="Submit" name="lgn_btn" />
            </form>
        </div>
    </div>
</div>
<br>
<?php
include_once("footer.php");
?>