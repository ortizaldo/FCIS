<?php
include '../config/db_config.php';
include 'check-login.php';
$shop_timezone = $_SESSION['shoptimezone'];
date_default_timezone_set($shop_timezone);

$todaydate = ''.date('d').'-'.date('m').'-'.date('Y');
$today = date('d');
$month = date('m');
$yr = date('Y');

include '../config/db_config.php';


