<?php
// Establish database connection
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "hh";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cake_type = $_POST['cake_type'];
$quantity = $_POST['quantity'];
$special_message = $_POST['special_message'];
$address = $_POST['address'];

// Insert data into orders table
$sql = "INSERT INTO orders(name, email, phone_number, cake_type, quantity, special_message, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssiss", $name, $email, $phone, $cake_type, $quantity, $special_message, $address);

// Validate inputs
if (empty($name) || empty($email) || empty($phone) || empty($cake_type) || empty($address) || $quantity < 1 || $quantity > 10) {
    echo "Invalid input data.";
} else {
    if ($stmt->execute() === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$stmt->close();
$conn->close();
?>