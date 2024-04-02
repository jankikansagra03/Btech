<?php
include_once("admin_header.php");

if (isset($_POST['btn'])) {
    $new = $_POST['pswd'];
    $em = $_SESSION['admin_uname'];

    $q = "update registration set password='$new' where email='$em'";
    if (mysqli_query($con, $q)) {
        setcookie('success', "Password updated successfully", time() + 2, "/");
    } else {
        setcookie('error', "Error in updating Password", time() + 2, "/");
    }
?>
    <script>
        window.location.href = "admin_change_password.php";
    </script>
<?php
}
