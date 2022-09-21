<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WoxsenSOT";

// create connecion
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// insert data
$sql = "INSERT INTO AIML(course_ID, course_name, min_pass, mode)
VALUES ('AIML001', 'Convolutional Neural Networks', '40', 'Theory'), ('AIML002', 'Machine Learning', '60', 'Both');

INSERT INTO DSAI(course_ID, course_name, min_pass, mode)
VALUES ('DSAI001', 'Data Mining', '40', 'Practical'), ('DSAI002', 'Web Scraping', '45', 'Both');

INSERT INTO BIC(course_ID, course_name, min_pass, mode)
VALUES ('BIC001', 'OOPS', '40', 'Both'), ('BIC002', 'COA', '60', 'Theory');";

if ($conn->multi_query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
