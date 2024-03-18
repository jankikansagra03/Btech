<?php
$con = mysqli_connect("localhost", "root", "", "sample_A");

//$q = "create database Sample_A";

// $reg = "create table registration(
//     fullname char(35) not null,
//     email varchar(50) primary key,
//     password varchar(20) not null,
//     profile_picture varchar(255) not null,
//     role char(10) not null default 'user',
//     status char(10) not null default 'Inactive'
//     )";

$events = "create table event_details(event_id int(5) primary  key Auto_increment,
event_title varchar(255) not null, event_description text(500) not null,event_date date not null,event_type varchar(255) not null, event_place varchar(255) not null, main_image varchar(255) not null, extra_images varchar(255) not null)";

mysqli_query($con, $events);
