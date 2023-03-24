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
	
	<!-- sidebar--->
<?php include ('sidebar.php')?>
<!--end of sidebar-->
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
						 <center>
                            <h1>
                      Sales
                            </h1>
                    </center>
                        </div>
                        <div class="body">
                            <div class="table-responsive">                   <?php
								 include '../../../config/db_config.php';
								 
								 $sql = "SELECT * FROM sales WHERE shop = '$SEshopno' ORDER BY day ASC";
                                 $result = $conn->query($sql);
								$date = ''.date('m').'-'.date('d').'-'.date('Y');

                                 if ($result->num_rows > 0) {
									 print '
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                                       <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
												    <th>
                                                 Unit
                                                </th>
												    <th>
                                                Category
                                                </th>
												<th>
                                                    Total
                                                </th>
												<th>
                                                    Date
                                                </th>
                                     
                                        </tr>
                                    </thead>
                            
                                    <tbody>';
								  while($row = $result->fetch_assoc()) {
									  print ' 
                                        <tr>
                                   
                                                <td>
                                                    '.$row['product_name'].'
                                                </td>
                                                <td>
                                                    '.number_format($row['price']).' '.$SEshopcurrency.'
                                                </td>
                                                <td class="center">
                                                   '.$row['amount'].' 
                                                </td>
												       <td>
                                                   '.$row['unit'].'
                                                </td>
												       <td>
                                                   '.$row['category'].'
                                                </td>
												<td>
                                                   '.number_format($row['total']).' '.$SEshopcurrency.'
                                                </td>
												<td>
                                                  '.$row['date'].'
                                                </td>
                                         
                                            </tr>
								';
                                        
                                       
                                   
										 }
                                    } else {
                                    print '
									<div class="module-body">
                                 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:green">No Sales Found!</h3>
										All products sold on your cofee shop will be shown here.
									</div>
									</div>';
                                       }
									   
									   print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
								 ?>
                                    </tbody>
                                </table>
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