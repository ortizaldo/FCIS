<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
  <style>
   #services1 {
            width       : 100%;
            height      : 200px;
            font-size   : 11px;
        } 
           #services2 {
            width       : 100%;
            height      : 200px;
            font-size   : 11px;
        } 
           #services3 {
            width       : 100%;
            height      : 200px;
            font-size   : 11px;
        } 
           #services4 {
            width       : 100%;
            height      : 200px;
            font-size   : 11px;
        } 
            #chart {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
             #product_name2 {
            width       : 100%;
            height      : 200px;
            font-size   : 11px;
        } 
                #chart2 {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
              #chart4 {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
        .amcharts-pie-slice {
          transform: scale(1);
          transform-origin: 50% 50%;
          transition-duration: 0.3s;
          transition: all .3s ease-out;
          -webkit-transition: all .3s ease-out;
          -moz-transition: all .3s ease-out;
          -o-transition: all .3s ease-out;
          cursor: pointer;
          box-shadow: 0 0 30px 0 #000;
      }
       #chart3 {
           width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
      
      .amcharts-pie-slice:hover {
          transform: scale(1.1);
          filter: url(#shadow);
      }    
          #month {
            width: 100%;
            height: 500px;
             margin-left: 5px;
          }   
              #chartdaily {
            width: 98%;
            height:150px;
             margin-left:15px;
          }  
                  #yearly {
            width: 98%;
           height: 500px;
             margin-left:15px;
          }  
          
          </style>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-link:"Balloon Text";
	font-family:"Tahoma","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:13.0in 8.5in;
	margin:48.25pt .5in .5in .75in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!DOCTYPE html>
<html class="no-js">
    <head>

   	   
        <!-- Bootstrap -->
			<!-- <link href="images/logo.png" rel="icon" type="image"> -->
	
		           <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print </title>
        <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  
        <link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet">

			<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		
	
			<link href="bootstrap/css/font-awesome.css" rel="stylesheet" media="screen">
	

			<link href="assets/styles.css" rel="stylesheet" media="screen">	

    </head>
	<?php
error_reporting(0);
include 'action/check-login.php';
include 'action/alerts.php';

include '../config/db_config.php';

$sql = "SELECT * FROM shops where shop_id = '$SEshop_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $shop_address = $row['shop_address'];
	$shop_street = $row['shop_street'];
	$shop_phone = $row['shop_phone'];
	$shop_timezone = $row['shop_timezone'];
    }
} else {
 
}
$conn->close();

?>

<?php
error_reporting(0);
include 'action/check-login.php';
include 'action/alerts.php';

?>


</head>



<body lang=EN-US>

 <div class="container">
 <div class="row-fluid">
 <div class="pull-right">
   <div class="empty">

           <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:
           normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
		   <a href="#" onClick="window.print()" class="btn btn-info" id="print" data-placement="top"><i class="icon-print icon-large"></i> Print List</a></p>		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script> 
		    <?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
	$finalcode='cafe-invoice-'.createRandomPassword();
?>
            <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:
            normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
           "Times New Roman","serif"'>
	
			<script type="text/javascript">
			$(document).ready(function(){
			$('#return').tooltip('show');
			$('#return').tooltip('hide');
			});
			</script>       	   
    </div>
</div>
 <div class="block">
<div class="row-fluid">

<div class=WordSection1>


<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman","serif"'><?php echo"$SEshopname"; ?> </span></b></p>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman","serif"'>Address:  <?php echo"$shop_address";?>  <?php echo"$shop_street";?></span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman","serif"'><?php echo"$shop_phone";?></span></b></p>


<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<div class="container">
<div class="container-fluid">
<div class="row-fluid">
<div class="pull-left"> 



</div>
</div>
</div>
</div>
</div>
</div>
</div>



   <div class="container">
   	<div class="row">
   		 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                
                                  <center>  <h1>Chicken categories</h1></center>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 ">
                                                                              <?php
