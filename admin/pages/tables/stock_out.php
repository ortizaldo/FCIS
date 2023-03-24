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
    <script src="jquery.js"></script>
    <script src="chosen.jquery.min.js"></script>
	 <link rel="stylesheet" href="chosen.min.css">
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
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
<?php include('navigation_bar.php');?>
    <!-- #Top Bar -->
	

<?php include ('sidebar.php')?>
<!--end of sidebar-->
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
			    <center>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
							<center>
                                <div class="col-xs-12 col-sm-12">
								
                       
									  <form class="form-horizontal row-fluid" action="../../action/stock_out.php" method="POST">
	                           <select class="form-control show-tick " name="product1"   data-show-subtext="true"   data-live-search="true">
						          <option  value="<?php $row['product_id']; ?>" > Select Product... </option>
                                      <?php
													include '../../../config/db_config.php';
								 
								                     $sql = "SELECT * FROM products WHERE shop_id = '$SEshopno' ORDER BY name";
                                                     $result = $conn->query($sql);
                                  
								                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option  value="'.$row['product_id'].'"> '.$row['name'].'  '.$row['category'].' 
													   '.$row['unit'].' Price: '.$row['selling_price'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
													?>
                                    </select>
									
							 <button type="submit" style = "padding-top:20px;margin-top:20px;"class="btn bg-red btn-block btn-lg waves-effect">Submit</button>
                      </form>   
                 
				
                    </div>

                </div>
            </div>
			   </center>
			       <div class="body">
				   <?php

								include '../../../config/db_config.php';
								$id=$_GET['invoice'];
								$sql = "SELECT * FROM stock_out ORDER BY  date_remove";
                                $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
								 	$pen = 0;
								    $cash = 0;
                                  print '
                            <div class="table-responsive">
							
                           
                               
									</div>
                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
									   <div class="icon-and-text-button-demo">
                                     <a type= "button"  href="../../print_stock_out.php" class="btn btn-primary " >
                                    <i class="material-icons">print</i>
                                    <span>export</span>
                                </a>
                                        <tr>
                                 		  <th>Product Name</th>
									   <th>Unit</th>
									    <th>Category</th>
										 <th>Stock Level</th>
										  <th>Current Stock</th>
										   <th>Expiration Date</th>
										    <th>Date Remove</th>
											 <th>Price</th>
											 <th>Supplier</th>
											 <th>Action</th>
                              		</tr>
									
								  </thead>
								
								 	
								  <tbody>';
                                 while($row = $result->fetch_assoc()) {
								     $myvalue = $row['selling_price'];
                                      $pen += $myvalue;
                                  print '
								  <tr>
									  <td>'.$row['name'].'</td>
								       <td>'.$row['unit'].'</td>
							           <td>'.$row['category'].'</td>
									    <td>'.$row['stock_level'].'</td>
										 <td>'.$row['current_stock'].'</td>
										  <td>'.$row['expiration_date'].'</td>
										   <td>'.$row['date_remove'].'</td>
										      <td>'.$row['selling_price'].'</td>
						                     	  <td>'.$row['supplier'].'</td>
						  <td><a href="../../action/pull_back.php?product_id='.$row['product_id'].'&name='.$row['name'].'&category='.$row['category'].'&unit='.$row['unit'].'&stock_level='.$row['stock_level'].'&current_stock='.$row['current_stock'].'&expiration_date='.$row['expiration_date'].'&date_remove='.$row['date_remove'].'&selling_price='.$row['selling_price'].'&buying_price='.$row['buying_price'].'&barcode='.$row['barcode'].'&supplier='.$row['supplier'].'"  class = "btn  btn-danger">Pull Back<span class = "icon-plus"></span></a></td>

									</tr>
										 
								
									
									';
									
						
                                   }
								
								     	
								   print '
								   </tbody> 
								     <tbody>';
						
						 print'
							<tr>
							
					<td colspan="12"><center><strong style="font-size: 20px; color:orange;">Total : '.number_format($pen).' 
					'.$SEshopcurrency.' </strong></center></td>
					
				</tr>';
		print '
					     </tbody>
								  '; 
								   
								   
								   
								  print' 
								   
								</table>
								  ';
								     	
                                   }
  	                           						   else {
									   print '
                                   <div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color:Black">No Inputs!</h3>
										All input sales will be shown here
									</div>';
                                       }
								?>
                            </div>
                        </div>
  </div>
</section>
	</center>

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
	 <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
 <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
 <script src="../../plugins/dropzone/dropzone.js"></script>

  <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
 <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
   <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>
    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>