<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
  <title>Hatch Batch</title>
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
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
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
<!-- 
Individual column search



$(document).ready(function() {
  $('#tableTrigger').DataTable({
    "lengthMenu": [
      [10, 25, 50, 100, -1],
      [10, 25, 50, 100, "All"]
    ],
    "scrollY": "200px",
    "dom": 'rtipS',
    // searching: false,
    "deferRender": true,
    initComplete: function() {
      var column = this.api().column();

      var select = $('<select class="filter"><option value=""></option></select>')
        .appendTo('#selectTriggerFilter')
        .on('change', function() {
          var val = $(this).val();
          column.search(val ? '^' + $(this).val() + '$' : val, true, false).draw();
        });

      column.data().unique().sort().each(function(d, j) {
        select.append('<option value="' + d + '">' + d + '</option>');
      });
    }
  });
});
 -->
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
                      Chickens
                            </h2>
                            <ul class="header-dropdown m-r--5">
                          <div class="button-demo js-modal-buttons">
               
                                <div >
                           
               <a type="button" href = "../../print_feed.php" class="btn  waves-effect m-r-20 bg-green pull-left" style = "margin-right:50px;">Print</a>

                            
                              <a rel="facebox" href="add_feed.php" class="btn bg-deep-orange waves-effect" ><h2>Chickens</h2></a>               
                           
             
                          </div>
                            
                            </div>
    
                            </ul>
                        </div>
                        <div class="body">

                            <div class="table-responsive">
                                <form action = "../../action/from_hatch.php" method = "POST">
     <p id="selectTriggerFilter"><label><b>Filter:</b></label><br></p>
<!-- <table id="tableTrigger" class="display" cellspacing="0" width="100%"> -->
<table id="example" class="display" style="width:100%">
         <input type="button" class="btn waves-effect m-r-20 bg-blue " id="toggle" value="select all" onClick="do_this()" />
               <button type="submit" name = "delete" class="btn  waves-effect m-r-20 bg-red" >Delete</button>
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
                                                        <th>
                                                    Option
                                                </th>
    </tr>
  </thead>
  <tfoot>
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
                                                          <th>
                                                    Option
                                                </th>
    </tr>
  </tfoot>
  <tbody>

    <?php
             include '../../../config/db_config.php';
                                 
                  $sql = "SELECT * FROM chickens";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                    $i = 21; 
                 while($row = $result->fetch_assoc()) {
                   $i++;
                    $y++;
                  $chicken_id = $row['chicken_id'];
                      $type = $row['type'];
                  $chicken_categories = $row['chicken_categories'];
                  $chicken_father_id = $row['chicken_father_id'];
                  $chicken_mother_id = $row['chicken_mother_id'];
                  $bloodline = $row['bloodline'];
                  $age = $row['age'];
                  $day_to_transfer = $row['day_to_transfer'];
                  $no_days = $row['no_days'];


                                ?> 
    <tr>
      <td><?php echo $chicken_id ?></td>
      <td><?php echo $chicken_categories ?></td>
          <td><?php echo $type ?></td>
      <td><?php echo $chicken_father_id ?></td>
      <td><?php echo $chicken_mother_id ?></td>
      <td><?php echo $bloodline ?></td>
      <td><?php echo $age ?></td>
      <td><?php echo $day_to_transfer ?></td>
      <td><?php echo $no_days ?></td>
      <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                      <li><a  href="chicken_information.php?id='.$row['chicken_id'].'">View Full Info</a></li>
                                                        <li><a rel = "facebox" href="edit_chicken.php?id='.$row['chicken_id'].'">Edit</a></li>
                                                        <li><a href="../../action/delete_chicken.php?ref='.$row['chicken_id'].'">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                     
                                                </td>
    </tr>
<?php }} ?>
 
  </tbody>
</table>
           <input type="button" class="btn waves-effect m-r-20 bg-blue " id="toggle" value="select all" onClick="do_this()" />
               <button type="submit" name = "delete" class="btn  waves-effect m-r-20 bg-red" >Delete</button>
                     <button  type="submit" name = "transfer"  class="btn  waves-effect m-r-20 bg-orange " >Transfer</button>
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