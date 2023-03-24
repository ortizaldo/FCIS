<?php include('header.php');?>
 <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">
<link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">
  <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
  <link href="../../plugins/nouislider/nouislider.min.css" rel="stylesheet" />
 
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
                  
                            <h2>
                           List of Conditioning
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                  <a type="button" rel = "facebox" href = "add_con.php" class="btn  waves-effect m-r-20 bg-orange">Add condtioning</a>
                <a type="button" href = "datatables/print_conditioning.php" class="btn  waves-effect m-r-20 bg-green">Reports</a>
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
                                 
                                       $sql = "SELECT * FROM conditioning;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                <thead> 
                                       
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                           Chicken  Id
                                            </th>
                                                <th>
                                              Place
                                                </th>
                                                  <th>
                                              Event type
                                                </th>

                                        
                                               <th>
                                           Event date
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
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['cock_id'].'
                                                </td>
                                                <td>
                                             '.$row['place'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['event_type'].'
                                                </td>
                                                  <td>
                                             '.$row['event_date'].'
                                                </td>
                                              
                                              
                                       <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="v_f_status.php?id='.$row['cock_id'].'">View Full Status</a>
                                                     <li><a rel = "facebox" href="status.php?id='.$row['cock_id'].'">Status</a></li>
                                                      <li><a rel = "facebox" href="status.php?id='.$row['cock_id'].'">Feeding</a></li>
                                                        <li><a rel = "facebox" href="con_vac.php?id='.$row['cock_id'].'">Vaccination</a></li>
                                                          <li><a rel = "facebox" href="con_practice.php?id='.$row['cock_id'].'">Practice</a>
                                                                <li><a rel ="facebox"href="battle.php?id='.$row['cock_id'].'&place='.$row['place'].'&event_type='.$row['event_type'].'&event_date='.$row['event_date'].'">Result</a></li>
                                                                 </li>
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
                                 <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records Found!</h3>
                                        All records you register will be shown here.
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
    
    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>