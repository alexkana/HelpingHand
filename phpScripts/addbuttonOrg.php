<?php
session_start();
$host = "localhost";
$db = "database_structure";
$db_user = "admin";
$db_password = "admin1234";
$charset = 'utf8mb4';

$org_name = $_POST['org_name'];
$org_link = $_POST['org_link'];
$org_image_url = $_POST['org_image_url'];
$org_description_Greek = $_POST['org_description_Gr'];
$org_description_English = $_POST['org_description_En'];

$conn = new mysqli($host, $db_user, $db_password, $db);

$sql_query = "INSERT INTO organizationdata (title,imagePath,description_GR,description_EN,url) VALUES ('$org_name','$org_image_url','$org_description_Greek','$org_description_English','$org_link');";
if ($conn->query($sql_query) === false) {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../pages/Admin.php");
exit;