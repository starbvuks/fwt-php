<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WoxsenSOT";

// establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
} else {
    echo "Connected to DB";
}

// create tables
$sql = "CREATE TABLE AIML (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_ID VARCHAR(30) NOT NULL,
    course_name VARCHAR(30) NOT NULL,
    min_pass INT(6),
    mode VARCHAR(30) NOT NULL
);

CREATE TABLE DSAI (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_ID VARCHAR(30) NOT NULL,
    course_name VARCHAR(30) NOT NULL,
    min_pass INT(6),
    mode VARCHAR(30) NOT NULL
);
SA
CREATE TABLE BIC (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_ID VARCHAR(30) NOT NULL,
    course_name VARCHAR(30) NOT NULL,
    min_pass INT(6),
    mode VARCHAR(30) NOT NULL
)";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
