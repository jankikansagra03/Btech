<?php

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "tutorial_4");
//$q = "create database tutorial_4";
// $q = "create table products(product_id varchar(8) primary key,
// product_name varchar(50) not null,
// product_description varchar(255) not null,
// product_price int(5) not null,
// product_quantity int(3) not null,
// product_category varchar(50) not null,
// product_image varchar(255) not null)";
// if (mysqli_query($con, $q)) {
//     echo "table created successfully";
// } else {
//     echo "table not created";
// }
