<?php
$conn = new mysqli("localhost", "root", "", "fullstackdev");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$passwoard = $_POST['passwoard'];

$sql = "INSERT INTO uses_table (name, age, email, passwoard)
        VALUES ('$name', '$age', '$email', '$passwoard')";

if ($conn->query($sql) === TRUE) {
    echo "Signup Successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>