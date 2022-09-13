<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    echo "Error: " . $conn->error;
} else {
    echo "Connecion established ";
}

$sql = "CREATE DATABASE WoxsenSOT";

if ($conn->query($sql) == TRUE) {
    echo "DB created";
} else {
    echo "Error creating db: " . $conn->error;
}

$conn->close();
