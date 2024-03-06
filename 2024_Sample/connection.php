<?php
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "2024_sample");
//Create database24_+sample

// $q = "create database 2024_sample";
// Registration table
// $q = "create table registration(
//     fullname varchar(255) not null,
//     email varchar(255) primary key,
//     gender char(7) default 'Male',
//     hobbies char(100),
//     state char(50),
//     mobile int(10) not null,
//     password varchar(255) not null,
//     address varchar(300),
//     profile_pic varchar(255),
//     role char(20) default 'Normal',
//     status char(20) default 'Inactive')";
// mysqli_query($con, $q);
