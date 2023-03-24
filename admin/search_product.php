<!DOCTYPE html>
<html>
<?php
error_reporting(0);
include 'action/check-login.php';
include 'action/alerts.php';

?>
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
    </div>
    <?php
$producttosearch = $_SESSION['producttosearch'];
error_reporting(0);

?>
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
                            Products
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                  <a type="button" rel = "facebox" href = "pages/tables/modal_add_stock.php" class="btn  waves-effect m-r-20 bg-orange">Add Product</a>
                <a type="button" href = "print_products.php" class="btn  waves-effect m-r-20 bg-green">Print</a>
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
                                 include '../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM products WHERE name  like'%$producttosearch%'  and shop_id = '$SEshopno' ;";
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
                                                 Edit
                                                </th>
                                        </tr>
                                    </thead>  <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['product_id'].'">
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
                                               <a rel = "facebox"  class="dropdown-toggle btn bg-orange" href="modal.php?id='.$row['product_id'].'">Edit</a>
                                                </td>
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                    <div class="module-body">
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No Product Found!</h3>
                                        All products you register will be shown here.
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

	
  
							



                 <script src="bootstrap/js/bootstrap.min.js"></script>

                <script src="bootstrap/js/metisMenu.min.js"></script>


            <script src="js/sb-admin-2.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

        <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="../scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="../scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../scripts/common.js" type="text/javascript"></script>
      
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

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>