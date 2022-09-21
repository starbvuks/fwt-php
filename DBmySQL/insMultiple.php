<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Students(firstname, lastname, email)
VALUES ('Apoorva', 'Nim', 'apoorvz@email.com'), ('Harsh', 'm', 'mor@email.com'), ('Sarvag', 'kalar', 'k@email.com');
";

if ($conn->multi_query($sql) == TRUE) {
    echo "New records created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
