
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
	<?php 
	include('header.php');

	
	
	
	?>

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

            <div class="row clearfix">
    
                <!-- Badges -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
						<?php  include('alerts.php'); ?>
                            <h2>
                          Today Sales Summary  </h2><h2 class = "pull-right">
						  Date: <?php echo" $todaydate" ; ?>
                            </h2>
                   
                        </div>
                        <div class="body">
                            <ul class="list-group">
			         <a type="button" href = "../../daily_report.php" class="btn  waves-effect m-r-20 bg-green">Print</a>
                                <li class="list-group-item">Today Top Selling Product<span class="badge bg-pink"><?php echo "$pname"; ?> <?php echo "$unit"; ?></span></li>
                                <li class="list-group-item">Today Sales<span class="badge bg-cyan"><?php echo number_format($mysum); ?> <?php echo "$SEshopcurrency"; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
				        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                  Genaral Sales Summary 
                            </h2>
                    	
                        </div>
						
                        <div class="body">
                            <ul class="list-group">
							  <a type="button" href = "../../summary_report.php" class="btn  waves-effect m-r-20 bg-green">Print</a>
                                <li class="list-group-item">Top selling product<span class="badge bg-pink"><?php echo"$tpname"; ?> <?php echo $unit1; ?> </span></li>
                                <li class="list-group-item">Expected Profit<span class="badge bg-cyan">
								<?php echo number_format($tincome); ?>  <?php echo "$SEshopcurrency"; ?> </span></li>
                                <li class="list-group-item">Profit Earned<span class="badge bg-teal"><?php echo number_format($pen); ?>  <?php echo "$SEshopcurrency"; ?></span></li>
								
								
								
                               
								
								<?php
                               

								$profit = $tincome - $pen ;
									          if ($profit < 0) {
								          	echo ' <li class="list-group-item">Total Profit Earned<span class="badge bg-orange"> 
											'. number_format(-($profit)) . '  '.$SEshopcurrency.'</span></li>';
					                     } 	else {
                            echo ' 
				                 <li class="list-group-item">Total Losses<span class="badge bg-orange"><span class="badge bg-orange"> '. number_format($profit) . '  '.$SEshopcurrency.'</span></li>
								 ';
                                    	}	?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Badges -->
            </div>

          


            <div class="row clearfix">
                <!-- Contextal Classes -->
     
                <!-- #END# Contextal Classes -->
                <!-- Contextual Classes With Linked Items -->
     
                <!-- #END# Contextual Classes With Linked Items -->
            </div>

            <div class="row clearfix">
                <!-- Colorful Items With Material Design Colors -->
       
                <!-- #END# Colorful Items With Material Design Colors -->
                <!-- Custom Content -->
    
                <!-- #END# Custom Content -->
            </div>

   
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