include 'action/check-login.php';
include '../config/graph_connection.php';


                        $sql = "SELECT *, chicken_categories as cock_categories, count(chicken_categories) as qcount FROM chickens  GROUP BY chicken_categories ";
                        $query = $db->prepare($sql); 
                        $query->execute();
         $fetch = $query->fetchAll();
   foreach ($fetch as $key => $current_stock) {
 $data7[] = array('chicken_categories'=>$current_stock['chicken_categories'], 'qcount'=>$current_stock['qcount']);
                        }
                        $chart = json_encode($data7);
                        ?>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                      
                            </ul>
                        </div>
                        
                        <div class="body" id = "content2">
                           <div id="chart" ></div>
                         
                        </div>
                    </div>
                </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   <div class="card">

                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                
                                  <center>  <h1>Best Cock Bloodline</h1></center>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 ">

                           <?php
include 'action/check-login.php';
include '../config/graph_connection.php';


                        $sql = "SELECT *, bloodline as bloodline, count(bloodline) as sqcount1 FROM battles where result = 'win'  GROUP BY bloodline order by count(result) ";
                        $query = $db->prepare($sql); 
                        $query->execute();
         $fetch = $query->fetchAll();
   foreach ($fetch as $key => $value) {
 $data8[] = array('bloodline'=>$value['bloodline'], 'sqcount1'=>$value['sqcount1']);
                        }
                        $chart3 = json_encode($data8);
                        ?>
 
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                      
                            </ul>
                        </div>
                        
                        <div class="body" id = "content2">

                           <div id="chart3" ></div>




                         
                        </div>
                     </div>
                </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">

                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                
                            <center> <h1>Bloodline in fowl information</h1></center>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 ">

         
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                      
                            </ul>
                        </div>
                        
                        <div class="body" id = "content2">

                                              <?php

$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'breeders'; 

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $sql = "SELECT *, bloodline as daily, count(bloodline) as vaddress FROM chickens  GROUP BY bloodline Order by count(bloodline)  ";
                  $query = $db->prepare($sql); 
                  $query->execute();
                  $fetch = $query->fetchAll();
                  foreach ($fetch as $key => $visit) {
                    $data44[] = array('daily'=>$visit['daily'], 'vaddress'=>$visit['vaddress']);
                  }
                    $product_name2 = json_encode($data44);
                  ?>
     <div id="product_name2"></div>




                         
                        </div>
                     </div>
     
            </div> 
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
    
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                
                            <center> <h1>Services</h1></center>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 ">

           <?php



$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'breeders'; 

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
                  $sql = "SELECT *, month_year as daily, count(cock_id) as vaddress FROM deworm  GROUP BY month_year Order by count(cock_id)  ";
                  $query = $db->prepare($sql); 
                  $query->execute();
                  $fetch = $query->fetchAll();
                  foreach ($fetch as $key => $visit) {
                    $data201[] = array('daily'=>$visit['daily'], 'vaddress'=>$visit['vaddress']);
                  }
                    $services1 = json_encode($data201);
                  ?>
      
  <?php


              
                  $sql = "SELECT *, month_year as daily, count(cock_id) as vaddress FROM vaccination  GROUP BY month_year Order by count(cock_id)  ";
                  $query = $db->prepare($sql); 
                  $query->execute();
                  $fetch = $query->fetchAll();
                  foreach ($fetch as $key => $visit) {
                    $data202[] = array('daily'=>$visit['daily'], 'vaddress'=>$visit['vaddress']);
                  }
                    $services2 = json_encode($data202);
                  ?>
 
  <?php


                    $sql = "SELECT *, month_year as daily, count(cock_id) as vaddress FROM immune  GROUP BY month_year Order by count(cock_id)  ";
                  $query = $db->prepare($sql); 
                  $query->execute();
                  $fetch = $query->fetchAll();
                  foreach ($fetch as $key => $visit) {
                    $data203[] = array('daily'=>$visit['daily'], 'vaddress'=>$visit['vaddress']);
                  }
                    $services3 = json_encode($data203);
                  ?>

  <?php


                    $sql = "SELECT *, month_year as daily, count(cock_id) as vaddress FROM feed  GROUP BY month_year Order by count(cock_id)  ";
                  $query = $db->prepare($sql); 
                  $query->execute();
                  $fetch = $query->fetchAll();
                  foreach ($fetch as $key => $visit) {
                    $data204[] = array('daily'=>$visit['daily'], 'vaddress'=>$visit['vaddress']);
                  }
                    $services4 = json_encode($data204);
                  ?>
              
 
 
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                      
                            </ul>
                        </div>
                 
                        <div class="body" id = "content2">
