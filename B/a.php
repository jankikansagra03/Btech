<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="a.php">
        <input type="text" name="n1" id="">
        <br>
        <input type="submit" value="click" name="btn">
    </form>
</body>

</html>

<?php
if (isset($_GET['btn'])) {
    echo $_GET['n1'];
}
