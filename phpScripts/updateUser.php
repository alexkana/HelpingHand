<?php
session_start();
global $conn;
include("dbconnect.php5");
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST['pass'];
$about = $_POST['desc'];
$id = $_SESSION['id'];
$sql_query = "UPDATE users SET name='$username',password='$password',email='$email',about='$about' WHERE id='$id'";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
    $_SESSION['update_error'] = '<p style="color:red;" >A user with this name or email already exists!</p>';
}else{
    unset($_SESSION['update_error']);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['about'] = $about;
    $_SESSION['email'] = $email;
}
$conn->close();
header("Location: ../pages/UserPage.php");
exit;