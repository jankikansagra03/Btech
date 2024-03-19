<?php
$con = mysqli_connect("localhost", "root", "", "sample_A");

// $prod = "create table products(
//     prod_id int(5) primary key auto_increment,
//     prod_name varchar(100) not null,
//     prod_description varchar(500) not null,
//     prod_price int(5) not null,
//     prod_quantity int(5) not null,
//     prod_category varchar(50) not null      
// )";

// if (mysqli_query($con, $prod)) {
//     echo "table products created";
// } else {
//     echo "error";
// }
