<?php
$host = "localhost";
$db = "database_structure";
$user = "root";
$password = "";
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    echo '<p>Error connecting to the database <br>';
    echo 'Please try again.</p>';
    exit();
}

//$sql_query = "INSERT INTO emails (`from`, content) VALUES ('Test','Shit');";
//$conn->query($sql_query);
//$conn->close();



