<?php
include_once("guest_header.php");

$em = $_REQUEST['em'];
$token = $_REQUEST['token'];

echo $em;
echo $token;

$q = "select * from registration where email='$em' and token='$token'";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);

if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $status = $row[8];
        if ($status == "Active") {

            $_SESSION['success'] = "Account is already activated";
        } else {
            $updt = "update registration set `status`='Active' where email='$em' and token='$token'";
            if (mysqli_query($con, $updt)) {
                $_SESSION['success'] = "Activation activated successfully";
            } else {
                $_SESSION['error'] = "Error in activating Account. Please try again later.";
            }
        }
?>
        <script>
            window.location.href = "login.php";
        </script>
<?php
    }
} else {
    echo "Either Email is not registered or token is incorrect.";
}