<!DOCTYPE html>
<html lang="en">
  <?php
error_reporting(0);
include '../../action/check-login.php';
include '../../action/alerts.php';

  include '../../../../config/db_config.php';

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
include '../../action/check-login.php';
include '../../action/alerts.php';

?>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Sire List</title>
</head>

<body class="container">

               
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
font-family:"Times New Roman","serif"'>Fighting Cock Information System<?php echo"$SEshopname"; ?> </span></b></p>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman","serif"'>Address: Napilas 7, Brgy. E. Lopez, Silay City  <?php echo"$shop_address";?>  <?php echo"$shop_street";?></span></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman","serif"'>Mobile No.: 09121021960<?php echo"$shop_phone";?></span></b></p>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
font-family:"Times New Roman","serif"'>Email Adress: cbanaria143@gmail.com<?php echo"$shop_phone";?></span></b></p>


<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><b><span style='font-size:10.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b></p>

<div class="container">
<div class="container-fluid">
<div class="row-fluid">
<div class="pull-left"> 
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>List of Immunated Fowls <o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>DATE: <?php
 $date = new DateTime();
 echo $date->format('l, F jS, Y');
 ?><o:p></o:p></span></p>
<table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
    <thead>
    <tr>
        
                                        <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date of Immunizing
                                                </th>
                                                         <th>
                                        Name Of Drug
                                                </th>
                                                <th>
                                        Dosage
                                                </th>
                                                <th>
                                        Immunization Description
                                                </th>

    </tr>
    </thead>
    <tbody>
          <?php
                                 include '../../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                        
                               

                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                  
                               
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
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
                                                  
                                           
    </tr>
        ' ; ?>
<?php }} ?>
   
    </tfoot>
</table>

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/jszip.min.js"></script>
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/jquery.mark.min.js"></script>
<script type="text/javascript" src="js/datatables.mark.js"></script>
<script type="text/javascript" src="js/buttons.colVis.min.js"></script>

</body>

</html>