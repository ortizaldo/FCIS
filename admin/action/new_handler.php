<?php
include 'check-login.php';
$contact_no = $_POST['contact_no'];

  include '../../config/db_config.php';
$sql = "SELECT * FROM handlers WHERE contact_no = '$contact_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      header("location:../handler.php?err=Phone number must be unique");
    }
} else {
	$handler = $_POST['handler'];
	$address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
      $contact_person = $_POST['contact_person'];
	$handler_id = 'S-'.rand(1000,9999).'';
  include '../../config/db_config.php';
  
  $sql = "INSERT INTO handlers (handler_id,handler_name, address, contact_person, contact_no, shop)
VALUES ('$handler_id', '$handler', '$address', '$contact_person', '$contact_no',
'$SEshopno')";

if ($conn->query($sql) === TRUE) {
	
  header("location:../pages/tables/handler.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}



?>