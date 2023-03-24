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
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" src = "https://code.jquery.com/jquery-3.3.1.js"></script>
  
    <script type="text/javascript" src = "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
  $(function() {
    $("#datepickerStart").datepicker();
    $("#datepickerEnd").datepicker();
  });

  // Setup - add a text input to each footer cell
  $('#maintable tfoot th').each(function() {
    var title = $(this).text();
    if (title === "Start date") {
      $(this).html('<input type="text" id="datepickerStart" placeholder="Search ' + title + '" />');
    } else if (title === "End date") {
      $(this).html('<input type="text" id="datepickerEnd" placeholder="Search ' + title + '" />');
    } else {
      $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    }
  });

  // DataTable
  var table = $('#maintable').DataTable({


  });







  $('#maintable tbody').on('click', 'tr', function() {
    $(this).toggleClass('selected');
  });


  $('#maintable tbody')
    .on('mouseenter', 'td', function() {
      var colIdx = table.cell(this).index().column;

      $(table.cells().nodes()).removeClass('highlight');
      $(table.column(colIdx).nodes()).addClass('highlight');
    });


  $('#button').click(function() {
    alert(table.rows('.selected').data().length + ' row(s) selected');
  });

  // Apply the search
  table.columns().every(function() {
    var that = this;

    $('input', this.footer()).on('keyup change', function() {
      if (that.search() !== this.value) {
        that
          .search(this.value)
          .draw();
      }
    });
  });
});
    </script>
   
    <title>Fighting Cock Information System</title>
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

<div class="container">
<div class="container-fluid">
<div class="row-fluid">
<div class="pull-left"> 
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
"Times New Roman","serif"'>List of Sires  <o:p></o:p></span></p>

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
                                          Fowl  Id
                                            </th>
                                                <th>
                                                  Fowl  Category
                                                </th>
                                                   <th>
                                             Type/Gender
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
                                            Hatched day
                                                </th>

    </tr>
    </thead>
    <tbody>
          <?php
                                 include '../../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                        
                               

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