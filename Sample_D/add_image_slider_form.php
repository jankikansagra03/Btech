<?php
include_once("admin_header.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Image Slider Form</h2>
            <form action="add_image_slider_form.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file1">Select File:</label>
                    <input type="file" class="form-control" id="file1" name="slider1">
                </div>

                <input type="submit" class="btn btn-dark" name="btn" value="Submit">
            </form>
        </div>
    </div>
</div>


<?php
if (isset($_POST['btn'])) {
    $image_name = uniqid() . $_FILES['slider1']['name'];

    $q = "INSERT INTO `slider_images`(`image_name`) VALUES ('$image_name')";

    if (mysqli_query($con, $q)) {
        echo "image uploaded successfully";
        if (!is_dir("images/slider")) {
            mkdir("images/slider");
        }
        move_uploaded_file($_FILES['slider1']['tmp_name'], "images/slider/" . $image_name);
?>
        <script>
            window.location.href = "manage_slider.php";
        </script>
<?php
    } else {
        echo "error uploading image";
    }
}
