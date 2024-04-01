<?php
include_once("admin_header.php");

if (isset($_POST['btn'])) {
    $em = $_SESSION['admin_uname'];
    $fn = $_POST['fn'];
    $gen = $_POST['gen'];
    $mobile = $_POST['mobile'];
    if ($_FILES['pic1']['name'] == "") {
        $q = "UPDATE `registration` SET `fullname`='$fn',`gender`='$gen',`mobile`=$mobile WHERE email='$em'";
    } else {
        $pic_name = uniqid() . $_FILES['pic1']['name'];
        $q = "UPDATE `registration` SET `fullname`='$fn',`gender`='$gen',`mobile`=$mobile,`profile_pic`='$pic_name' WHERE email='$em'";
        $q1 = "select * from registration where email='$em'";
        $result = mysqli_query($con, $q1);
        while ($r = mysqli_fetch_array($result)) {
            $_SESSION['old_picture'] = $r[6];
        }
    }
    if (mysqli_query($con, $q)) {
        if ($_FILES['pic1']['name'] != "") {

            unlink("images/profile_pictures/" . $_SESSION['old_picture']);
            move_uploaded_file($_FILES['pic1']['tmp_name'], "images/profile_pictures/" . $pic_name);
        }
        setcookie('success', "Profile updated successfully", time() + 2, "/");
    } else {
        setcookie('error', "Error in Updating Profile", time() + 2, "/");
    }
?>
    <script>
        window.location.href = "admin_edit_profile.php";
    </script>
<?php
}
