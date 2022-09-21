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


$sql = "DELETE FROM BIC WHERE course_ID='BIC002'";

if ($conn->query($sql) === TRUE) {
    echo 'Record deleted successfully';
} else {
    echo 'Error deleting record: ' . $conn->error;
}

$conn->close();
