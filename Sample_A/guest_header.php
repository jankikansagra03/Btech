<?php
session_start();
include_once("connection.php");
$url = $_SERVER['REQUEST_URI'];
// echo $url;
$url = parse_url($url, PHP_URL_PATH);
$arr_url = explode("/", $url);
//echo $arr_url[3];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/validator.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/ajax.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a class="navbar-brand" href="#"><img src="images/logo_white.png" alt="RKU logo" height="25%" width="25%"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?php if ($arr_url[3] == "index.php") {
                                                        echo "active";
                                                    } ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($arr_url[3] == "event.php") {
                                                        echo "active";
                                                    } ?>" href="event.php">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($arr_url[3] == "about.php") {
                                                        echo "active";
                                                    } ?>" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($arr_url[3] == "contact.php") {
                                                        echo "active";
                                                    } ?>" href="contact.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($arr_url[3] == "login.php") {
                                                        echo "active";
                                                    } ?>" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($arr_url[3] == "register.php") {
                                                        echo "active";
                                                    } ?>" href="register.php">Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </div>