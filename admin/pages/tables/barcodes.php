<!DOCTYPE html>
<html>

<?php include('header.php');?>

<body class="theme-red">
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

    <div class="overlay"></div>

    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>

<?php include('navigation_bar.php');?>

<?php include ('sidebar.php');?>




    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Products
                            </h2>
                            <ul class="header-dropdown m-r--5">
							                <div class="button-demo js-modal-buttons">
                 <a type="button" href = "../../print_stocks.php" class="btn  waves-effect m-r-20 bg-green">Print</a>
                                <button type="button" data-color="deep-orange" data-target="#largeModal"   data-toggle="modal" data-target="#largeModal" class="btn bg-deep-orange waves-effect">Add Product</button>
                            
                            </div>
				

                                
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
						     
                                 <?php
                                 include '../../../config/db_config.php';
                                 
                                 $sql = "SELECT * FROM products WHERE shop_id = '$SEshopno'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" >
                                    <thead>
                                        <tr>
                                         <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Category
                                                </th>
												  <th>
                                                   Unit
                                                </th>
                                                <th>
                                                    Expire Date
                                                </th>
												    <th>
                                                   Date Added
                                                </th>
                                        
												 <th>
                                                    Selling Price
                                                </th>
											
                                                <th>
                                                  Current  Stock
                                                </th>
												   <th>
                                                  Supplier
                                                </th>
												
													 <th >
                                                Barcode
                                                </th>
												
														 <th>
                                               Supplier
                                                </th>
                                                <th>
                                                   Edit
                                                </th>
                                        </tr>
                                    </thead>
                                   ';
    
                                  while($row = $result->fetch_assoc()) {
									    print '
                                    <tbody>
                                        <tr>
                                                    <td>
                                                    '.$row['name'].'
                                                </td>
                                                <td>
                                                    '.$row['category'].'
                                                </td>
												    <td>
                                                    '.$row['unit'].'
                                                </td>
                                                <td class="center">
                                                        '.$row['expiration_date'].'
                                                </td>
												  <td>
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
										
                            
												<td>';?>  <?php
                                            $text=$row['barcode'];
                         echo "<center><img src='barcode/barcode.php?codetype=Code128&size=40&text=".$text."&print=true'/></center>";
                                         print '
                                                </td>
											 <td>
                                                 <a rel = "facebox" href="modal.php?id='.$row['product_id'].'" class= "btn bg-orange">Edit</a>
                                                </td>
                                            </tr>';
                                    }
                                    } else {
                                    print '
                                    <div class="module-body">
                                 <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No Stocks Found!</h3>
                                        All Stocks you register will be shown here.
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