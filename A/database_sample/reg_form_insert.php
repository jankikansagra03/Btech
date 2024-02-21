<?php
include_once("connection1.php");

?>
<form action="reg_form_insert.php" method="post">
    Enter Fullname: <input type="text" name="fn" id="">
    <br>
    Enter Email: <input type="email" name="em" id="">
    <br>
    Enter Password: <input type="password" name="pwd" id=""><br>
    Enter Mobile number: <input type="number" name="mn" id=""><br>
    select gender: <input type="radio" name="gen" id="" value="male">male
    <input type="radio" name="gen" id="" value="female">female
    <br>
    <input type="submit" value="Register" name="reg_btn">
</form>


<?php

if (isset($_POST['reg_btn'])) {
    $fn = $_POST['fn'];
    $em = $_POST['em'];
    $mn = $_POST['mn'];
    $pwd = $_POST['pwd'];
    $gen = $_POST['gen'];

    $q = "insert into registration values('$fn','$em','$pwd',$mn,'$gen')";
    echo $q;
    if (mysqli_query($con, $q)) {
        echo "registration successfull";
    } else {
        echo "error in registartion";
    }
}
