<?php
include_once("guest_header.php");
if (isset($_POST['btn'])) {
    $fn = $_POST['fn'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];

    $q = "INSERT INTO `contact`(`Fullname`, `email`, `mobile`, `message`) VALUES ('$fn','$email',$mobile,'$msg')";

    if (mysqli_query($con, $q)) {
        setcookie('success', 'Your inquiry is registerd and we will look into it and soon reach out to you.', time() + 2, "/");
    } else {
        setcookie('error', 'Error in registering yor inquiry. try gain afetr sometime', time() + 2, "/");
    }
?>
    <script>
        window.location.href = "contact.php";
    </script>
<?php
}
