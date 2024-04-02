<?php
session_start();
include_once('connection.php');
$pwd = $_REQUEST['pwd'];

$em = $_SESSION['admin_uname'];

$q = "select * from registration where email='$em' and password='$pwd'";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
echo $count;
