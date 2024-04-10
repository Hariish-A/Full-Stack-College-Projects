<?php
echo "<link rel='stylesheet' type='text/css' href='styles.css'>";
echo "<div class='code-container'>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "admin";
    $password = "";
    $dbname = "data";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $sex = isset($_POST['sex']) ? $_POST['sex'] : ''; 
    $language = isset($_POST['language']) ? implode(',', $_POST['language']) : '';
    $about = $_POST['about'];
    $sql = "INSERT INTO user (userid, password, name, address, email, country, zipcode, sex, language, about) VALUES ('$userid', '$password', '$name', '$address', '$email', '$country', '$zipcode', '$sex', '$language', '$about')";
 
    if ($conn->query($sql) === TRUE) {
        echo "<div class='success'>New record created successfully</div>";
    } else {
        echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
} else {
    die("DIE");
}
echo "</div>";
?>
