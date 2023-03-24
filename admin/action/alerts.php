<?php
include '../config/db_config.php';
include 'check-login.php';
$shop_timezone = $_SESSION['shoptimezone'];
date($shop_timezone);

$todaydate =  ''.date('M').'-'.date('d').'-'.date('Y');

$today = date('d');
$month = date('M');
$yr = date('Y');


$todaymonth = ''.date('M').'-'.date('Y');
// codes for critical stocks


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
include '../config/db_config.php';
                                 
                      $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');      
                 $sql = "SELECT * FROM chickens WHERE date_transfered = '$date_transfered'  LIMIT 5; ";
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
include '../config/db_config.php';

$sql = "SELECT * FROM chickens";
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
include '../config/db_config.php';

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




include '../config/db_config.php';

$sql = "SELECT * FROM breeders ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $myus145555=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$myus145555 = "0";
}
$conn->close();

include '../config/db_config.php';

$sql = "SELECT * FROM conditioning ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $myus12=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$myus12 = "0";
}
$conn->close();
include '../config/db_config.php';

$sql = "SELECT * FROM handlers ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $myus1=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$myus1 = "0";
}
$conn->close();

include '../config/db_config.php';

$sql = "SELECT * FROM chickens where type = 'Female' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $myus121=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$myus121 = "0";
}
$conn->close();
include '../config/db_config.php';

$sql = "SELECT * FROM unhatched sum(unhatched_no) ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $myus1211=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$myus1211 = "0";
}
$conn->close();
include '../config/db_config.php';

$sql = "SELECT * FROM mother ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $myus124=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$myus124 = "0";
}
$conn->close();
include '../config/db_config.php';

$sql = "SELECT * FROM chickens where type = 'Female' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $mysum2345=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$mysum2345 = "0";
}
$conn->close();
// end of codes

include '../config/db_config.php';

$sql = "SELECT * FROM died  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 $mysum23456=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$mysum23456 = "0";
}
$conn->close();
// end of codes
// for daily incom
include '../config/db_config.php';

$sql = "SELECT * FROM unhatched";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $mysum = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $myvalue = $row['unhatched_no'];

    $mysum += $myvalue;
    }
} else {
$mysum = "0";
}
$conn->close();

// end of codes

//top selling product for today

include '../config/db_config.php';
$sql = "SELECT * FROM sales  WHERE shop = '$SEshopno' and date = '$todaydate' ORDER BY amount DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum22 = 0;
 $mysum2=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
		 $unit = $row['unit'];
      $pname = $row['product_name'];
    }
} else {
$pname = "None";
}
$conn->close();

include '../config/db_config.php';

$sql = "SELECT * FROM unhatched";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $mysum234 = 0;
 $mysum234=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
    $myvalue = $row['unhatched_no'];

    $mysum234 += $myvalue;
    }
} else {
$mysum234 = "0";
}
$conn->close();

// top selling product overall

include '../config/db_config.php';
$sql = "SELECT * FROM father";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$mysum222 = 0;
 $mysum222=mysqli_num_rows($result);
    while($row = $result->fetch_assoc()) {
   
	      
    }
} else {
 $mysum222 = "None";

}
$conn->close();

// end of codes



//profit earned or ginansya
include '../config/db_config.php';

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






include '../config/db_config.php';

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
include '../config/db_config.php';

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



include '../config/db_config.php';

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





include '../config/db_config.php';
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


				  





include '../config/db_config.php';

$sql = "SELECT * FROM sales WHERE shop = '$SEshopno' and date = '$yr' ORDER BY total DESC LIMIT 1";
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