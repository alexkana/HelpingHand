<?php
global $conn;
include("dbconnect.php5");
$email = $_POST["user_email"];
$text = $_POST["message"];
$sql_query = "INSERT INTO emails (`from`, content) VALUES ('$email','$text');";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}
$conn->close();
header("Location: contact.html");
exit;