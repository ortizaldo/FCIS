<?php
include 'check-login.php';
$cock_id = $_POST['cock_id'];

 include '../../config/db_config.php';
 $cock_id = $_POST['cock_id'];

 $sql = "SELECT * FROM cocks WHERE  cock_id = '$cock_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
$cock_id = $row['cock_id'];
$cock_categories = $row['cock_categories'];
$father_bloodline = $row['father_bloodline'];
$f_num_wins = $row['f_num_wins'];
$f_num_loss = $row['f_num_loss'];
$mother_bloodline = $row['mother_bloodline'];
$siblings = $row['siblings'];
$wins = $row['wins'];
$loss = $row['losses'];
$no_days = $row['no_days'];
$day_to_transfer = $row['day_to_transfer'];

$todaydate = ''.date('M').'-'.date('d').'-'.date('Y');
include '../../config/db_config.php';
  include '../../config/db_config.php';
	    $sql = "INSERT INTO patient_cocks(cock_id,cock_categories,father_bloodline,f_num_wins,f_num_loss, mother_bloodline,siblings,wins,losses,no_days,day_to_transfer,date_admitted)
VALUES ('$cock_id','$cock_categories', '$father_bloodline', '$f_num_wins', '$f_num_loss', '$mother_bloodline', '$siblings', '$wins', '$loss','$no_days','$day_to_transfer','$todaydate')";
		if ($conn->query($sql) === TRUE) {

} else {

}




$sql = "DELETE FROM cocks WHERE cock_id='$cock_id'";

if ($conn->query($sql) === TRUE) {
 header("location:../pages/tables/patient_cock.php");
} else {
  header("location:../pages/tables/patient_cock.php?err=err");
}
}
}
$_SESSION['cock_id'] = $cock_id;
$_SESSION['cock_categories'] = $cock_categories;
?>


