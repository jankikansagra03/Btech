<?php
include_once("connection.php");
$em = $_REQUEST['em'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <link rel="stylesheet" href="css/form_style.css">
    <script src="js/validator.js"> </script>
</head>

<body>


    <?php
    $q = "select * from registration where email='$em'";

    $result = mysqli_query($con, $q);

    while ($a = mysqli_fetch_array($result)) {
        $hobbies = $a[3];
        $hobbies = explode(",", $hobbies);
    ?>
        <form id="reg" action="update_user_data.php" method="post" enctype="multipart/form-data">



            <table align="center" style="border: 1px solid black;background-color:#ebf0f0; padding: 30px;" width="50%">
                <tr>
                    <td align=" center">
                        <h1>Update Profile</h1>
                    </td>
                </tr>
                <tr>
                    <td><label for="fn1"><span>*</span>Fullname</label> </td>

                </tr>
                <tr>
                    <td><input type="text" name="fn" id="fn1" placeholder="Ex. Janki Kansagra name" value="<?php echo $a[0]; ?>">
                    </td>
                </tr>
                <tr>
                    <td> <span id="fn1_error"></span></td>

                </tr>
                <tr>
                    <td><label for="email1"><span>*</span>Email Address</label> </td>

                </tr>
                <tr>
                    <td><input type="text" name="em" id="email1" placeholder="Ex. janki.kansagra@rku.ac.in" value="<?php echo $a[1]; ?>" readonly></td>
                </tr>
                <tr>
                    <td> <span id="email_error"></span></td>

                </tr>
                <tr>
                    <td><label><span>*</span>Select Gender</label> </td>

                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="Male" <?php if ($a[2] == "Male") {
                                                                            echo "checked";
                                                                        } ?>>Male
                        <input type="radio" name="gender" value="Female" <?php
                                                                            if ($a[2] == "Female") {
                                                                                echo "checked";
                                                                            } ?>>Female
                    </td>
                </tr>
                <tr>
                    <td> <span id="gender_error"></span></td>

                </tr>
                <tr>
                    <td><label><span>*</span>Select Hobbies</label> </td>

                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="hobbies[]" value="Watching Movies" <?php if (in_array("Watching Movies", $hobbies)) {
                                                                                            echo "checked";
                                                                                        } ?>>Watching Movies
                        <input type="checkbox" name="hobbies[]" value="Reading Books" <?php if (in_array("Reading Books", $hobbies)) {
                                                                                            echo "checked";
                                                                                        } ?>>Reading Books
                        <input type="checkbox" name="hobbies[]" value="Cooking" <?php if (in_array("Cooking", $hobbies)) {
                                                                                    echo "checked";
                                                                                } ?>>Cooking
                        <input type="checkbox" name="hobbies[]" value="Playing Sports" <?php if (in_array("Playing Sports", $hobbies)) {
                                                                                            echo "checked";
                                                                                        } ?>>Playing

                        Sports
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
                            <option value="Gujarat" <?php if ($a[4] == "Gujarat") {
                                                        echo "selected";
                                                    } ?>>Gujarat</option>
                            <option value="Andhra Pradesh" <?php if ($a[4] == "Andhra Pradesh") {
                                                                echo "selected";
                                                            } ?>>Andhra Pradesh</option>
                            <option value="Assam" <?php if ($a[4] == "Assam") {
                                                        echo "selected";
                                                    } ?>>Assam</option>
                            <option value="Telangana" <?php if ($a[4] == "Telangana") {
                                                            echo "selected";
                                                        } ?>>Telangana</option>
                            <option value="Bihar" <?php if ($a[4] == "Bihar") {
                                                        echo "selected";
                                                    } ?>>Bihar</option>
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
                    <td><input type="text" name="mobile" id="mobile1" placeholder="Ex. 1234567890" value="<?php echo $a[5]; ?>"></td>
                </tr>
                <tr>
                    <td> <span id="mobile_error"></span></td>

                </tr>
                <tr>
                    <td><label for="pwd1"><span>*</span>Password</label> </td>

                </tr>
                <tr>
                    <td><input type="text" name="pwd" id="pwd1" value="<?php echo $a[6]; ?>"></td>
                </tr>
                <tr>
                    <td> <span id="pwd_error"></span></td>

                </tr>
                <tr>
                    <td><label for="repwd1"><span>*</span>Confirm Password</label> </td>

                </tr>
                <tr>
                    <td><input type="text" name="repwd" id="repwd1" value="<?php echo $a[6]; ?>"></td>
                </tr>
                <tr>
                    <td> <span id="repwd_error"></span></td>

                </tr>
                <tr>
                    <td><label for="address"><span>*</span>Address</label> </td>

                </tr>
                <tr>
                    <td><textarea id="address" name="address"><?php echo $a[7]; ?></textarea></td>
                </tr>
                <tr>
                    <td> <span id="address_error"></span></td>

                </tr>
                <tr>
                    <td><label for="profile_pic1"><span>*</span>Profile Picture</label> </td>

                </tr>
                <tr>
                    <td><img src="profile_pictures/<?php echo $a[8]; ?>" height="100px" width="100px" alt=""></td>
                </tr>
                <tr>
                    <td><input type="file" id="profile_pic1" name="profile_pic2"></td>
                </tr>
                <tr>
                    <td> <span id="profile_error2"></span></td>

                </tr>
                <tr>
                    <td align="center"> <input type="submit" id="submit1" value="Update" name="updt_btn"></td>
                </tr>
            </table>

        </form>
    <?php
    }
    ?>
</body>

</html>