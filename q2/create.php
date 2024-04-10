<?php
$servername = "localhost";
$username = "root";
$password = "root"; // By default, XAMPP has no password
$dbname = "test"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE orders (
    order_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    quantity INT(11) NOT NULL,
    size VARCHAR(10) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table orders created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>