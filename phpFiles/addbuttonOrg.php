<?php
session_start();
$host = "localhost";
$db = "database_structure";
$db_user = "admin";
$db_password = "admin1234";
$charset = 'utf8mb4';

$org_name = $_POST['org_name'];
$org_link = $_POST['org_link'];

$conn = new mysqli($host, $db_user, $db_password, $db);

$sql_query = "INSERT INTO organizationdata (title,url,imagePath,description_EN,description_GR) VALUES ('$org_name','$org_link','','','');";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../pages/Admin.php");
exit;