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
	

<?php include ('sidebar.php'); ?>
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
                                <?php 
                             $id = $_GET['id'];
                                 ?>
								
                <h1>Sire Id :<?php echo  $id; ?></h1>
                       
									  <form class="form-horizontal row-fluid" action="../../action/add_breeder.php" method="POST">
                    <input type="hidden" name = "father_id" value = "<?php echo $id; ?>">
	                           <select class="form-control show-tick " name="mother_id"   data-show-subtext="true"   data-live-search="true">
						          <option  value="<?php $row['mother_id']; ?>" > Select Dam... </option>
                              <?php
													include '../../../config/db_config.php';
								 
								                     $sql = "SELECT * FROM mother ";
                                                     $result = $conn->query($sql);
                                  
								                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option  value="'.$row['mother_id'].'"> '.$row['mother_id'].' Racist '.$row['mother_racist'].'</option>';
                                                     
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
								$id=$_GET['id'];
								$sql = "SELECT * FROM breeders where breeder_f_id = '$id' group by breeder_id ORDER BY  date_breed";
                                $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
								 	
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
                        <th>
                                         Breeder ID
                                                </th>

                                                      <th>
                                          Father ID
                                                </th>
                                                         <th>
                                        Mother_id
                                                </th>
                                                       <th>
                                        Bloodline
                                                </th>
                                                      <th>
                                        Date breed
                                                </th>
											 <th>Action</th>
                              		</tr>
									
								  </thead>
								
								 	
								  <tbody>';
                                 while($row = $result->fetch_assoc()) {
								  
                                  print '
								  <input type="hidden" name="id" value="'.$row['cock_id'].'">
                                               
                                                <td>
                                                    '.$row['breeder_id'].'
                                                </td>
                                            
                                                 <td>
                                                    '.$row['breeder_f_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['breeder_m_id'].'
                                                </td>
                                                  <td>
                                                    '.$row['bloodline'].'
                                                </td>
                                                 <td>
                                                    '.$row['date_breed'].'
                                                </td>
						  <td><a href="../../action/pull_back.php?cock_id='.$row['cock_id'].'&cock_categories='.$row['cock_categories'].'&father_bloodline='.$row['father_bloodline'].'&f_num_wins='.$row['f_num_wins'].'&f_num_loss='.$row['f_num_loss'].'&mother_bloodline='.$row['mother_bloodline'].'&siblings='.$row['siblings'].'&wins='.$row['wins'].'&losses='.$row['losses'].'&day_to_transfer='.$row['day_to_transfer'].'&no_days='.$row['no_days'].'&handler='.$row['handler'].'"  class = "btn  btn-danger">Pull Back<span class = "icon-plus"></span></a></td>

									</tr>
										 
								
									
									';
									
						
                                   }
								
								     	
								   print '
								   </tbody> 
								     <tbody>';
						
				
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
										All input  will be shown here
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