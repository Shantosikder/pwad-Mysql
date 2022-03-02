<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwad50";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO employees (id,firstname, lastname, email,phone) VALUES (?, ?, ?,?,?)");
$stmt->bind_param("sssss", $id, $firstname, $lastname, $email,$phone);


$id = 'emp006';
$firstname = "Shanto";
$lastname = "Sikder";
$email = "john@example.com";
$phone = '01799541685';
$stmt->execute();

$id = 'emp007';
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$phone = '01799541685';
$stmt->execute();

$id = 'emo008';
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$phone = '01799541685';
$stmt->execute();


$id = 'emp009';
$firstname = "rana";
$lastname = "Sikder";
$email = "john@ple.com";
$phone = '01799541685';
$stmt->execute();

echo "New records created successfully";


$stmt->close();
$conn->close();
?>