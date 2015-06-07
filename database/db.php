<?php
$servername = "localhost";
$username = "root";
$password = "samuraii";
$dbname="mydb2";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE ".$dbname;

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn2 = new mysqli($servername, $username, $password,$dbname);

$sql2="USE ".$dbname;

$conn2->query($sql2);

$sql3 = "CREATE TABLE if NOT EXISTS feedback (
name varchar(30),
email varchar(50),
message varchar(500)
)";

$sql3 .="CREATE TABLE if NOT EXISTS users(
id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
username varchar(30) NOT NULL,
email varchar(30) NOT NULL,
password varchar(32) NOT NULL
)";

$sql3 .="CREATE TABLE if NOT EXISTS news(
id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
heading varchar(50) NOT NULL,
subtitle varchar(100) NOT NULL,
content varchar(1000) NOT NULL
)";

$conn2->multi_query($sql3);

// if ($conn2->query($sql3) === TRUE) {
//     echo " Table created successfully";
// } else {
//     echo " Error creating table: " . $conn2->error;
// }

$conn->close();
$conn2->close();
?> 