<div class="row">
  <div class= "col-md-6">
       <center> <h6>Deworming</h6></center>
     <div id="services1"></div>
  </div>
  <div class= "col-md-6">
        <center> <h6>Vaccination</h6></center>
           <div id="services2"></div>
  </div>
  <div class= "col-md-6">
        <center> <h6>Immunization</h6></center>
           <div id="services3"></div>
  </div>
  <div class= "col-md-6">
        <center> <h6>Feeding</h6></center>
           <div id="services4"></div>
  </div>
                        
</div>



                         
                        </div>
                     </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   <div class="card">

                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                
                                  <center>  <h1>Condtioning Event</h1></center>
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 ">

                             <?php
include 'action/check-login.php';
include '../config/graph_connection.php';
        $sql = "SELECT *, event_type as bloodline, count(event_type) as sqcount1 FROM conditioning GROUP BY event_type order by count(event_type) ";
                        $query = $db->prepare($sql); 
                        $query->execute();
         $fetch = $query->fetchAll();
   foreach ($fetch as $key => $value) {
 $data9[] = array('bloodline'=>$value['bloodline'], 'sqcount1'=>$value['sqcount1']);
                        }
                        $chart4 = json_encode($data9);                        ?>
 
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                      
                            </ul>
                        </div>
                        
                        <div class="body" id = "content2">

                           <div id="chart4" ></div>



                         
                        </div>
                     </div>
                </div>
            </div> 
<div class="card">
    <center><h1>Table data</h1></center>
<?php
                                 include '../config/db_config.php';
                                 
                                  $sql = "SELECT * FROM chickens ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                                      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped    display"
                                        width="100%">
                                        <h3>Record In Chicken Categories</h3>
                                        <thead>
                                    
                                        <tr>
                                          <th>
                                           Chicken Id
                                            </th>
                                                <th>
                                               Chicken Categories
                                                </th>
                                                

                                                 
                                          
                                        </tr>
                                    </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['chicken_id'].'
                                                </td>
                                                <td>
                                             '.$row['chicken_categories'].'
                                                </td>
                          
                            
                                                        
                                               
                         </tr>
                     
                
                  
                  ';
                  
            
                                   }
                
                      
                   print '
                   </tbody> ';
    
                   
                        
                                   }
                                             
                ?>   
</div>
 <?php
                                 include '../config/db_config.php';
                                 
                                  $sql = "SELECT * FROM battles ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                                      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped    display"
                                        width="100%">
                                        <h3>Battle Records</h3>
                                        <thead>
                                    
                                        <tr>
                                          <th>
                                           Chicken Id
                                            </th>
                                                <th>
                                               Bloodline
                                                </th>
                                                

                                                 
                                          
                                        </tr>
                                    </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['chicken_id'].'
                                                </td>
                                                <td>
                                             '.$row['bloodline'].'
                                                </td>
                          
                            
                                                        
                                               
                         </tr>
                     
                
                  
                  ';
                  
            
                                   }
                
                      
                   print '
                   </tbody> ';
    
                   
                        
                                   }
                                             
                ?>   





 
