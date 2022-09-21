<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// db creation
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "DB Created Succesfully";
} else {
    echo "Err creating DB: " . $conn->err;
}


$conn->close();
