<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tutorial_4.php" method="post" enctype="multipart/form-data">
        Select a file to upload: <input type="file" name="f1" id="">
        <br>
        <input type="submit" value="Upload file" name="btn">

    </form>
</body>

</html>

<?php
$dir = "myuploads";
if (isset($_POST['btn'])) {
    if ($_FILES['f1']['name'] == "") {
        echo "<span style='color:red'>Select a file to upload</span>";
    } else {
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        if (move_uploaded_file($_FILES['f1']['tmp_name'], $dir . "/" . $_FILES['f1']['name'])) {
            echo "<span style='color:green'>File uploaded succesfully</span>";
        }
    }
}
?>
<h2>List of files:</h2>
<table border="2">
    <tr>
        <th>Sr.NO</th>
        <th>File name</th>
        <th>Download</th>
        <th>Delete</th>
    </tr>
    <?php
    if (!is_dir($dir)) {
        echo "<span style='color:red'>Uploads directory is empty. please uppload a file.</span>";
    } else {
        $ptr = opendir($dir); 
            $files1 = scandir($dir);
            $i = 1;
            foreach ($files1 as $file1) {
                if ($file1 != "." && $file1 != "..") {
    ?>


                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $file1; ?></td>
                        <td> <a href="<?php echo $dir . '/' . $file1; ?>" download>
                                <input type="button" value="Download"></a> </td>
                        <td>
                            <a href="delete.php?fname=<?php echo $file1; ?> ">
                                <input type="button" value="Delete">
                            </a>
                        </td>
                    </tr>
    <?php
                    $i++;
                }
            }
        }
    ?>
</table>