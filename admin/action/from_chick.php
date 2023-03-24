<?php 

$link = mysqli_connect('localhost:3306','root','','breeders') or die("Could not connect");
	mysqli_set_charset($link,"utf8");


if (isset($_POST['delete'])) {

foreach($_POST["hatch_id"] as $id)
{
	
$sql1= "DELETE FROM `chickens` WHERE chicken_id = '$id'";
  $result = mysqli_query($link,$sql1);
}

}

header('Location: '.$_SERVER['HTTP_REFERER']);

 ?>