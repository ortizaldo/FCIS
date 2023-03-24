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

  <?php
                                 include '../config/db_config.php';
                                 
                                  $sql = "SELECT * FROM chickens where chicken_categories = 'Chicks' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                                      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped    display"
                                        width="100%">
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
                                                    '.$row['age_chicks'].'
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
								
								     	
								   print '
								   </tbody> ';
		
								   
									     	
                                   }
  	                           						   else {
									   print '
                                   <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:Black">No Chick list!</h3>
										All of your chick list will be shown here
									</div>';
                                       }
								?>   








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
			<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="pages/tables/chicks.php"><i class="icon-arrow-left"></i> Back</a></p>		
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
"Times New Roman","serif"'>List of Chicks  <o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>DATE: <?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?><o:p></o:p></span></p>


    







  
 </tr>
   <!-- MYSQL FETCH ARRAY-->


</table>











</div>
</div>
</div>
</div>
</div>
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