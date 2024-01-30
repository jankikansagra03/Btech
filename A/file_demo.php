<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="file_demo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="f1[]" id="" multiple>
        <br><input type="submit" value="upload file" name="btn">
    </form>
</body>

</html>

<?php
if (isset($_POST['btn'])) {
    $count = count($_FILES['f1']['name']);
    for ($i = 0; $i < $count; $i++) {
        //  echo $_FILES['f1']['type'][$i] . "<br>";
        // //echo "Filename " . $i . $_FILES['f1']['name'][$i] . "<br>";
        if ($_FILES['f1']['type'][$i] == "image/png" || $_FILES['f1']['type'][$i] == "image/jpeg") {
            if ($_FILES['f1']['size'][$i] <= 102400) {
                if (!is_dir('uploads')) {
                    mkdir("uploads");
                }
                if (move_uploaded_file($_FILES['f1']['tmp_name'][$i], "uploads/" . $_FILES['f1']['name'][$i])) {

                    echo "<span style='color:green'><b>" . $_FILES['f1']['name'][$i] . "</b></span>" . " Uploaded successfully <br>";
                }
            } else {
                echo "<span style='color:red'><b>" . $_FILES['f1']['name'][$i] . "</b></span>" . " file was not uploded as it's size is greater than 100kb <br>";
            }
        } else {
            echo "<span style='color:red'><b>" . $_FILES['f1']['name'][$i] . "</b></span>" . " file was not uploded as it is not an image file <br>";
        }
    }
}
