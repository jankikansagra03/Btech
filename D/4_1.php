<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4_1.php" method="post" enctype="multipart/form-data">
        Select a file: <input type="file" name="f1" id="">
        <br>
        <input type="submit" value="Upload file" name="btn">
    </form>
</body>
</html>
<?php
$dir = "uploads";
if (isset($_POST['btn'])) {
    if ($_FILES['f1']['name'] == "") {
?>
        <span style="color:red">Please select a file to upload.</span>
        <?php
    } else {
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        if (move_uploaded_file($_FILES['f1']['tmp_name'], $dir . "/" . $_FILES['f1']['name'])) {
        ?>
            <span style="color:green">File uploaded successfully</span>
        <?php
        } else {
        ?>
            <span style="color:red">Erro in uploading file</span>
    <?php
        }
    }
}
if (!is_dir($dir)) {
    ?>
    <span style="color:red">Your uploads directory is empty . please upload file to view contents.</span> <br>
<?php
} else {
    $h = opendir($dir);
?>
    <table border="2" style="border-collapse:collapse">
        <tr>
            <th>Sr.NO</th>
            <th>Filename</th>
            <th>Delete</th>
            <th>Download</th>
        </tr>

        <?php
        $files = scandir($dir);
        $i = 1;
        foreach ($files as $file1) {
            if ($file1 != "." && $file1 != "..") {
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $file1; ?></td>
                    <td>
                        <a href="delete.php?file_name=<?php echo $file1; ?>">
                            <input type="button" value="Delete">
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo $file1; ?>" download>
                            <input type="button" value="Download"></a>
                    </td>
                </tr>
    <?php
                $i++;
            }
        }
    }
    ?>
    </table>