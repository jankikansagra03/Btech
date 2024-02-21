<?php
include_once('connection.php');
if (isset($_POST['updt_btn'])) {
    $em = $_POST['em'];
    $fn = $_POST['fn'];
    $gender = $_POST['gender'];
    $h = $_POST['hobbies'];
    $state = $_POST['state'];
    $mobile = $_POST['mobile'];
    $pwd = $_POST['pwd'];
    $address = $_POST['address'];
    $h = implode(",", $h);
    $q = "update registration set `fullname`='$fn',`gender`='$gender',`hobbies`='$h',`state`='$state',`mobile`=$mobile,`password`='$pwd',`address`='$address'";
    if ($_FILES['profile_pic2']['name'] != "") {
        $file_name = $_FILES['profile_pic2']['name'];
        $q = $q . ",`profile_pic`='$file_name'";
        move_uploaded_file($_FILES['profile_pic2']['tmp_name'], "profile_pictures/" . $file_name);

        $q1 = "select * from registration where `email`='$em'";
        $r = mysqli_query($con, $q1);

        while ($r1 = mysqli_fetch_assoc($r)) {
            $old_profile_pic = $r1['profile_pic'];
            unlink("profile_pictures/" . $old_profile_pic);
        }
    }
    $q = $q . "where `email`='$em'";
    echo $q;
    if (mysqli_query($con, $q)) {
?>
        <script>
            window.location.href = "display_data.php";
        </script>

<?php

    } else {
        echo "Error in updating data";
    }
}
