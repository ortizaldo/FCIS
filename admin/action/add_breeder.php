<?php

 include '../../config/db_config.php';
 $mother_id = $_POST['mother_id'];
  $father_id = $_POST['father_id'];

 $sql = "SELECT * FROM father WHERE  father_id = '$father_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	 $breeder_id = rand(100000,999999);

$father_racist = $row['father_racist'];
$sql = "SELECT * FROM mother WHERE  mother_id = '$mother_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	 $breeder_id = rand(100000,999999);

$mother_racist = $row['mother_racist'];
$todaydate = ''.date('M').'-'.date('d').'-'.date('Y');
}
}
  include '../../config/db_config.php';
	    $sql = "INSERT INTO breeders(breeder_id,breeder_f_id,father_bloodline,breeder_m_id,date_breed,bloodline)
VALUES ('$breeder_id','$father_id','$father_racist','$mother_id','$todaydate','$father_racist')";
		if ($conn->query($sql) === TRUE) {

} else {

}





if ($conn->query($sql) === TRUE) {
 header("location:../pages/tables/breeder.php?id=$father_id");
} else {
  header("location:../pages/tables/breeder.php?id=$father_id");
}


?>


