<?php
//Connect to MySQL database

$servername = "localhost";
$username = "root";
$password = "Bangarang4$";
$dbname = "baseball_01";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>