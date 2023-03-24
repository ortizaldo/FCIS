<?php
include '../../../config/db_config.php';
include '../../action/check-login.php';
include 'check-login.php';
$shop_timezone = $_SESSION['shoptimezone'];
date($shop_timezone);

$todaydate =  ''.date('M').'-'.date('d').'-'.date('Y');

$today = date('d');
$month = date('M');
$yr = date('Y');


$todaymonth = ''.date('M').'-'.date('Y');
// codes for critical stocks

include '../../../config/db_config.php';
$sql = "SELECT * FROM products WHERE shop_id = '$SEshopno' and stock_level >= current_stock";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $exalert1=mysqli_num_rows($result);
 $ex1 = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$ex1 = false;
}
$conn->close();

// end of codes


// code for expired product
include '../../../config/db_config.php';
                                 
                    $sql = "SELECT * FROM products WHERE shop_id = '$SEshopno'  and MONTH(expiration_date) = MONTH(NOW());";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
 $exalert2=mysqli_num_rows($result);
 $ex2 = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$ex2 = false;
}
$conn->close();

//end of code 


//stocks of shops
include '../../../config/db_config.php';

$sql = "SELECT * FROM products WHERE shop_id = '$SEshopno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $mypr1=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$mypr1 = "0";
}
$conn->close();
//end of codes


//products of shops
include '../../../config/db_config.php';

$sql = "SELECT * FROM for_sale WHERE shop_id = '$SEshopno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $mypr2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$mypr2 = "0";
}
$conn->close();
//end of codes




include '../../../config/db_config.php';

$sql = "SELECT * FROM users WHERE shop = '$SEshopno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $myus1=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$myus1 = "0";
}
$conn->close();


// end of codes


include '../../../config/db_config.php';

$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$todaydate'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $myvalue = $row['total'];

    $mysum += $myvalue;
    }
} else {
$mysum = "0";
}
$conn->close();

// end of codes

//top selling product for today

include '../../../config/db_config.php';
$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$todaydate' ORDER BY total DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum22 = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
      $pname = $row['product_name'];
    }
} else {
$pname = "None";
}
$conn->close();



// top selling product overall

include '../../../config/db_config.php';
$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' ORDER BY total DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum222 = 0;
 $mysum222=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
      $tpname = $row['product_name'];
    }
} else {
 $tpname = "None";
}
$conn->close();

// end of codes



//profit earned or ginansya
include '../../../config/db_config.php';

$sql = "SELECT * FROM cash  WHERE shop = '$SEshopno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$cash = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $myvalue = $row['amount'];

    $cash += $myvalue;
    }
} else {
$cash  = "0";
}
$conn->close();






include '../../../config/db_config.php';

$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$todaymonth' GROUP BY month";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $mpen = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $myvalue = $row['total'];

    $mpen += $myvalue;
    }
} else {
$mpen  = "0";
}



$conn->close();
include '../../../config/db_config.php';

$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$todaymonth' GROUP BY month";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $ypen = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $myvalue = $row['total'];

    $ypen += $myvalue;
    }
} else {
$ypen  = "0";
}
$conn->close();



include '../../../config/db_config.php';

$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$pen = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $myvalue = $row['total'];

    $pen += $myvalue;
    }
} else {
$pen  = "0";
}
$conn->close();


//end of codes


// for expected profit




include '../../../config/db_config.php';
$sql = "SELECT * FROM products  WHERE shop_id = '$SEshopno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$tincome = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $fstock = $row['current_stock'];
	$sprice = $row['selling_price'];
    $myvalue = $sprice * $fstock;
	
    $tincome += $myvalue;
    }
} else {
$tincome  = "0";
}
$conn->close();

// end of codes 



//for month


				  



include '../../../config/db_config.php';

$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$yr' ORDER BY total DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum22 = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
      $pyname = $row['product_name'];
    }
} else {
$pyname = "None";
}
$conn->close();




?>