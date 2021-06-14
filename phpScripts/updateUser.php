<?php
session_start();
global $conn;
include("dbconnect.php5");
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST['pass'];
$about = $_POST['desc'];
$id = $_GET['id'];
$sql_query = "UPDATE users SET name='$username',password='$password',email='$email',about='$about' WHERE id=$id";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}
$conn->close();
//header("Location: ../pages/contact.html");
exit;