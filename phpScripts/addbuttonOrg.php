<?php
session_start();
$host = "localhost";
$db = "database_structure";
$db_user = "admin";
$db_password = "admin1234";
$charset = 'utf8mb4';
$conn = new mysqli($host, $db_user, $db_password, $db);


$org_name = $conn->real_escape_string($_POST['org_name']);
$org_link = $conn->real_escape_string($_POST['org_link']);
$org_image_url = $conn->real_escape_string($_POST['org_image_url']);
$org_description_Greek = $conn->real_escape_string($_POST['org_description_Gr']);
$org_description_English = $conn->real_escape_string($_POST['org_description_En']);


$sql_query = "INSERT INTO organizationdata (title,imagePath,description_GR,description_EN,url) VALUES ('$org_name','$org_image_url','$org_description_Greek','$org_description_English','$org_link');";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../pages/Admin.php");
exit;