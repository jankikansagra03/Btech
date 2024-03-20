<body>
    <form action="A_add_slide_images.php" method="post" enctype="multipart/form-data">
        Select image: <input type="file" name="slider1" id="">
        <br>
        <input type="submit" value="Upload Image" name="btn">
    </form>
</body>
</html>
<?php

if (isset($_POST['btn'])) {
    $image_name = uniqid() . $_FILES['slider1']['name'];
    $con = mysqli_connect("localhost", "root", "", "btech_e");
    $q = "INSERT INTO `slider_images`(`image_name`) VALUES ('$image_name')";

    if (mysqli_query($con, $q)) {
        if (!is_dir("images/slider")) {
            mkdir("images/slider");
        }
        move_uploaded_file($_FILES['slider1']['tmp_name'], "images/slider/" . $image_name);
        echo "image uploaded successfully";
    } else {
        echo "Error inn uploading image";
    }
}
