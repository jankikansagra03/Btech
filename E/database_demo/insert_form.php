<?php
include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert_form.php" method="post" enctype="multipart/form-data">
        Enter fullname: <input type="text" name="fn" id="fn1">
        <br>
        Enter Email: <input type="text" name="em" id="em1">
        <br>
        select gender: <input type="radio" name="gen" id="" value="Male">Male"
        <input type="radio" name="gen" id="" value="Female">Female
        <br>
        Enter Mobile Number: <input type="text" name="mn" id="mn1">
        <br>
        Enter password: <input type="text" name="pwd" id="pwd1">
        <br>
        Confirm Password: <input type="text" name="repwd" id="repwd1">
        <br>
        select profile picture:
        <input type="file" name="pic" id="pic1">
        <br>
        <input type="submit" value="Register" name="reg_btn">
    </form>
</body>

</html>
<?php
if (isset($_POST['reg_btn'])) {
    $fn = $_POST['fn'];
    $em = $_POST['em'];
    $mn = $_POST['mn'];
    $gen = $_POST['gen'];
    $pwd = $_POST['pwd'];
    $pic = $_FILES['pic']['name'];

    $insert = "insert into registration(`fullname`,`email`,`mobile`,`gender`,`password`,`profile_pic`) values('$fn','$em','$mn','$gen','$pwd','$pic')";

    if (mysqli_query($con, $insert)) {
        if (!is_dir("uploads")) {
            mkdir("uploads");
        }
        move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/" . $_FILES['pic']['name']);
        echo "registration successfull";
    } else {
        echo "error in registration";
    }
}
