<?php

$servername = 'localhost';
$username = 'root';
$password = 'Rahul@2003';
$dbname = 'user_auth';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
