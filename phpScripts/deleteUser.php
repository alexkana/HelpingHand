<?php
session_start();
global $conn;
include("dbconnect.php5");
$id = $_SESSION['id'];
$sql_query = "DELETE FROM users WHERE id='$id'";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['about']);
unset($_SESSION['email']);
unset($_SESSION['id']);

$conn->close();
header("Location: ../pages/LoginPage.php");
exit;