<?php
                                 include '../config/db_config.php';
                                 
                                  $sql = "SELECT * FROM chickens ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                                      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped    display"
                                        width="100%">
                                        <h3>Fowl Information</h3>
                                        <thead>
                                    
                                        <tr>
                                          <th>
                                           Bull Stag Id
                                            </th>
                                                <th>
                                                  Stag  Category
                                                </th>
                                                  <th>
                                            Bull Stag Sire ID
                                                </th>

                                        
                                               <th>
                                              Bull Stag Dam ID
                                                </th>
                                                       <th>
                                         Bloodline
                                                </th>
                                               <th>
                                             Age
                                                </th>
                                                  
                                                    <th>
                                            Hatched day
                                                </th>  
                                                   <th>
                                              Day to transfer
                                                </th>
                                                  <th>
                                             Date transfered
                                                </th>
                                                

                                                 
                                          
                                        </tr>
                                    </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['chicken_id'].'
                                                </td>
                                                <td>
                                             '.$row['chicken_categories'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['chicken_father_id'].'
                                                </td>
                                                  <td>
                                             '.$row['chicken_mother_id'].'
                                                </td>
                                                    <td>
                                             '.$row['bloodline'].'
                                                </td>
                                               <td>
                                                    '.$row['age'].'
                                                </td>
                                                <td>
                                                    '.$row['no_days'].'
                                                </td> 
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                                                 <td>
                                                    '.$row['date_transfered'].'
                                                </td>
                            
                                                        
                                               
                         </tr>
                     
                
                  
                  ';
                  
            
                                   }
                
                      
                   print '
                   </tbody> ';
    
                   
                        
                                   }
                                             else {
                     print '
                                   <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h3 style="color:Black">No Bull Stag list!</h3>
                    All of your bull stag list will be shown here
                  </div>';
                                       }
                ?>   

  <?php
                  $sql = "SELECT * FROM conditioning;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                <thead> 
                                         <h3>Incondition chicken</h3>     
                                            </thead>

                                    <thead>
                                        <tr>
                                          <th>
                                           Chicken  Id
                                            </th>
                                                <th>
                                              Place
                                                </th>
                                                  <th>
                                              Event type
                                                </th>

                                        
                                               <th>
                                           Event date
                                                </th>
                                      
                                               
                                           
                                           

                                    
                    
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['cock_id'].'
                                                </td>
                                                <td>
                                             '.$row['place'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['event_type'].'
                                                </td>
                                                  <td>
                                             '.$row['event_date'].'
                                                </td>
                                              
                                   

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                             
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
 	</div>
</div>	
                             

	
		
		<!-- data table -->
		
        <script>
        $(function() {            
        });
        </script>
		
	   <script src="vendors/jGrowl/jquery.jgrowl.js"></script>			   
	   <script>
        $(function() {
            $('.tooltip').tooltip();	
			$('.tooltip-left').tooltip({ placement: 'left' });	
			$('.tooltip-right').tooltip({ placement: 'right' });	
			$('.tooltip-top').tooltip({ placement: 'top' });	
			$('.tooltip-bottom').tooltip({ placement: 'bottom' });

			$('.popover-left').popover({placement: 'left', trigger: 'hover'});
			$('.popover-right').popover({placement: 'right', trigger: 'hover'});
			$('.popover-top').popover({placement: 'top', trigger: 'hover'});
			$('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});

			$('.notification').click(function() {
				var $id = $(this).attr('id');
				switch($id) {
					case 'notification-sticky':
						$.jGrowl("Stick this!", { sticky: true });
					break;

					case 'notification-header':
						$.jGrowl("A message with a header", { header: 'Important' });
					break;

					default:
						$.jGrowl("Hello world!");
					break;
				}
			});
        });
        </script>
		


        <script>
        $(function() {

            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });



		

        </script>
		
			
		<script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();               
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>	
          <script src="js/graph/plugins/amcharts/plugins/responsive/responsive.min.js"></script>
        <script src="js/graph/plugins/export/export.js"></script>
        <link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
<link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
         <script src="js/graph/plugins/export.js"></script>
        <script src="js/graph/plugins/exportexport.js"></script>
        <link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">

        <script src="js/graph/plugins/export/examples/export.config.default.js"></script>
          <script src="js/graph/plugins/amcharts/plugins/responsive/responsive.min.js"></script>
        <script src="js/graph/plugins/export/export.js"></script>
        <link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
<link  type="text/css" href="js/graph/plugins/export/export.css" rel="stylesheet">
         <script src="js/graph/plugins/export.js"></script>
                <script src="js/graph/plugins/amcharts/export/export.min.js"></script>
        <script src="js/graph/plugins/amcharts/themes/patterns.js"></script>
        <script type="js/graph/plugins/export/export.css" type="text/css" media="all"></script>
        
          <script src="js/graph/plugins/amcharts/export/export.min.js"></script>
        <script type="js/graph/plugins/export/export.css" type="text/css" media="all"></script>
        
        
    <script type="text/javascript" src="jquery.min.js"></script>
                    <script src="js/graph/plugins/amcharts/amstock.js"></script>        
                 <script src="js/graph/plugins/amcharts/amcharts.js"></script>
        <script src="js/graph/plugins/amcharts/serial.js"></script>
      
        <script src="js/plugins/amcharts/themes/pattern.js"></script>
    <script src="js/plugins/amcharts/themes/light.js"></script>
    <script src="js/graph/plugins/animate/animate.min.js"></script>
      <script src="js/graph/plugins/amcharts/pie.js"></script>
      <script type="text/javascript">
                var raw = '<?php echo $chart4; ?>';
            var data = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart4", {
               "type": "pie",
                "dataProvider": data ,
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "nameField": "bloodline",
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "balloonText": "<span style='font-size:20px'>[[bloodline]]</span> :<br><span style='font-size:14px'><b>[[bloodline]]: [[sqcount1]]</b> ([[percents]]%)</span>",
                "innerRadius": "30%",
               "legend": {
        "position": "right"
      },
            
            } );
