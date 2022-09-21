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

CREATE TABLE BIC (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_ID VARCHAR(30) NOT NULL,
    course_name VARCHAR(30) NOT NULL,
    min_pass INT(6),
    mode VARCHAR(30) NOT NULL
);

INSERT INTO AIML(course_ID, course_name, min_pass, mode)
VALUES ('AIML001', 'Convolutional Neural Networks', '40', 'Theory'), ('AIML002', 'Machine Learning', '60', 'Both');

INSERT INTO DSAI(course_ID, course_name, min_pass, mode)
VALUES ('DSAI001', 'Data Mining', '40', 'Practical'), ('DSAI002', 'Web Scraping', '45', 'Both');

INSERT INTO BIC(course_ID, course_name, min_pass, mode)
VALUES ('BIC001', 'OOPS', '40', 'Both'), ('BIC002', 'COA', '60', 'Theory');

UPDATE AIML SET min_pass=45 WHERE course_ID='AIML001';

DELETE FROM BIC WHERE course_ID='BIC002';";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
