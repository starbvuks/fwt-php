<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WoxsenSOT";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE AIML SET min_pass=45 WHERE course_ID='AIML001'";

if ($conn->query($sql) === TRUE) {
    echo 'Record updated successfully';
} else {
    echo 'Error updating record: ' . $conn->error;
}

$conn->close();
