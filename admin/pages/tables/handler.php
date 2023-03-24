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
<!--end of sidebar-->
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                      List of Handlers
                            </h2>
                            <ul class="header-dropdown m-r--5">
                          <div class="button-demo js-modal-buttons">
               
                                <div class="header">
                           
							 <a type="button" href = "../../print_supplier.php" class="btn  waves-effect m-r-20 bg-green pull-left" style = "margin-right:200px;">Print</a>
                            <ul class="header-dropdown m-r--5">
							  
                              <a rel="facebox" href="add_handler.php" class="btn bg-deep-orange waves-effect" ><h2>add handler</h2></a>               
                           
							</ul>
                          </div>
                            
                            </div>
		
                            </ul>
                        </div>
                        <div class="body">
						 <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM handlers WHERE
                                        shop = '$SEshopno'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                                      <th>
                                          Handler name
                                                </th>
                                                <th>
                                             Address
                                                </th>
                                                <th>
                                                 Contact Person
                                                </th>
                                                 <th>
                                                Contact Number
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
                                     <input type="hidden" name="id" value="'.$row['cock_id'].'">
                                                <td>
                                                    '.$row['handler_name'].'
                                                </td>
                                                <td>
                                                    '.$row['address'].'
                                                </td>
                                                <td class="center">
                                                  '.$row['contact_person'].'
                                                </td>
                                                    <td class="center">
                                                  '.$row['contact_no'].'
                                                </td>
                                            
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_handler.php?id='.$row['handler_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete supplier(sometimes we need to delete someone to start the new one) <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete_handler.php?ref='.$row['handler_id'].'">Delete</a></li>
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
                                    print '
                                    <div class="module-body">
                                 <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No Supplier found</h3>
                                        All of your supplier  will be shown here.
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