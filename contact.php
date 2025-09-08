<?php
include 'db_config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'contact.php');

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Message sent successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