</script>
       <script>

   var raw = '<?php echo $services1; ?>';
            var data = JSON.parse(raw);
            var product_name1 =AmCharts.makeChart( "services1", {
                      "type": "serial",
  "theme": "light",
  "marginRight": 70,
            "dataProvider": data,
         "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Deworming"
  }],

            
      
          "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[daily]]: [[vaddress]]</b>",
    "fillColorsField": "color",
    "labelText": "[[vaddress]]",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "vaddress"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "daily",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});
       var raw = '<?php echo $services2; ?>';
            var data = JSON.parse(raw);
            var product_name1 =AmCharts.makeChart( "services2", {
                      "type": "serial",
  "theme": "light",
  "marginRight": 70,
            "dataProvider": data,
         "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Vaccination"
  }],

            
      
          "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[daily]]: [[vaddress]]</b>",
    "fillColorsField": "color",
    "labelText": "[[vaddress]]",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "vaddress"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "daily",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});
   var raw = '<?php echo $services3; ?>';
            var data = JSON.parse(raw);
            var product_name1 =AmCharts.makeChart( "services3", {
                      "type": "serial",
  "theme": "light",
  "marginRight": 70,
            "dataProvider": data,
         "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Immunization"
  }],

            
      
          "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[daily]]: [[vaddress]]</b>",
    "fillColorsField": "color",
    "labelText": "[[vaddress]]",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "vaddress"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "daily",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});
   var raw = '<?php echo $services4; ?>';
            var data = JSON.parse(raw);
            var product_name1 =AmCharts.makeChart( "services4", {
                      "type": "serial",
  "theme": "light",
  "marginRight": 70,
            "dataProvider": data,
         "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Feeding"
  }],

            
      
          "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[daily]]: [[vaddress]]</b>",
    "fillColorsField": "color",
    "labelText": "[[vaddress]]",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "vaddress"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "daily",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

}); 
 
   var raw = '<?php echo $product_name2; ?>';
            var data = JSON.parse(raw);
            var product_name1 =AmCharts.makeChart( "product_name2", {
                      "type": "serial",
  "theme": "light",
  "marginRight": 70,
            "dataProvider": data,
         "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Bloodlines"
  }],

            
      
          "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[daily]]: [[vaddress]]</b>",
    "fillColorsField": "color",
    "labelText": "[[vaddress]]",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "vaddress"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "daily",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});
      
    </script>
<script>
   var raw = '<?php echo $product_name2; ?>';
            var data = JSON.parse(raw);
            var product_name1 =AmCharts.makeChart( "product_name2", {
                      "type": "serial",
  "theme": "light",
  "marginRight": 70,
            "dataProvider": data,
         "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Bloodlines"
  }],

            
      
          "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[daily]]: [[vaddress]]</b>",
    "fillColorsField": "color",
    "labelText": "[[vaddress]]",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "vaddress"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "daily",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});
      
    </script>
        <script type="text/javascript">
                var raw = '<?php echo $chart3; ?>';
            var data = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart3", {
               "type": "pie",
                "dataProvider": data ,
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "nameField": "bloodline",
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "balloonText": "<span style='font-size:20px'>[[bloodline]]</span> :<br><span style='font-size:14px'><b>[[bloodline]]: [[sqcount1]]</b> ([[percents]]%)</span>",
                "innerRadius": "30%",
               "legend": {
        "position": "right"
      },
            
            } );
</script>
        <script type="text/javascript">
                var raw = '<?php echo $chart2; ?>';
            var data = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart2", {
               "type": "pie",
                "dataProvider": data ,
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "nameField": "bloodline",
                "titleField": "bloodline",
                "valueField": "sqcount1",
                "balloonText": "<span style='font-size:20px'>[[bloodline]]</span> :<br><span style='font-size:14px'><b>Stocks: [[sqcount1]]</b> ([[percents]]%)</span>",
                "innerRadius": "30%",
               "legend": {
        "position": "right"
      },
            
            } );
