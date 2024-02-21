<?php
include_once("connection.php");
if (isset($_POST['updt_btn'])) {
    $fn = $_POST['fn'];
    $em = $_POST['em'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    $hobbies = implode(',', $hobbies);
    $state = $_POST['state'];
    $pwd = $_POST['pwd'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $q = "UPDATE `registration` SET `fullname`='$fn',`gender`='$gender',`hobbies`='$hobbies',`state`='$state',`mobile`=$mobile,`password`='$pwd',`address`='$address'";
    if ($_FILES['profile_pic2']['name'] != "") {

        $profile_pic1 = $_FILES['profile_pic2']['name'];
        $q = $q . ",`profile_pic`='$profile_pic1'";
        $q1 = "select profile_pic from registration where email='$em'";
        $result = mysqli_query($con, $q1);
        while ($r = mysqli_fetch_assoc($result)) {
            unlink("profile_pictures/" . $r['profile_pic']);
        }
        move_uploaded_file($_FILES['profile_pic2']['tmp_name'], "profile_pictures/" . $profile_pic1);
    }

    $q = $q . "where email='$em'";
    echo $q;

    if (mysqli_query($con, $q)) {

?>
        <script type="text/javascript">
            window.location.href = "display_data.php";
        </script>
<?php
    } else {
        echo "error in registration";
    }
}
