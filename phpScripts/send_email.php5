<?php
global $conn;
include("dbconnect.php5");
$email = $_POST["user_email"];
$text = $_POST["message"];
if($email == null or $text == null)
    exit();
$sql_query = "INSERT INTO emails (sender, content) VALUES ('$email','$text');";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}
$conn->close();
header("Location: ../pages/contact.php");
exit;