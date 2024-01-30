<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="multi_select_dd.php" method="post">
        <select name="sports[]" id="" multiple>
            <option value="cricket">Cricket</option>
            <option value="carrom">Carrom</option>
            <option value="volleyball">Volleyball</option>
            <option value="football">Football</option>
            <option value="chess">Chess</option>
            <option value="tennis">Tennis</option>
        </select>
        <br>
        <input type="submit" value="Select" name="btn">
    </form>
</body>

</html>


<?php

if (isset($_POST['btn'])) {
    if (isset($_POST['sports'])) {
        echo count($_POST['sports']) . "value(es) selected<br>";
        foreach ($_POST['sports'] as $a) {
            echo $a . "<br>";
        }
    } else {
        echo "No values selected";
    }
}
?>