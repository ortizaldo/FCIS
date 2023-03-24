<!DOCTYPE html>
<html>
<?php
error_reporting(0);
include 'action/check-login.php';
include 'action/alerts.php';

?>
<?php include('header.php');?>
<link href="plugins/dropzone/dropzone.css" rel="stylesheet">
 <link href=plugins/multi-select/css/multi-select.css" rel="stylesheet">

  <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
 <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
 <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="plugins/dropzone/dropzone.js"></script>
 <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
 <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	 <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet
 <link href="plugins/dropzone/dropzone.css" rel="stylesheet">
 <link href="plugins/multi-select/css/multi-select.css" rel="stylesheet">

  <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
 <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
 <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<script src="plugins/dropzone/dropzone.js"></script>
 <script src="plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
 <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

<script src="plugins/jquery-spinner/js/jquery.spinner.js"></script>
    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
 <script src="plugins/nouislider/nouislider.js"></script>
 <script src="js/pages/forms/advanced-form-elements.js"></script>
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
	<style>
	        #chart {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
        .amcharts-pie-slice {
          transform: scale(1);
          transform-origin: 50% 50%;
          transition-duration: 0.3s;
          transition: all .3s ease-out;
          -webkit-transition: all .3s ease-out;
          -moz-transition: all .3s ease-out;
          -o-transition: all .3s ease-out;
          cursor: pointer;
          box-shadow: 0 0 30px 0 #000;
      }

      .amcharts-pie-slice:hover {
          transform: scale(1.1);
          filter: url(#shadow);
      }    
          #month {
            width: 100%;
            height: 150px;
             margin-left: 5px;
          }   
              #chartdaily {
            width: 98%;
            height:150px;
             margin-left:15px;
          }  
                  #yearly {
            width: 98%;
            height: 150px;
             margin-left:15px;
          }  
		  </style>
	
    <!-- Top Bar -->
	<?php include('navigation_bar.php');                 ?>
	    <!-- #Top Bar -->
		
		
		
		
		
		
		
		

    

	
  <?php include('sidebar.php');?>
  
  
  
  
  
  
  
  
  
  
  
  
  

    <section class="content">
                  <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                         User
                            </h2>
                            <ul class="header-dropdown m-r--5">
                      <div class="button-demo js-modal-buttons">
                 <a type="button" href = "../../print_user.php" class="btn  waves-effect m-r-20 bg-green">Print</a>
                                <button type="button" data-color="deep-orange" data-target="#largeModal"   data-toggle="modal" data-target="#largeModal" class="btn bg-deep-orange waves-effect">Add User</button>
                            
                            </div>
							    <!-- Large Size -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                        <div class="module-head">
                                    <h3 style = "color:orange;">
                                        New User</h3>
                                </div>
                                <div class="module-body baby">
                                <?php
                            
                                if (isset($_SESSION['newmwmber']) && $_SESSION['newmwmber'] == true) {
                                 $susername = $_SESSION['susername'];
                                 $spassword = $_SESSION['suserpaa'];
                                 print '
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Registration completed, Username = <strong>'.$susername.' </strong> and password = <strong>'.base64_decode("$spassword").' </strong>
                                    </div>
                                    ';
                                 }else{
                            
                                  }
                                  
                                if(isset($_GET['in'])) {
                                    print '
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        '.$_GET['in'].' 
                                    </div>
                                    ';
                                }else{
                                    
                                }
                                ?>
         <form class="form-horizontal row-fluid" action="action/new-user.php" method="POST">
           <div class="form-group form-float">
                 <div class="form-line">
                 Full Name: <input type="text" class="form-control" name="fullname" placeholder="" required autofocus>
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                    Email address: <input type="email" class="form-control" name="email" placeholder=" " required autofocus>
                        </div>
                                </div>
                              <div class="form-group form-float">
                                <div class="form-line">
         <select class="form-control show-tick" name = "gender">
		                          <option>Gender</option> 
                                        <option>Male</option>
                                        <option>Female</option>
                                   
                                    </select>

                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                       Contact Number:<input type="number" class="form-control" name="phone" placeholder="" required autofocus>
                        </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                                    <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
                            </ul>
                        </div>
                    </form>


                        <h6>          <?php
                            
                                if (isset($_SESSION['newmwmber']) && $_SESSION['newmwmber'] == true) {
                                 $susername = $_SESSION['susername'];
                                 $spassword = $_SESSION['suserpaa'];
                                 print '
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        Registration completed, Username = <strong>'.$susername.' </strong> and password = <strong>'.base64_decode("$spassword").' </strong>
                                    </div>
                                    ';
                                 }else{
                            
                                  }
                                  
                                if(isset($_GET['in'])) {
                                    print '
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        '.$_GET['in'].' 
                                    </div>
                                    ';
                                }else{
                                    
                                }
                                ?></h6>
                        <div class="body">
						     <?php
								 include '../config/db_config.php';
								 
								 $sql = "SELECT * FROM users WHERE shop = '$SEshopno'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
									 print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                             <th>
                                                    User ID
                                                </th>
                                                <th>
                                                    Full Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Gender
                                                </th>
												<th>
                                                    Phone
                                                </th>
												<th>
                                                   Avatar
                                                </th>
                                                <th>
                                                    Option
                                                </th>
                                         </tr>
                                        </thead>
                                        <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
									  $avatar = $row['avatar'];
                               print ' <tr>
                                           <td>
                                                    '.$row['user_id'].'
                                                </td>
                                                <td>
                                                    '.$row['fullname'].'
                                                </td>
                                                <td>
                                                    '.$row['email'].'
                                                </td>
                                                <td class="center">
                                                    '.$row['gender'] .'
                                                </td>
												<td>
                                                    '.$row['phone'].'
                                                </td>
												<td>';
												if ($avatar == null){
												print'<img src="../images/'.$row['gender'].'.png" width="60">';
												}else{
												 print '<img src="data:../images/jpeg;base64,'.base64_encode($avatar ).'" width="60"/>';	
												}
												
												
												
                                                print '
                                                </td>
                                                <td class="center">
                                               <div class="control-group">
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a  rel="facebox"  href="edit_user.php?id='.$row['user_id'].'">Edit User</a></li>
														<li><a '; ?> onclick="return confirm('Are you sure you want to delete user(sometimes we need to delete someone to start the new one) <?php echo $row['fullname']; ?> ?')" <?php print 'href="action/delete_user.php?ref='.$row['user_id'].'">Delete User</a></li>
													</ul>
												</div>
											</div>
										</div>
                                                </td>
                                            </tr>';
                                    }
                                    } else {
                                     print '
									<div class="module-body">
                                 <div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<h3 style="color: #c65353">No User Found!(Forever alone)</h3>
										All registered users will be shown here.
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
  <!-- Jquery CountTo Plugin Js -->

	
    <script type="text/javascript" src="jquery.min.js"></script>
					<script src="js/graph/plugins/amcharts/amstock.js"></script>		
				 <script src="js/graph/plugins/amcharts/amcharts.js"></script>
        <script src="js/graph/plugins/amcharts/serial.js"></script>
       
        <script src="js/plugins/amcharts/themes/pattern.js"></script>
    <script src="js/plugins/amcharts/themes/light.js"></script>
    <script src="js/graph/plugins/animate/animate.min.js"></script>
      <script src="js/graph/plugins/amcharts/pie.js"></script>

                 <script src="bootstrap/js/bootstrap.min.js"></script>

                <script src="bootstrap/js/metisMenu.min.js"></script>


            <script src="js/sb-admin-2.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>


 
    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>