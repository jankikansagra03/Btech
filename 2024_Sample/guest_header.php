<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <link rel="stylesheet" href="css/style.css">


    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#"><img src="images/logo_white.png" alt="RKU Logo" height="25%" width="25%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($first_part == "index.php") {
                                                echo "active";
                                            } ?>" href="index.php">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link <?php if ($first_part == "event.php") {
                                                echo "active";
                                            } ?>" href="event.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($first_part == "about.php") {
                                                echo "active";
                                            } ?>" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($first_part == "contact.php") {
                                                echo "active";
                                            } ?>" href=contact.php>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($first_part == "login.php") {
                                                echo "active";
                                            } ?>" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($first_part == "register.php") {
                                                echo "active";
                                            } ?>" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>


    </div>
    <br>

</body>

</html>