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
                            <center><h1>
                       Critical Stocks
                            </h1></center>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
								  <a type="button" href = "../../print_critical.php" class="btn  waves-effect m-r-20 bg-green">Printt</a>
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
						<?php
								 include '../../../config/db_config.php';
								 
								$sql = "SELECT * FROM products WHERE shop_id = '$SEshopno' and stock_level >= current_stock";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <th>
                                                    Product Name
                                                </th>
												  <th>
                                                  Unit
                                                </th>
                                                <th>
                                                    Category
                                                </th>
                                                <th>
                                                    Expiration Date
                                                </th>
												   <th>
                                                   Date added
                                                </th>
												<th>
                                                    Selling Price
                                                </th>
												<th>
                                                    Stock
                                                </th>
													<th>
                                                    Supplier
                                                </th>
                                             <th>
                                                 Edit
                                                </th>
                                        </tr>
                                   </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
						
                               print '  <tr>
                                             <td>
                                                    '.$row['name'].'
                                                </td>
												 <td>
                                                    '.$row['unit'].'
                                                </td>
                                                <td>
                                                    '.$row['category'].'
                                                </td>
                                                <td class="center">
                                                  '.$row['expiration_date'].'
                                                </td>
												    <td class="center">
                                                  '.$row['date_added'].'
                                                </td>
												<td>
                                                    '.number_format($row['selling_price']).' '.$SEshopcurrency.'
                                                </td>
												<td>
                                                    '.$row['current_stock'].'
                                                </td>
													<td>
                                                    '.$row['supplier'].'
                                                </td>
                             		<td>
												  <a rel = "facebox"  class="dropdown-toggle btn bg-orange" href="add_stock.php?id='.$row['product_id'].'">Add Stock</a>
												</td>
												    <td>
                                               <a rel = "facebox"  class="dropdown-toggle btn bg-orange" href="modal.php?id='.$row['product_id'].'">Edit</a>
											  
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
										<h3 style="color:green">No Product Found!</h3>
										All stocks that is in the critical level will be shown here.
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