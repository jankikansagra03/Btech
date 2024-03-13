<?php
$con = mysqli_connect("localhost", "root", "", "sample_A");

//$q = "create database Sample_A";

$reg = "create table registration(
    fullname char(35) not null,
    email varchar(50) primary key,
    password varchar(20) not null,
    profile_picture varchar(255) not null,
    role char(10) not null default 'user',
    status char(10) not null default 'Inactive'
    )";
    
mysqli_query($con, $reg);
