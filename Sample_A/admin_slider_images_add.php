<form action="admin_slider_images_add.php" method="post" enctype="multipart/form-data">

    Select Slider Image to upload: <input type="file" name="s1" id="">
    <br>
    <input type="submit" value="Upload Image" name="btn">

</form>

<?php
include_once('connection.php');
if (isset($_POST['btn'])) {
    $image_name = uniqid() . $_FILES['s1']['name'];
    $q = "INSERT INTO `slider_images`(`image_name`) VALUES ('$image_name') ";
if(mysqli_query($con,$q))
{
 if(!is_dir("images/slider"))
 {
    mkdir("images/slider");
 }
        move_uploaded_file($_FILES['s1']['tmp_name'], "images/slider/" . $image_name);
}
else
{
        echo "error in uploading image";
}

}

?>