</script>






        <script type="text/javascript">
                  var raw = '<?php echo $chart; ?>';
            var data1 = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart", {
                
               "type": "pie",
                "dataProvider": data1 ,
                "titleField": "chicken_categories",
                "valueField": "sqcount",
                "nameField": "chicken_categories",
                "titleField": "chicken_categories",
                "valueField": "qcount",
                "balloonText": "<span style='font-size:20px'>[[chicken_categories]] :</span><span style='font-size:14px'>[[sqcount]]</span>   <br><span style='font-size:14px'><b>Total: [[qcount]]</b> ([[percents]]%)</span>",
                "innerRadius": "30%",
               "legend": {
        "position": "right"
               },
            
            } );
</script>
        <script>
        
        
        
        $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
          var raw = '<?php echo $month; ?>';
          var month = JSON.parse(raw);
          var month = AmCharts.makeChart( "month", {
            "type": "serial",
              "fontFamily": "Helvetica",
           "fontSize": 20,
       "dataProvider": month,
       "rotate": false,
       "marginTop": 10,
        "marginTop": 10,
       "categoryField": "title",
       "categoryAxis": {
         "gridAlpha": 0.07,
         "axisColor": "#DADADA",
         "startOnAxis": true,
         "title": "Monthly Sales",
         "guides": [{
           "category": "title",
           "lineColor": "#CC0000",
           "lineAlpha": 1,
           "dashLength": 2,
           "inside": true,
           "labelRotation": 90,
           "label": "title"
         }, {
           "category": "title",
           "lineColor": "#CC0000",
           "lineAlpha": 1,
           "dashLength": 2,
           "inside": true,
           "labelRotation": 90,
           "label": "Monthly sales"
         }]
       },
       "valueAxes": [{
         "stackType": "regular",
         "gridAlpha": 0.07,
         "title": "Monthly Sales Graph"
       }],
       "graphs": [{
         "type": "column",
         "title": "title",
         "valueField": "value",
         "lineAlpha": 0,
        
         "fillAlphas": 0.6,
        
        "balloonText": "[[title]]: <b>Total Sales [[value]]</b>",
       }],
       "legend": {
         "position": "bottom",
         "valueText": "[[value]]",
         "valueWidth": 100,
         "valueAlign": "left",
         "equalWidths": false,
         "periodValueText": "total: [[value]]"
       },
          "export": {
                    "enabled": true
                },
       "chartCursor": {
         "cursorAlpha": 0
       },
       "chartScrollbar": {
         "color": "FFFFFF"
       },
      "responsive": {
        "enabled": true
      }

     }






            );
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          var raw = '<?php echo $yearly; ?>';
          var data = JSON.parse(raw);
          var data = AmCharts.makeChart( "yearly", {
               "fontFamily": "Helvetica",
           "fontSize": 20,
            "type": "serial",
            "theme": "pattern",
            "dataProvider": data,
         "valueAxes": [{
          "gridAlpha": 0.2,
              "dashLength": 0,
         "title": "Yearly  Sales Graph"
       }],
          
            "gridAboveGraphs": true,
            "startDuration": 1,
            "graphs": [ {
              "balloonText": "[[title]]: <b>Total Sales [[value]]</b>",
                     
              "fillAlphas": 0.8,
              "lineAlpha": 0.2,
                "labelText": "[[value]]",
              "type": "column",
              "valueField": "value"
            } ],
            "chartCursor": {

              "categoryBalloonEnabled": false,
              "cursorAlpha": 0,
              "zoomable": false
              
            },
            
            "categoryField": "title",
            "categoryAxis": {
              "gridPosition": "start",
              "gridAlpha": 0,
              "tickPosition": "start",
              "tickLength": 20
             
            },
            "export": {
              "enabled": true
            }

          } );
          
          
          // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
        </script>           
                            



                 <script src="bootstrap/js/bootstrap.min.js"></script>

                <script src="bootstrap/js/metisMenu.min.js"></script>


            <script src="js/sb-admin-2.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
            <script src="text/css" href="js/graph/plugins/export/export.js"></script>
        
        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
      
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>			
 </body>
</html>