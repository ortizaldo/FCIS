<?php
session_start();
$chicken = $_POST['chicken'];

$_SESSION['chicken'] = $chicken;

header("location:../search_chicken.php");
?>
