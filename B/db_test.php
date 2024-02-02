<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// $con = mysqli_connect("localhost123", "root", "") or die("Error in connecting with database");
// $q = "create database practice_2022";
// if (mysqli_query($con, $q)) {
//     echo "table created successfully";
// } else {
//     echo "error in creating table";
// }
$servername = "localhost123";
$username = "root";
$password = "";

// Create connection
$conn = @mysqli_connect($servername, $username, $password);
if (!$conn) {
    // Display a user-friendly error message
    echo "Database connection failed. Please try again later.";

    // Log the error for further investigation
    // You can log to a file, send an email, or log to a database
    error_log("Database connection error: " . mysqli_connect_error(), 0);

    // You can redirect the user to an error page or show a friendly message
    // header("Location: error_page.php");
    exit();  // Stop script execution
} else {
    // Your database operations go here

    // Close the connection when done
    mysqli_close($conn);
}
