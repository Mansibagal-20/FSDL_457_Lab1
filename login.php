<?php
$conn = new mysqli("localhost", "root", "", "fullstackdev");

$email = trim($_POST['email']);
$passwoard = trim($_POST['passwoard']);

echo "Email entered: " . $email . "<br>";
echo "Password entered: " . $passwoard . "<br>";

$sql = "SELECT * FROM uses_table 
        WHERE email='$email' AND passwoard='$passwoard'";

$result = $conn->query($sql);

echo "Rows found: " . $result->num_rows;
?>