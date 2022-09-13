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

$sql = "SELECT * FROM DSAI";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "course_ID: " . $row["course_ID"] . "<br>" . "course_name: " . $row["course_name"] . "<br>";
    }
} else {
    echo 'Error selecting record: ' . $conn->error;
}

$conn->close();
