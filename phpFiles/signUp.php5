<?php
global $conn;
include("dbconnect.php5");
$username = $_POST['login1'];
$email = $_POST['login2'];
$password = $_POST['password1'];
if($email == null or $username == null)
    exit();
$sql_query = "INSERT INTO users (name,password,email) VALUES ('$username','$password','$email');";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}
$conn->close();
header("Location: ../pages/LoginPage.html");
exit;