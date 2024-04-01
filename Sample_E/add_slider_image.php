<?php
include_once("guest_header.php");
?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Add new Slider Image</h2>
            <form action="add_slider_image.php" method="post" id="form1" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="file" class="form-control" id="slider1" name="slider">
                </div>

                <input type="submit" class="btn" value="Submit" name="btn" />


            </form>
        </div>
    </div>
</div>
<br>

<?php
include_once("footer.php");


if (isset($_POST['btn'])) {
    if ($_FILES['slider']['name'] == "") {
        echo "select a file to upload";
    } else {
        $slider_name = uniqid() . $_FILES['slider']['name'];

        $q = "insert into image_slider (`image_name`) values ('$slider_name')";
        if (mysqli_query($con, $q)) {
            echo "Image uploaded successfully.";
            if (!is_dir("images/slider")) {
                mkdir("images/slider");
            }
            move_uploaded_file($_FILES['slider']['tmp_name'], "images/slider/" . $slider_name);
        } else {
            echo "error";
        }
    }
}
