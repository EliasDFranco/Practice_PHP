<?php
$servername = "localhost";
$username = "root";
$password = "helloworld";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Connection failed: " . mysqli_connect($conn));
}

$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?> 