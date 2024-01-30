<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="t1_1.php" method="get">
        Enter your name:<input type="text" name="fn" id="" placeholder="Ex-abc">
        <br>
        Enter Password: <input type="password" name="pwd" id="">
        <br>
        Select gender: <input type="radio" name="gender" value="m" id="">Male
        <input type="radio" name="gender" value="f" id="">Female
        <br>
        Select your education
        <input type="checkbox" name="edu[]" value="ssc" id="">SSC
        <input type="checkbox" name="edu[]" value="hsc" id="">HSC
        <input type="checkbox" name="edu[]" value="dipl" id="">Diploma
        <input type="checkbox" name="edu[]" value="deg" id="">Degree
        <input type="checkbox" name="edu[]" value="master" id="">M.Tech
        <input type="checkbox" name="edu[]" value="doctorate" id="">PHD
        <br>
        <input type="submit" value="Fetch details" name="btn">
    </form>
</body>

</html>
<?php
if (isset($_GET['btn'])) {
    $f_n = $_GET['fn'];
    $p = $_GET['pwd'];
    $gen = $_GET['gender'];
    $cb = $_GET['edu'];

    foreach ($cb as $y) {
        echo $y . "<br>";
    }
    echo $f_n;
?>
    <br>
<?php
    echo  $p;
    echo "<br>";
    echo $gen;
}
