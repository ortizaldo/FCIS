<?php
session_start();
$producttosearch = $_POST['cocks'];

$_SESSION['producttosearch'] = $producttosearch;

header("location:../search_product.php");
?>
