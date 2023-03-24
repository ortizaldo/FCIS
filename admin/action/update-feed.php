<?php
$id = $_POST['id'];
$cock = $_POST['cock'];
$date = $_POST['date'];
$type_feed = $_POST['type_feed'];
$descrip = $_POST['descrip'];
$feed_id = $_POST['feed_id'];

include '../../config/db_config.php';

$sql = "UPDATE feed SET feed_id='$feed_id',cock_id='$cock', feed_date='$date', type_date='$type_date', descrip='$descrip' WHERE feed_id ='$id'";

if ($conn->query($sql) === TRUE) {
    header("location:../pages/tables/feeding.php");
} else {
     header("location:../pages/tables/feeding.php");
}

$conn->close();

?>