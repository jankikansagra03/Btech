<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Selection</title>
</head>

<body>

    <form action="checkbox_multi_select_dropdown.php" method="post">
        <label for="football">
            <input type="checkbox" id="football" name="sports[]" value="football"> Football
        </label><br>

        <label for="basketball">
            <input type="checkbox" id="basketball" name="sports[]" value="basketball"> Basketball
        </label><br>

        <label for="soccer">
            <input type="checkbox" id="soccer" name="sports[]" value="soccer"> Soccer
        </label><br>

        <label for="tennis">
            <input type="checkbox" id="tennis" name="sports[]" value="tennis"> Tennis
        </label><br>

        <label for="baseball">
            <input type="checkbox" id="baseball" name="sports[]" value="baseball"> Baseball
        </label><br>

        <br>
        <label for="sports">
            Select your favorite sports:
        </label><br>

        <select id="sports" name="sport1[]" multiple>
            <option value="football">Football</option>
            <option value="basketball">Basketball</option>
            <option value="soccer">Soccer</option>
            <option value="tennis">Tennis</option>
            <option value="baseball">Baseball</option>
        </select><br>

        <input type="submit" value="Submit" name="btn">
    </form>

</body>

</html>

<?php
echo "<br>";
if (isset($_POST['btn'])) {
    if (isset($_POST['sports'])) {
        $sports_check = $_POST['sports'];
        // if (count($sports_check) > 0) {
        echo count($sports_check) . " option(s) Selected: <br>";
        foreach ($sports_check as $s) {
            echo $s . "<br>";
        }
        // }
    } else {
        echo "no checkbox selected";
    }
    echo "<br>";
    if (isset($_POST['sport1'])) {
        $sports_select = $_POST['sport1'];
        // if (count($sports_select) > 0) {
        echo count($sports_select) . " chechbox(es) Selected: <br>";
        foreach ($sports_select as $s) {
            echo $s . "<br>";
        }
        // }
    } else {
        echo "no values selected";
    }
    echo "<br>";
}
