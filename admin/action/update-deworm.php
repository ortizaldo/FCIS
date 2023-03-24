<?php
$id = $_POST['id'];
$cock = $_POST['cock'];
$deworm_date = $_POST['deworm_date'];
$deworm_type = $_POST['deworm_type'];
$usage_deworm = $_POST['usage_deworm'];
$descrip = $_POST['descrip'];
$deworm_id = $_POST['deworm_id'];

include '../../config/db_config.php';

$sql = "UPDATE deworm SET deworm_id='$deworm_id',cock_id='$cock', deworm_date='$date', deworm_type='$deworm_type', usage_deworm='$usage_deworm', descrip='$descrip' WHERE deworm_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/deworming.php");
} else {
     header("location:../pages/tables/deworming.php");
}

$conn->close();

?>