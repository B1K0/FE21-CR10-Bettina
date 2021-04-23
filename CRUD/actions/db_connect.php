<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "CR10-Bettina-BigLibrary";

// creates connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

// checks connection
// if($connect->connect_error) {
//    die("Connection failed: " . $connect->connect_error);
// }else {

//     echo "Successfully Connected";

// }