<?php
// MySQLi Object-oriented
$servername = "localhost";
$username = "root";
$password = "password";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
} 
// Now, create the Data Base
$sql = "CREATE DATABASE HOSPITAL";
if ($conn->query($sql) === TRUE) {
    echo "DataBase create successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>
