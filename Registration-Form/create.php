<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the orders table
$sql = "CREATE TABLE user (
    userid VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    address VARCHAR(100),
    email VARCHAR(20) NOT NULL,
    country VARCHAR(20) NOT NULL,
    zipcode INT(6),
    sex VARCHAR(5),
    language1 VARCHAR(20),
    language2 VARCHAR(20),
    about VARCHAR(200)
)";


// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo " Table 'users' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close database connection
$conn->close();
?>