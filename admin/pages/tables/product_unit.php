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

	
	
<?php include ('sidebar.php');?>

    <section class="content">
        <div class="container-fluid">
         
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                          <div class="header">
                            <h2>
                            Products Unit
                            </h2>
                            <ul class="header-dropdown m-r--5">
                              <a rel="facebox" href="add_unit.php" class="btn bg-deep-orange waves-effect" ><h2>add products unit</h2></a>  
                            </ul>             
                            </div>

    
						  
                        <div class="body">
                    
							             <?php
								 include '../../../config/db_config.php';
								 
								 $sql = "SELECT * FROM product_units WHERE shop = '$SEshopno' ORDER BY name";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                             <thead>
                                            <tr>
        
                                                <th>
                                                    Unit Name
                                                </th>
                                                 <th>
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        $pname = $row['name'];
                               print '<tr class="odd gradeX">
                                                <td>
                                                    '.$pname.'
                                                </td>
                                                <td>
                                                <a ';?> onclick="return confirm('Are you sure you want to delete category(sometimes we need to delete someone to start the new one) <?php echo"$pname"; ?> ?');" <?php print 'href="../../action/delete_unit.php?ref='.$pname.'" class="btn btn-small btn-danger">Delete Unit</a>
                                                </td>
                                               
                                            </tr>';
                                    }
                                    } else {
                                         print '
                                                                <div class="module-body">
                                 <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No Product Units!</h3>
                                        All product units you register will be shown here.
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

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>