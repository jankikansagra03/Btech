<?php
include_once("admin_header.php");
$em = $_SESSION['admin_uname'];
//echo $em;

$q = "select * from registration where email='$em'";
$result = mysqli_query($con, $q);

while ($row = mysqli_fetch_array($result)) {
?>
    <div class="container-fluid">
        <div class="row">
            <div class=col-lg-3></div>
            <div class=col-lg-6>
                <form action="admin_update_profile.php" method="post" enctype="multipart/form-data" id="form1">
                    <div class="form-group">
                        <label for="fn1"><b>Fullname:</b></label>
                        <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn" value="<?php echo $row[0]; ?>">
                        <span id="fn_err"></span>
                    </div>


                    <div class="form-group">
                        <label for="gen1"><b>Select Gender:</b></label>
                        <br>
                        <input type="radio" id="gen1" name="gen" value="Male" <?php
                                                                                if ($row[2] == "Male") {
                                                                                    echo "checked";
                                                                                }  ?>> Male
                        <input type="radio" id="" name="gen" value="Female" <?php
                                                                            if ($row[2] == "Female") {
                                                                                echo "checked";
                                                                            } ?>> Female
                        <span id="gen_err"></span>
                    </div>
                    <div class="form-group">
                        <label for="mobile1"><b>Mobile Number: </b></label>
                        <input type="number" class="form-control" id="mobile1" placeholder="1234567890" name="mobile" value="<?php echo $row[3]; ?>">
                        <span id="mobile_err"></span>
                    </div>
                    <div>
                        <img src="images/profile_pictures/<?php echo $row[6]; ?>" alt="" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="file1"><b>Select Profile Picture:</b></label>
                        <input type="file" class="form-control" id="file1" name="pic1">
                        <span id="file2_err"></span>
                    </div>
                    <input type="submit" class="btn" value="Submit" name="btn">
                </form>
            </div>
        </div>
    </div>
<?php
}
