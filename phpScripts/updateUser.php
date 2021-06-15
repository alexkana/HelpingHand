<?php
session_start();
global $conn;
include("dbconnect.php5");
$username = $conn->real_escape_string($_POST["username"]);
$email = $conn->real_escape_string($_POST["email"]);
$password = $conn->real_escape_string($_POST['pass']);
$about = $conn->real_escape_string($_POST['desc']);
$id = $_SESSION['id'];
$sql_query = "UPDATE users SET name='$username',password='$password',email='$email',about='$about' WHERE id='$id'";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
    $_SESSION['update_error'] = '<p style="color:red;" >A user with this name or email already exists!</p>';
}else{
    unset($_SESSION['update_error']);
    $_SESSION['username'] = stripcslashes($username);
    $_SESSION['password'] = stripcslashes($password);
    $_SESSION['about'] = stripcslashes($about);
    $_SESSION['email'] = stripcslashes($email);
}
$conn->close();
header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;