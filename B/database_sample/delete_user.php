<?php
include_once("connection.php");
if (isset($_POST['email'])) {
    $em = $_POST['email'];
    $q = "delete from registration where email='$em'";
    $q1 = "select * from registration where email='$em'";
    $result = mysqli_query($con, $q1);
    while ($r = mysqli_fetch_array($result)) {
        unlink("profile_pictures/" . $r[8]);
        // echo $q1;
    }
    if (mysqli_query($con, $q)) {
        echo "data deleted successfully";
    } else {
        echo "error in deleting";
    }
}
