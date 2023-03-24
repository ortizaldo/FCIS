<?php
$servername = "192.168.0.10";
$username = "havamasteruser";
$password = "root";
$dbname = "breeders";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>