<?php
echo "<link rel='stylesheet' type='text/css' href='styles.css'>";
echo "<div class='code-container'>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $quantity1 = $_POST['quantity1'];
    $quantity2 = $_POST['quantity2'];
    $size1 = isset($_POST['size1']) ? $_POST['size1'] : "";
    $size2 = isset($_POST['size2']) ? $_POST['size2'] : "";
    $product1 = isset($_POST['product1']) ? $_POST['product1'] : 0;
    $product2 = isset($_POST['product2']) ? $_POST['product2'] : 0;

    if (empty($fname) || empty($lname) || empty($phno) || empty($email) || ((empty($size1) && empty($size2))) || (empty($quantity1) && empty($quantity2))) {
        die("All fields are required.");
    } 

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if ($product1 == 1) {
        $sql1 = "INSERT INTO orders (first_name, last_name, email, phone_number, quantity, size, product_id) VALUES ('$fname', '$lname', '$email', '$phno', '$quantity1', '$size1', '$product1')";
        if ($conn->query($sql1) === TRUE) {
            echo "<div class='success'>Success: Order Created Successfully for product 1</div><br>";
        } 
        else {
            echo "<div class='error'>Error: " . $sql1 . "<br>" . $conn->error . "</div>";
        }
    }

    if ($product2 == 2) {
        $sql2 = "INSERT INTO orders (first_name, last_name, email, phone_number, quantity, size, product_id) VALUES ('$fname', '$lname', '$email', '$phno', '$quantity2', '$size2', '$product2')";
        if ($conn->query($sql2) === TRUE) {
            echo "<div class='success'>Success: Order Created Successfully for product 2</div>";
        } 
        else {
            echo "<div class='error'>Error: " . $sql2 . "<br>" . $conn->error . "</div>";
        }
    }

    if ($product1 == 0 && $product2 == 0) {
        echo "<div class='error'>Error: Select a product</div>";
    }

    $conn->close();
} 
else {
    die("DIE");
}
echo "</div>";
?>