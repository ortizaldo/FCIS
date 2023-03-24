<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
	$finalcode='cafe-invoice-'.createRandomPassword();
?>
	  


<?php
$mypassword = base64_encode($_POST['password']);
$myusername = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];

if ($role == "shops") {
	include '../config/db_config.php';

$sql = "SELECT * FROM shops WHERE shop_username = '$myusername' and shop_password = '$mypassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
		
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['shop_id'] = $row['shop_id'];
        $_SESSION['shop_name'] = $row['shop_name'];	
		$_SESSION['shop_currency'] = $row['shop_currency'];
        $_SESSION['shop_email'] = $row['shop_email'];	
		$_SESSION['shop_username'] = $myusername;
        $_SESSION['shop_no'] = $row['shop_no'];	
		$_SESSION['shop_logo'] = $row['shop_logo'];
		$_SESSION['role'] = $role;
		$_SESSION['shoptimezone'] = $row['shop_timezone'];
        $shop_id = $row['shop_id'];
        $shop_username = $row['shop_username'];

          $timestamp = date("M/d/Y g:i", time());
			$sql2 = "INSERT INTO user_log (staff_id,name,date_login,label)
		VALUES ('$shop_id','$shop_username','$timestamp','login')";
	
		$result = $conn->query($sql2);


		header("location:../admin/");


        
    }
} else {
 $sql = "SELECT * FROM users WHERE user_id = '$myusername' and password = '$mypassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
		
		setcookie(loggedin, date("F jS - g:i a"), $seconds);
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['fullname'] = $row['fullname'];	
        $_SESSION['myemail'] = $row['email'];	
		$_SESSION['gender'] = $row['gender'];
        $_SESSION['shop_no'] = $row['shop'];	
		$_SESSION['avatar'] = $row['avatar'];
		$_SESSION['role'] = $role;
		$_SESSION['myphone'] = $row['phone'];
		
	
		$user_id =  $_SESSION['user_id'];
		$name = $_SESSION['fullname'];

		
		
		   $timestamp = date("M/d/Y h:i:a", time());
			$sql2 = "INSERT INTO user_log(staff_id,name,date_login,label)
		VALUES ('$user_id','$name','$timestamp','login')";
	
		$result = $conn->query($sql2);

		header("location:../user/");


        
    }
} else {
header("location:../?err=Account not found in our database take note the manager has authorize to register the  new user or employee");
}
}
$conn->close();
}else{
	include '../config/db_config.php';

	
	

$conn->close();
	
}


?>