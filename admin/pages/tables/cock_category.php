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
<!--end of sidebar-->
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center><h1>
                           Category
                            </h1></center>
                            <ul class="header-dropdown m-r--5">
                       <div class="button-demo js-modal-buttons">
                      <div class="header">
                        
                            <ul class="header-dropdown m-r--5">
                             <button type="button" class="btn  waves-effect m-r-20 bg-orange" data-toggle="modal" data-target="#defaultModal">Add Category</button>               
                            </div>
                             <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add Category</h4>
                        </div>
                        <div class="modal-body">
                                         <form action ="../../action/new-category.php" method= "POST">
                                <div class="form-group form-float">
                                <div class="form-line">
                          <input type="text" class="form-control" name="category" placeholder="Category Name" required autofocus>
                        </div>
                                </div>

                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
                            </div>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
							 <?php
								 include '../../../config/db_config.php';
								 
								 $sql = "SELECT * FROM cock_categories WHERE shop = '$SEshopno' ORDER BY name";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
        
                                                <th>
                                                    Category Name
                                                </th>
                                                 <th>
                                                    Delete
                                                </th>
                                            </tr>
                                             </thead>
                                        <tbody>';
										  while($row = $result->fetch_assoc()) {
					                      	$category = $row['name'];
                                                $id = $row['id'];
                                         print '<tr>
                                            <td>
                                                    '.$category.'
                                                </td>
                                                <td>
                                                <a ';?> onclick="return confirm('Are you sure you want to delete category(sometimes we need to delete someone to start the new one) <?php echo"$pname"; ?> ?');" <?php print 'href="../../action/delete_category.php?ref='.$id.'" class="btn btn-small btn-danger">Delete category</a>
                                                </td>
                                               
                                            </tr>';
                                    }
                                    } else {
                                         print '
										 						<div class="module-body">
                                 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:green">No Record listed!</h3>
										All  category you register will be shown here.
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