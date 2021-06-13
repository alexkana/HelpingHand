<?php
$host = "localhost";
$db = "database_structure";
$user = "root";
$password = "christos";
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    echo '<p>Error connecting to the database <br>';
    echo 'Please try again.</p>';
    exit();
}
