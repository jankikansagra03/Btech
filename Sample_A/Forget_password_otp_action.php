<?php
include_once("guest_header.php");

if (isset($_POST['btn'])) {
    $otp = $_POST['otp'];

    $em = $_SESSION['forgot_em'];
    $token = $_SESSION['forgot_token'];

    $q = "select * from token where email='$em' and token='$token'";
    $result = mysqli_query($con, $q);
    while ($row = mysqli_fetch_array($result)) {
        if ($otp == $row[4]) {
?>
            <script>
                window.location.href = "new_password.php";
            </script>
        <?php
        } else {
            setcookie('error', "Incorrect OTP", time() + 2, "/");
        ?>
            <script>
                window.location.href = "Forgot_password_otp.php";
            </script>
<?php
        }
    }
}
