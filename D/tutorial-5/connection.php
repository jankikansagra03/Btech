<?php

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "demo_d");
// $q = "create table product_master(
//     prod_id int auto_increment primary key,
//     prod_name varchar(50),
//     prod_description varchar(500),
//     prod_price int(5),
//     prod_qunatity integer(5),
//     prod_image varchar(50)
// )";
//$q = "create database demo_d";
// if (mysqli_query($con, $q)) {
//     echo "table created successfully";
// } else {
//     echo "table not created";
// }
