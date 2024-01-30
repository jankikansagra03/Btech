<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        Select File:
        <input type="file" name="f1" id="f11">
        <br>
        <input type="file" name="f2[]" id="f2" multiple>
        <br>
        <input type="submit" value="Upload file" name="btn">

    </form>
</body>

</html>

<?php
if (isset($_POST['btn'])) {
    if ($_FILES['f1']['name'] == "") {
        echo "Please select a file to upload";
    } else {
        if ($_FILES['f1']['type'] == "image/jpg" || $_FILES['f1']['type'] == "image/png") {
            if ($_FILES['f1']['size'] <= (1024 * 200)) {
                if (!is_dir('images')) {
                    mkdir('images');
                }
                move_uploaded_file($_FILES['f1']['tmp_name'], "images/" . $_FILES['f1']['name']);
                echo "file uploaded successfully";
            } else {
                echo "Upload a file of size less than 200 KB";
            }
        } else {
            echo "only image files with extension jpeg and png are allowed";
        }
    }

    $count = count($_FILES['f2']['name']);
    if ($count > 0) {
        for ($i = 0; $i < $count; $i++) {
            //echo ($_FILES['f2']['name'][$i]);
            if ($_FILES['f2']['type'][$i] == "image/jpg" || $_FILES['f2']['type'][$i] == "image/png") {
                if ($_FILES['f2']['size'][$i] <= (1024 * 200)) {
                    if (!is_dir('images_1')) {
                        mkdir('images_1');
                    }
                    if (move_uploaded_file($_FILES['f2']['tmp_name'][$i], "images_1/" . $_FILES['f2']['name'][$i])) {
                        echo "<p><span style='color:green;font-weight:bold;'>" . $_FILES['f2']['name'][$i] . "</span> file uploaded successfully</p>";
                    }
                } else {
                    echo "<p><span style='color:red;font-weight:bold;'>" . $_FILES['f2']['name'][$i] . "</span> not uploaded as file size is greater tha 200kb</p>";
                }
            } else {
                echo "<p><span style='color:red;font-weight:bold;'>" . $_FILES['f2']['name'][$i] . "</span> not uploaded as file type is not jpg or png </p>";
            }
        }
    } else {
        echo "Please select a file to upload";
    }
}
