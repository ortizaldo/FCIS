<?php include('header.php');?>
 <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">
<link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">
  <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
  <link href="../../plugins/nouislider/nouislider.min.css" rel="stylesheet" />
 <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
 <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
 <script src="../../plugins/dropzone/dropzone.js"></script>

  <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
 <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
   <script src="../../plugins/nouislider/nouislider.js"></script>
   <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>
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

<?php include ('sidebar.php'); ?>
<!--end of sidebar-->
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
     

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                           List of Stags
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
								
							<a type="button" href = "datatables/print_stag.php" class="btn  waves-effect m-r-20 bg-green">Reports</a>
                             
                                </li>
                            </ul>
                        </div>
                        <div class="body">
						    <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where chicken_categories = 'Stag' and type = 'Male'  ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                                     <thead> 
                                        <h1>Stags</h1>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                        
                                            </th>
                                          <th>
                                           Stag Id
                                            </th>
                                                <th>
                                                  Stag  Category
                                                </th>
                                                  <th>
                                            Stag Sire ID
                                                </th>

												                
                                               <th>
                                              Stag Dam ID
                                                </th>
                                               <th>
                                             Age
                                                </th>
                                                    <th>
                                            Cage
                                                </th>
                                                  
                                                 <th>
                                            Hatched day
                                                </th>  
                                                     <th>
                                             Date transfered
                                                </th>   
                                                   <th>
                                              Day to transfer
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
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                         <td>
                                                <image class = "thumbnail" style ="height:70px; width:120px;no-repeat center top;" src = "../../action/image/'.$row['image'].'" > 
                                                    
                                                </td>
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
                                                    '.$row['cage'].'
                                                </td>
                                                    <td>
                                                    '.$row['no_days'].'
                                                </td>
                                                      <td>
                                                    '.$row['date_transfered'].'
                                                </td>
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                                                
                                               
                                                        

<td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="transfer_stug.php?id='.$row['chicken_id'].'">Transfer</a>
                                                        <li><a rel = "facebox" href="edit_stug.php?id='.$row['chicken_id'].'">Edit</a>
                                                         <li><a rel = "facebox" href="add_con.php?id='.$row['chicken_id'].'">Battle</a>
                                                           <li><a href="../../action/delete_chicken.php?ref='.$row['prim_id'].'">Died</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    
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
                                     $conn->close();
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
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
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
 <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
 <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
 <script src="../../plugins/dropzone/dropzone.js"></script>

  <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
 <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>