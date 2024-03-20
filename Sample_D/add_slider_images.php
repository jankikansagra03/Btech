<?php
include_once("header.php");
?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Add Slider Images</h2>
            <form action="add_slider_images.php" id="form1" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image1">Select image:</label>
                    <input type="file" class="form-control" id="image1" name="slider">
                    <span id="em_err"></span>
                </div>

                <input type="submit" class="btn btn-dark" name="btn" value="Submit" />
            </form>
        </div>
    </div>
</div>

<br>
<?php
include_once("footer.php");
?>


<?php

if (isset($_POST['btn'])) {
    $image_name = uniqid() . $_FILES['slider']['name'];
    $q = "INSERT INTO `image_slider`(`IMAGE_NAME`) VALUES ('$image_name')";
    if (mysqli_query($con, $q)) {
        if (!is_dir("images/slider")) {
            mkdir("images/slider");
        }
        move_uploaded_file($_FILES['slider']['tmp_name'], "images/slider/" . $image_name);
        echo "file uploaded successfully";
    } else {
        echo "error";
    }
}
