<?php
$servername = "localhost";
$username = "root";
$password = "null";
$dbname="mydb";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE".$dbname;

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn2 = new mysqli($servername, $username, $password,$dbname);



$sql2 = "CREATE TABLE feedback (
name varchar(30);
email varchar(50);
message varchar(500);
)";

if ($conn->query($sql2) === TRUE) {
    echo "Table feedback created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 