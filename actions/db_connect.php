<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "cr10_biglibrary_abdulla";

// create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}else {
    // echo "Successfully Connected";
}

