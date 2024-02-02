<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "2024_practice");

// $q = "create table registration(
//     fullname varchar(255) not null,
//     email varchar(255) primary key,
//     password varchar(255) not null,
//     mobile int(10) not null,
//     gender char(7) not null
// )";
// if (mysqli_query($con, $q)) {
//     echo "Database created";
// } else {
//     echo "error creating database";
// }
