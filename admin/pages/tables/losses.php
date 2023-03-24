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

     <link rel="stylesheet" href="family_css/style.css">
  <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
 <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
   <script src="../../plugins/nouislider/nouislider.js"></script>
   <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>
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
               <?php
                $id = $_GET['id'];
                ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                               <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                 
                                <a type="button" href = "../../print_losses.php" class="btn  waves-effect m-r-20 bg-green">Print</a>
                              
                                
                                </li>
                            </ul>
                           
                        <p class=MsoNormal style = "margin-right:10px;" >
                 
    
                        <center>
                            <h1>
                         
                         Chicken Information
                            </h1>
                            </center>
                     
                        </div>
                        <div class="body" >
                       
                                       <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where type = 'Female' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Female</h3>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                           Chick  Id
                                            </th>
                                                <th>
                                                  Chick  Category
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                          
                                                          <th>
                                            Hatched Day
                                                </th>
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                               
                                           
                                           

                                                                      
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                       $chick =  $row['chicken_id'];
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['chicken_id'].'
                                                </td>
                                                <td>
                                             '.$row['chicken_categories'].'
                                                </td>
                                                  
                                                    <td>
                                             '.$row['chicken_father_id'].'
                                                </td>
                                                  <td>
                                             '.$row['chicken_mother_id'].'
                                                </td>
                                         
                                                      <td>
                                                    '.$row['no_days'].'
                                                </td>
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                      <h3>Female Chicken</h3>
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
                                
                                      ?>
                                         <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM died;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Died Chicken</h3>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                           Chick  Id
                                            </th>
                                                <th>
                                                  Chick  Category
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                               <th>
                                             Age
                                                </th>
                                                          <th>
                                            Hatched Day
                                                </th>
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                               
                                           
                                           

                                                                      
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                                $stag =  $row['chicken_id'];
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                 <td>
                                             '.$row['chicken_id'].'
                                                </td>
                                                <td>
                                             '.$row['chicken_categories'].'
                                                </td>
                                                  
                                                    <td>
                                             '.$row['chicken_father_id'].'
                                                </td>
                                                  <td>
                                             '.$row['chicken_mother_id'].'
                                                </td>
                                               <td>
                                                    '.$row['age'].'
                                                </td>
                                                      <td>
                                                    '.$row['no_days'].'
                                                </td>
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                      <h3>Stag</h3>
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
                                
                                      ?>
                                       <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM unhatched ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Unhatched</h3>
                                            </thead>
                                    <thead>
                                        <tr>
                                          <th>
                                          Batch
                                            </th>
                                                <th>
                                                 Total Egg Unhatched
                                                </th>
                                                  <th>
                                             Mother Id
                                                </th>

                                                                
                                               <th>
                                              Breeder Id
                                                </th>
                                             
                                               
                                           
                                           

                                                                      
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                              
                               print '
                                        <tr>
                                       
                                                 <td>
                                             '.$row['batch'].'
                                                </td>
                                                <td>
                                             '.$row['unhatched_no'].'
                                                </td>
                                                  
                                                    <td>
                                             '.$row['mother_id'].'
                                                </td>
                                                  <td>
                                             '.$row['breeder_id'].'
                                                </td>
                                             
                    
                      
                                               
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                      <h3>Unhatched</h3>
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
                                
                                      ?>
                                       
  
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
 <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
 <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
 <script src="../../plugins/dropzone/dropzone.js"></script>

  <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>
 <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>