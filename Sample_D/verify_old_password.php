<?php
session_start();
include_once('connection.php');

$pwd = $_REQUEST['pwd'];
$email = $_SESSION['admin_uname'];
$q = "select * from registration where email='$email'";
$result = mysqli_query($con, $q);
while ($row = mysqli_fetch_array($result)) {
    $old_password = $row[4];
    if ($old_password != $pwd) {
        echo "Invalid";
    }
}
