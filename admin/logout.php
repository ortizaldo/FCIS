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

<?php
	include '../../config/db_config.php';

  $timestamp = date("M/d/Y g:i", time());
			$sql2 = "INSERT INTO user_log (date_login,label)
		VALUES ('$timestamp','logout')";
		$result = $conn->query($sql2);

	session_start();
	$_SESSION['loggedin'] = false;
	 
	session_destroy();
	header("location:../");
?>
