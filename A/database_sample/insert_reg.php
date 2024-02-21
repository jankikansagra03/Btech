<?php
include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <script src="additional-methods.min.js"></script>
    <link rel="stylesheet" href="form_style.css">
    <script src="validator.js"> </script>
</head>

<body>
    <form id="reg" method="post" enctype="multipart/form-data" action="insert_reg.php">
        <table align="center" style="border: 1px solid black;background-color:#ebf0f0; padding: 30px;" width="50%">
            <tr>
                <td align=" center">
                    <h1>Registartion</h1>
                </td>
            </tr>
            <tr>
                <td><label for="fn1"><span>*</span>Fullname</label> </td>

            </tr>
            <tr>
                <td><input type="text" name="fn" id="fn1" placeholder="Ex. Janki Kansagra"></td>
            </tr>
            <tr>
                <td> <span id="fn1_error"></span></td>

            </tr>
            <tr>
                <td><label for="email1"><span>*</span>Email Address</label> </td>

            </tr>
            <tr>
                <td><input type="text" name="em" id="email1" placeholder="Ex. janki.kansagra@rku.ac.in"></td>
            </tr>
            <tr>
                <td> <span id="email_error"></span></td>

            </tr>
            <tr>
                <td><label><span>*</span>Select Gender</label> </td>

            </tr>
            <tr>
                <td><input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td> <span id="gender_error"></span></td>

            </tr>
            <tr>
                <td><label><span>*</span>Select Hobbies</label> </td>

            </tr>
            <tr>
                <td><input type="checkbox" name="hobbies[]" value="Watching Movies">Watching Movies
                    <input type="checkbox" name="hobbies[]" value="Reading Books">Reading Books
                    <input type="checkbox" name="hobbies[]" value="Cooking">Cooking
                    <input type="checkbox" name="hobbies[]" value="Palying Sports">Playing Sports
                </td>
            </tr>
            <tr>
                <td> <span id="hobbies_error"></span></td>

            </tr>

            </tr>
            <tr>
                <td><label for="state1"><span>*</span>Select State</label> </td>

            </tr>
            <tr>
                <td>
                    <select name="state" id="state1">
                        <option value="Gujarat" selected>Gujarat</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Bihar">Bihar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> <span id="state_error"></span></td>
            </tr>
            <tr>
                <td><label for="mobile1"><span>*</span>Mobile Number</label> </td>
            </tr>
            <tr>
                <td><input type="text" name="mobile" id="mobile1" placeholder="Ex. 1234567890"></td>
            </tr>
            <tr>
                <td> <span id="mobile_error"></span></td>

            </tr>
            <tr>
                <td><label for="pwd1"><span>*</span>Password</label> </td>

            </tr>
            <tr>
                <td><input type="text" name="pwd" id="pwd1"></td>
            </tr>
            <tr>
                <td> <span id="pwd_error"></span></td>

            </tr>
            <tr>
                <td><label for="repwd1"><span>*</span>Confirm Password</label> </td>

            </tr>
            <tr>
                <td><input type="text" name="repwd" id="repwd1"></td>
            </tr>
            <tr>
                <td> <span id="repwd_error"></span></td>

            </tr>
            <tr>
                <td><label for="address"><span>*</span>Address</label> </td>

            </tr>
            <tr>
                <td><textarea id="address" name="address"></textarea></td>
            </tr>
            <tr>
                <td> <span id="address_error"></span></td>

            </tr>
            <tr>
                <td><label for="profile_pic1"><span>*</span>Select Profile Picture</label> </td>

            </tr>
            <tr>
                <td><input type="file" id="profile_pic1" name="profile_pic"></td>
            </tr>
            <tr>
                <td> <span id="profile_error"></span></td>

            </tr>
            <tr>
                <td align="center"> <input type="submit" id="submit1" value="Register" name="reg_btn"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if (isset($_POST['reg_btn'])) {
    $fn = $_POST['fn'];
    $em = $_POST['em'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    $hobbies = implode(',', $hobbies);
    $state = $_POST['state'];
    $pwd = $_POST['pwd'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $profile_pic = $_FILES['profile_pic']['name'];

    $q = "INSERT INTO `registration`(`fullname`, `email`, `gender`, `hobbies`, `state`, `mobile`, `password`, `address`, `profile_pic`) values('$fn','$em','$gender','$hobbies','$state',$mobile,'$pwd','$address','$profile_pic')";

    if (mysqli_query($con, $q)) {
        if (!is_dir('profile_pictures')) {
            mkdir("profile_pictures");
        }
        move_uploaded_file($_FILES['profile_pic']['tmp_name'], "profile_pictures/" . $profile_pic);
        echo "Registration successfull";
    } else {
        echo "error in registration";
    }
}
?>