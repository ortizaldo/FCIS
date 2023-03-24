<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css" class="init">
  
tr.group,
tr.group:hover {
  background-color: #ddd !important;
}

  </style>
<script type="text/javascript" language="javascript" class="init">
  


$(document).ready(function() {
  var groupColumn = 2;
  var table = $('#example').DataTable({
    "columnDefs": [
      { "visible": false, "targets": groupColumn }
    ],
    "order": [[ groupColumn, 'asc' ]],
    "displayLength": 25,
    "drawCallback": function ( settings ) {
      var api = this.api();
      var rows = api.rows( {page:'current'} ).nodes();
      var last=null;

      api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
        if ( last !== group ) {
          $(rows).eq( i ).before(
            '<tr class="group"><td colspan="5">'+group+'</td></tr>'
          );

          last = group;
        }
      } );
    }
  } );

  // Order by the grouping
  $('#example tbody').on( 'click', 'tr.group', function () {
    var currentOrder = table.order()[0];
    if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
      table.order( [ groupColumn, 'desc' ] ).draw();
    }
    else {
      table.order( [ groupColumn, 'asc' ] ).draw();
    }
  } );
} );

  </script>
    <title>>Pending Hatch</title>
</head>

<body class="container">
<h1 class="text-center">Pending Hatch</h1>

<table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th> Hatched ID</th>
             <th>Batch</th>
            <th>Date Hatch</th>
               
                 <th>Mother Id</th>
    </tr>
    </thead>
    <tbody>
      <?php
      include '../../../../config/db_config.php';
   $sql = "SELECT * FROM hatch";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                    $i = 21; 
                 while($row = $result->fetch_assoc()) {
               
                        $hatch_no = $row['hatch_no'];
                  $hatch_id = $row['hatch_id'];
                  $date_hatch = $row['date_hatch'];
                  $batch = $row['batch'];

                  $mother_id = $row['mother_id'];
                  $breeder_id = $row['breeder_id'];
                                ?>
          <tr>
    <td><?php echo $hatch_id; ?></td>
            <td><?php echo $batch; ?></td>
            <td><?php echo $date_hatch; ?></td>
            
              <td><?php echo $mother_id; ?></td>
              </tr>
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