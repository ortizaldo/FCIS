<?php
$mypassword = base64_encode($_POST['key']);
$id = $_POST['id'];
include '../../config/db_config.php';

$sql = "SELECT * FROM shops WHERE shop_password = '$mypassword' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
			header("location:../pages/tables/user.php?success=success&key_id=$id");
	}
	}
	else
	{
    $message= "this is a message";
	header("location:../pages/tables/user.php?err=$message");
		
	}
	
	?>
