<?php
include_once("admin_header.php");
if (isset($_POST['btn'])) {
    $fn = $_POST['fn'];
    $em = $_POST['email'];
    $gen = $_POST['gen'];
    $mobile = $_POST['mobile'];
    $q_updt = "UPDATE `registration` SET `fullname`='$fn',`gender`='$gen',`mobile`=$mobile";
    if ($_FILES['pic_updt']['name'] != "") {
        $pic = uniqid() . $_FILES['pic_updt']['name'];
        $q_updt = $q_updt . ",`profile_pic`='$pic'";
        if (!is_dir("images/profile_pictures")) {
            mkdir("images/profile_pictures");
        }
        unlink($_COOKIE['profile_pic']);
        move_uploaded_file($_FILES['pic_updt']['tmp_name'], "images/profile_pictures/" . $pic);
    }
    $q_updt = $q_updt . " where email='$em'";
    if (mysqli_query($con, $q_updt)) {
        setcookie('success', "Profile Updated Successfully", time() + 2, "/");
?>
        <script>
            window.location.href = "admin_edit_profile.php";
        </script>
    <?php
    } else {
        setcookie('error', "Error in updating Profile. Please try again later", time() + 2, "/");
    ?>
        <script>
            window.location.href = "admin_edit_profile.php";
        </script>
<?php
    }
}
