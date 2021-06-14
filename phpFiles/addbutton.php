<?php
$host = "localhost";
$db = "database_structure";
$user = "admin";
$password = "admin1234";
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    echo '<p>Error connecting to the database <br>';
    echo 'Please try again.</p>';
    exit();
}
//$id = $_GET["id"];
//$sql_query = "DELETE FROM users WHERE id='$id'";
//if ($conn->query($sql_query) === false) {
//    echo "Error deleting record";
//}
$conn->close();
//header("Location: ../pages/Admin.php");
exit;