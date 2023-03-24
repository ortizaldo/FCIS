<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
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
			<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="pages/tables/chicken_information.php"><i class="icon-arrow-left"></i> Back</a></p>		
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
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>Full Information Of Chicken  <o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>DATE: <?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?><o:p></o:p></span></p>


    


















</div>
</div>
</div>
</div>
</div>
</div>
</div>
  <?php
                $id = $_GET['id'];
                                 include '../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where prim_id = '$id';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                   <thead> 
                                  
                                            </thead>
                                    <thead style = "text-align:center;">
                                        <tr style = "text-align:center;">
                                          <th>
                                          Fowl  Id
                                            </th>
                                                <th>
                                                  Fowl  Category
                                                </th>
                                                   <th>
                                             Gender
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                                    <th>
                                              Blood Line
                                                </th>

                                               <th>
                                             Age
                                                </th>
                                                  
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                                   <th>
                                            Hatced day
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
                                             '.$row['type'].'
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
                                                    '.$row['day_to_transfer'].'
                                                </td>
                                                    <td>
                                                    '.$row['no_days'].'
                                                </td>
                                                        



                                        
                                            
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                    <div class="module-body">
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records Found!</h3>
                                        All records you register will be shown here.
                                    </div>
                                    </div>';
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                          





                                 ?>
                                         <center><h1>Transfer History</h1></center>
                                       <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chicks_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Chick</h3>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                           Chick  Id
                                            </th>
                                                <th>
                                                  Chick  Category
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                          
                                                          <th>
                                            Hatched Day
                                                </th>
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                               
                                           
                                           

                                                                      
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                       $chick =  $row['chicken_id'];
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
                                                    '.$row['no_days'].'
                                                </td>
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                      <h3>Stag</h3>
                                    <div class="module-body">
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records Found!</h3>
                                        All records you register will be shown here.
                                    </div>
                                    </div>';
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                         <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM stag_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Stag</h3>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                           Chick  Id
                                            </th>
                                                <th>
                                                  Chick  Category
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                               <th>
                                             Age
                                                </th>
                                                          <th>
                                            Hatched Day
                                                </th>
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                               
                                           
                                           

                                                                      
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                                $stag =  $row['chicken_id'];
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
                                                    '.$row['age'].'
                                                </td>
                                                      <td>
                                                    '.$row['no_days'].'
                                                </td>
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                      <h3>Stag</h3>
                                    <div class="module-body">
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records Found!</h3>
                                        All records you register will be shown here.
                                    </div>
                                    </div>';
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM bull_stag_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Bull Stag</h3>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                           Chick  Id
                                            </th>
                                                <th>
                                                  Chick  Category
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                               <th>
                                             Age
                                                </th>
                                                          <th>
                                            Hatched Day
                                                </th>
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                               
                                           
                                           

                                                                      
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                                $bull_stag =  $row['chicken_id'];
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
                                                    '.$row['age'].'
                                                </td>
                                                      <td>
                                                    '.$row['no_days'].'
                                                </td>
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                      <h3>Bull Stag</h3>
                                    <div class="module-body">
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records Found!</h3>
                                        All records you register will be shown here.
                                    </div>
                                    </div>';
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM cock_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Cock</h3>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                           Chick  Id
                                            </th>
                                                <th>
                                                  Chick  Category
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                               <th>
                                             Age
                                                </th>
                                                          <th>
                                            Hatched Day
                                                </th>
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                               
                                           
                                           

                                                                      
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                                $cock =  $row['chicken_id'];
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
                                                    '.$row['age'].'
                                                </td>
                                                      <td>
                                                    '.$row['no_days'].'
                                                </td>
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                      <h3>Cock</h3>
                                    <div class="module-body">
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records Found!</h3>
                                        All records you register will be shown here.
                                    </div>
                                    </div>';
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                     <div class="header">
                          <center>
                              <h1>
                         
                         Services
                            </h1>
                          </center>  
                     
                        </div>
                        <h3>Deworming</h3>
                                   <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$chick';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
                                                </th>

                                             <th>
                                                    Option
                                                </th> 
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                            
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
                                                </th>

                                             <th>
                                                    Option
                                                </th> 
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$bull_stug';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
                                                </th>

                                             <th>
                                                    Option
                                                </th> 
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                               
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$cock';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
                                                </th>

                                             <th>
                                                    Option
                                                </th> 
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                        <h3>Vaccination</h3>
                                   <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$chick';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
                                                </th>

                                              <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                                                 <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
                                                </th>

                                              <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                                                 <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$bull_stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
                                                </th>

                                              <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                                                 <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$cock';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
                                                </th>

                                              <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <h3>Immunization</h3>
                                            <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$chick';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
                                                </th>


                                                <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                           
                                           

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                           <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
                                                </th>


                                                <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                           
                                           

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                           <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$bull_stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
                                                </th>


                                                <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                           
                                           

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                   <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$cock';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
                                                </th>


                                                <th>
                                                    Option
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                           
                                           

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                      <h3>Feeding</h3>
                                                                    <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$chick' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
                                                </th>
                                                       
                                               
                                               
                                                <th>
                                                    Option
                                                </th>
                                        </tr>
                                    </thead>
                                             <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                                                               <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$stag' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
                                                </th>
                                                       
                                               
                                               
                                                <th>
                                                    Option
                                                </th>
                                        </tr>
                                    </thead>
                                             <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                                                               <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$bull_stag' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
                                                </th>
                                                       
                                               
                                               
                                                <th>
                                                    Option
                                                </th>
                                        </tr>
                                    </thead>
                                             <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                                        <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$cock' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
                                                </th>
                                                       
                                               
                                               
                                                <th>
                                                    Option
                                                </th>
                                        </tr>
                                    </thead>
                                             <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                </td>
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>

  <div class="header">
                            <center><h1>
                         
                         Pit History
                            </h1></center>
                     
                        </div>
                                   <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM battles where chicken_id = '$cock';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                                 Event Type
                                                </th>
                                                   <th>
                                            Date held
                                                </th>
                                                  <th>
                                             Result
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['place'].'
                                                </td>
                                                <td>
                                             '.$row['event_type'].'
                                                </td>
                                                  <td>
                                             '.$row['date_held'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['result'].'
                                                </td>
                                                 
                                           

                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                    <div class="module-body">
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records Found!</h3>
                                        All records you register will be shown here.
                                    </div>
                                    </div>';
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                            </div>
                        </div>
                    </div>
                </div                <center><h1>Ancestor</h1></center>
                 <div class="col-md-6">
              <h2>Sire</h2>
                <div class="tree">

  <ul>

            <?php
             $chicken_id = $_GET['id'];
                $sql = "SELECT * FROM chickens where chicken_id = '$id';";
                                 $result = $conn->query($sql);
                                   if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {

                                          $father = $row['chicken_father_id'];
                                       }}

                                

           
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where prim_id = '$father';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                    $sire_father_id = $row['chicken_father_id'];
                                      $sire_mother_id = $row['chicken_mother_id'];


                                  ?>
    <li>
      <a href="#">Father: <?php echo $sire_father_id ?></a>--
      --<a href="#">Mother: <?php echo  $sire_mother_id  ?></a>
      <ul>
     
        <li>
          <a href="#">Child: <?php echo $chicken_id  ?></a>
          <ul>
           
       
    <?php }} ?>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>
</div>

 <div class="col-md-6">
    <h2>Dam</h2>
   <div class="tree">

  <ul>

            <?php
             $chicken_id = $_GET['id'];
                    $sql = "SELECT * FROM chickens where chicken_id = '$id';";
                                 $result = $conn->query($sql);
                                   if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {

                                          $mother = $row['chicken_mother_id'];
                                       }}

          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where prim_id = '$mother';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                    $dam_father_id = $row['chicken_father_id'];
                                      $dam_mother_id = $row['chicken_mother_id'];


                                  ?>
    <li>
      <a href="#">Father: <?php echo $dam_father_id ?></a>--
      --<a href="#">Mother: <?php echo  $dam_father_id  ?></a>
      <ul>
     
        <li>
          <a href="#">Child: <?php echo $chicken_id  ?></a>
          <ul>
           
       
    <?php }} ?>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>


 </div>
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
 </body>
</html>