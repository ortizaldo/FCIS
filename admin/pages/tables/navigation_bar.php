
<?php
include ('action/alerts.php');
?>

<nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.php">ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->                   <?php
                            include '../../../config/db_config.php';
                            
           $event_date = date("Y-m-d");      
                 $sql = "SELECT * FROM conditioning WHERE   event_date >= '$event_date'  LIMIT 5; ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
 $exalert9=mysqli_num_rows($result);
 $ex9 = true;
    while($row = $result->fetch_assoc()) {
       $cock_id =  $row['cock_id'];
    
    }
} else {
$ex9 = false;
}
$conn->close();
?>
                            <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                          Conditioning<i class="material-icons">notifications</i>
                            <span class="label-count"><?php echo $ex9; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Conditioning</li>
                            <li class="body">
                                <ul class="menu">
                                        <li>
                                        <a href="conditioning.php">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">schedule</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>  <?php if ($ex9 == true) {
                                print '<b style = "margin-right:10px;" > '.$cock_id.' </b> <span style = "background-color:green;color:white;" class="label-count">'.$exalert9.'</span>';
                            }else{
                                print "No chickens to be condtion";
                            }
                            ?></h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>
                                                    <?php echo $event_date; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                          
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Conditioning</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#.php" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">schedule</i>
                            
                            <?php
                            include '../../../config/db_config.php';
                            
                              $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');      
                 $sql = "SELECT * FROM chickens WHERE   day_to_transfer = '$date_transfered' ; ";
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


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "breeders";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

                            
                              $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');      
                 $sql = "SELECT * FROM chickens WHERE chicken_categories = 'Chicks' and day_to_transfer = '$date_transfered'; ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
 $a1=mysqli_num_rows($result);
 $ex1 = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$ex1 = false;
}
$conn->close();

       include '../../../config/db_config.php';
                            
                              $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');      
                 $sql = "SELECT * FROM chickens WHERE chicken_categories = 'Stag' and   day_to_transfer = '$date_transfered' and type ='Male' ; ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
 $a2=mysqli_num_rows($result);
 $ex3 = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$ex3 = false;
}
$conn->close();


    include '../../../config/db_config.php';
                            
                              $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');      
                 $sql = "SELECT * FROM chickens WHERE chicken_categories = 'Bull Stag' and  day_to_transfer = '$date_transfered'  ; ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
 $a3=mysqli_num_rows($result);
 $ex4 = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$ex4 = false;
}
$conn->close();
    include '../../../config/db_config.php';
                            
                              $date_transfered = ''.date('M').'-'.date('d').'-'.date('Y');      
                 $sql = "SELECT * FROM chickens WHERE chicken_categories = 'Cock' and  day_to_transfer = '$date_transfered'  ; ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
 $a4=mysqli_num_rows($result);
 $ex5 = true;
    while($row = $result->fetch_assoc()) {
    
    }
} else {
$ex5 = false;
}
$conn->close();







                            
                            
                            
                            

                            if ($ex2 == true) {
                                $total = $a1+$a2+$a3+$a4;
                                print ' <span class="label-count">'.$total.'</span>';
                            }else{
                            
                            }
                            ?>
                            
                            
                            
                            
                        
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </a>
                        <ul class="dropdown-menu">
                        
                            <li class="header">Chicken to be transfered</li>
                            <li class="body">
                                <ul class="menu">
                                
                                    <li>
                                        <a href="pages/tables/alerts_chicks.php">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">schedule</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>  <?php if ($ex1 == true) {
                                print '<b style = "margin-right:10px;" > Chicks : </b> <span style = "background-color:green;color:white;" class="label-count">'.$a1.'</span>';
                            }else{
                                print "No chicks to be transfer";
                            }
                            ?></h4>
                                                <p>
                                                    <i class="material-icons">access_time</i>
                                                    <?php echo $date_transfered; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/tables/alerts_stugs.php">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">schedule</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><?php if ($ex3 == true) {
                                print ' <b style = "margin-right:10px;">Stugs : </b> <span style = "background-color:orange;color:white;" class="label-count">'.$a2.'</span>';
                            }else{
                                print "No stugs to be transfer";
                            
                            }
                            ?></h4>
                                                <p>
                                                    <i class="material-icons">access_time</i><?php echo $date_transfered; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="alerts_bull_stugs.php">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">schedule</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>  <?php if ($ex4 == true) {
                                print '<b style = "margin-right:35px;">Bull Stugs :</b><span style = "background-color:blue;color:white;margin-left:30px;" class="label-count">  '.$a3.'</span>';
                            }else{
                                print "No bullstugs be transfer";
                            
                            }
                            ?></h4>
                                                <p>
                                                    <i class="material-icons">access_time</i><?php echo $date_transfered; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="alerts_cocks.php">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">schedule</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>  <?php if ($ex5 == true) {
                                print '<b style = "margin-right:35px; >Cocks</b> <span style = "background-color:red;color:white;" class="label-count">'.$a4.'</span>';
                            }else{
                                print "No cocks to be transfer";
                            
                            }
                            ?></h4>
                                                <p>
                                                    <i class="material-icons">schedule</i><?php echo $date_transfered; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                 
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="alerts_chickens.php">View All chicken to be transfer</a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                   
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    