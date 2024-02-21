<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="3_2.php" method="post" enctype="multipart/form-data">
        select a file to upload: <input type="file" name="f1" id="">
        <br>
        <input type="submit" value="Upload" name="btn">
    </form>
</body>

</html>


<?php

if (isset($_POST['btn'])) {
    if ($_FILES['f1']['name'] == "") {
?>
        <span style="color:red">Please select a file to upload</span>
        <?php
    } else {
        if ($_FILES['f1']['type'] == "application/pdf") {
            if ($_FILES['f1']['size'] <= 300 * 1024) {
                if (!is_dir("file_uploads")) {
                    mkdir("file_uploads");
                }
                if (move_uploaded_file($_FILES['f1']['tmp_name'], "file_uploads/" . $_FILES['f1']['name'])) {
        ?>
                    <span style="color:green">File uploaded Successfully</span>
                <?php
                } else {
                ?>
                    <span style="color:red">Error in moving file to uploads folder</span>
                <?php
                }
            } else {
                ?>
                <span style="color:red">Please select a file of size less than 100KB.</span>
            <?php

            }
        } else {
            ?>
            <span style="color:red">Please select a PDF file to upload</span>
<?php

        }
    }
}
