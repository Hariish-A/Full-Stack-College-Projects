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
$sql = "CREATE TABLE orders3 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    cake_type VARCHAR(255) NOT NULL,
    quantity INT(6) NOT NULL,
    special_message TEXT,
    address TEXT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Table 'orders' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close database connection
$conn->close();
?>