<?php
session_start();
include_once("guest_header.php");

$em = $_SESSION['forgot_em'];
$token = $_SESSION['forgot_token'];
$q1 = "select * from `token` where email='$em' and token='$token'";
$result = mysqli_query($con, $q1);
// $q = "select * from registration where email='$em'";
// $result1 = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
if (isset($_POST['btn'])) {
    $otp = $_POST['otp'];
    while ($r = mysqli_fetch_array($result)) {
        if ($otp == $r[4]) {
?>
            <script>
                window.location.href = "new_password.php";
            </script>
        <?php
        } else {
            setcookie('error', 'Incorrect OTP', time() + 2, "/");
        ?>
            <script>
                window.location.href = "Forgot_password_otp.php";
            </script>
<?php
        }
    }
}
