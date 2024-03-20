<?php
include_once("connection.php");
$u = $_SERVER['REQUEST_URI'];
$u = parse_url($u, PHP_URL_PATH);
$u_array = explode("/", $u);
//echo $u_array[3];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/validator.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#"><img src="images/logo_white.png" height="25%" width="25%" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if ($u_array[3] == "index.php") {
                                            echo "active";
                                        } ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if ($u_array[3] == "events.php") {
                                            echo "active";
                                        } ?>" href="events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if ($u_array[3] == "about.php") {
                                            echo "active";
                                        } ?>" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if ($u_array[3] == "contact.php") {
                                            echo "active";
                                        } ?>" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if ($u_array[3] == "login.php") {
                                            echo "active";
                                        } ?>" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                                        if ($u_array[3] == "register.php") {
                                            echo "active";
                                        } ?>" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>