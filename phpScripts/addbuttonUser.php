<?php
session_start();
$host = "localhost";
$db = "database_structure";
$db_user = "admin";
$db_password = "admin1234";
$charset = 'utf8mb4';
$conn = new mysqli($host, $db_user, $db_password, $db);

$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$password =$conn->real_escape_string( $_POST['password']);
if ($email == null or $username == null)
exit();

if ($conn->connect_error) {
    echo '<p>Error connecting to the database <br>';
    echo 'Please try again.</p>';
    exit();
}
$sql_query = "INSERT INTO users (name,password,email) VALUES ('$username','$password','$email');";
if ($conn->query($sql_query) == false) {
    $_SESSION['add_error'] = '<p style="color:red;" >A user with this name or email already exists!</p>';
} else {
    $_SESSION['add_error'] = '<p>Account created &#9989;</p>';

    $conn->close();
    session_write_close();
    header("Location: ../pages/Admin.php");
    exit;
}

$conn->close();
header("Location: ../pages/Admin.php");
exit;