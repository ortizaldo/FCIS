<?php
$servername = "localhost";
$username = "root";
$password = "2012116664";
$dbname = "breeders";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>