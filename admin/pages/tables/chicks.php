<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
  <title>Chicks</title>
  <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="resources/syntax/shCore.css">
  <link rel="stylesheet" type="text/css" href="resources/demo.css">
  <style type="text/css" class="init">
  
tr.group,
tr.group:hover {
  background-color: #ddd !important;
}

  </style>
  <script type="text/javascript" language="javascript" src="media/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" src="resources/syntax/shCore.js"></script>
  <script type="text/javascript" language="javascript" src="resources/demo.js"></script>
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
      <script type="text/javascript">

    function do_this(){

        var checkboxes = document.getElementsByName('hatch_id[]');
        var button = document.getElementById('toggle');

        if(button.value == 'select all'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            button.value = 'deselect'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            button.value = 'select all';
        }
    }
</script>
</head>
<?php include('header.php');?>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
<?php include('search.php');?>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
<?php include('navigation_bar.php');?>
    <!-- #Top Bar -->
  
  
<?php include ('sidebar.php');?>
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                      Chicks Batch
                            </h2>
                            <ul class="header-dropdown m-r--5">
                          <div class="button-demo js-modal-buttons">
               
                                <div >
                           
                 <a type="button" href = "datatables/print_chick.php" class="btn  waves-effect m-r-20 bg-green pull-left" style = "margin-right:50px;">Print Report</a>

             
                          </div>
                            
                            </div>
    
                            </ul>
                        </div>
                        <div class="body">

                            <div class="table-responsive">
                                <form action = "../../action/from_chick.php" method = "POST">
      <table id="example" class="display" style="width:100%">
               <input type="button" class="btn waves-effect m-r-20 bg-blue " id="toggle" value="select all" onClick="do_this()" />
               <button type="submit" name = "delete" class="btn  waves-effect m-r-20 bg-red" >Delete</button>
                
              <thead>
                    <tr>
          
            <th></th>
                                               <th>
                                                  Chick  Category
                                                </th>
                                         
                                                <th>
                                           Batch
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
                                      
                                                    <th>
                                                    Option
                                                </th>
                    
          
          </tr>
        </thead>
        <tbody>
               <?php
             include '../../../config/db_config.php';
                                 
               $sql = "SELECT * FROM chickens where chicken_categories = 'Chicks' ;";
                                 $result = $conn->query($sql);
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                    $i = 21; 
                 while($row = $result->fetch_assoc()) {
                   $i++;
                    $y++;
                     $prim_id = $row['prim_id'];
                  $chicken_id = $row['chicken_id'];
                  $chicken_categories = $row['chicken_categories'];
                  $batch = $row['batch'];
                  $chicken_father_id = $row['chicken_father_id'];
                  $chicken_mother_id = $row['chicken_mother_id'];
                   $no_days = $row['no_days'];
                   $date1 =  date('M-d-Y');
                   $date2 = $no_days;

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('M', $ts1);
$month2 = date('M', $ts2);

$diff = (($year2 - $year1) * 12) + ($month2 - $month1);



                    $day_to_transfer = $row['day_to_transfer'];
                                ?>
          <tr>
            <td><input type="checkbox" name = "hatch_id[]" value = "<?php echo $row['chicken_id']; ?>" id="md_checkbox_<?php echo $i; ?>" class="filled-in chk-col-red"  />

               <label for="md_checkbox_<?php echo $i; ?>"><?php echo $y?></label></td>
                <input type="hidden" name="batch" value = "<?php echo $batch?>">
      
            <td><?php echo $chicken_categories; ?></td>

            <td><?php echo $batch; ?></td>
               <td><?php echo $chicken_father_id; ?></td>
              <td><?php echo $chicken_mother_id; ?></td>
                <td><?php echo $diff; ?></td>
               <td><?php echo $no_days; ?></td>
                <td><?php echo $day_to_transfer; ?></td>
                <td>        <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="transfer_chick.php?id=<?php echo $chicken_id; ?>">Transfer</a>
                                                        <li><a rel = "facebox" href="edit_chicks.php?id=<?php echo $chicken_id; ?>">Edit</a>
                                                        <li><a href="../../action/delete_chick.php?ref=<?php echo $chicken_id; ?>">Delete</a></li>
                                                          <li><a href="../../action/delete_chicken.php?ref=<?php echo $row['prim_id']; ?>">Died</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div></td>
          
          </tr>
        <?php }} ?>
        </tbody>
        <tfoot>
      
          <tr>
                                          <th></th>
                                                                      
                                                <th>
                                                  Chick  Category
                                                </th>
                                                                 <th>
                                           Batch
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
                                               
                                           
                                           

                                              
                                                    <th>
                                                    Option
                                                </th>
          </tr>
      
        </tfoot>
      
             
      </table>
           <input type="button" class="btn waves-effect m-r-20 bg-blue " id="toggle" value="select all" onClick="do_this()" />
               <button type="submit" name = "delete" class="btn  waves-effect m-r-20 bg-red" >Delete</button>
                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </form>
            <!-- #END# Exportable Table -->
        
    </section>

 <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    
    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>

</body>
</html>