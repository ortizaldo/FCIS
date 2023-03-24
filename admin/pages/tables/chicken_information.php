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
 
  
      <link rel="stylesheet" href="family_tree/style.css">
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
                                    <a type="button" rel = "facebox" href = "chickens.php" class="btn  waves-effect m-r-20 bg-orange">back</a>
                                <a type="button" href = "../../print_chickeninfo.php?id=<?php echo $id ?>" class="btn  waves-effect m-r-20 bg-green">Print</a>
                              
                                
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
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where prim_id = '$id';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                   <thead> 
                                  
                                            </thead>
                                    <thead style = "text-align:center;">
                                        <tr style = "text-align:center;">
                                          <th>
                                          Fowl  Id
                                            </th>
                                                <th>
                                                  Fowl  Category
                                                </th>
                                                   <th>
                                             Gender
                                                </th>
                                                  <th>
                                              Sire ID
                                                </th>

                                                                
                                               <th>
                                              Dam ID
                                                </th>
                                                    <th>
                                              Blood Line
                                                </th>

                                               <th>
                                             Age
                                                </th>
                                                  
                                                   
                                                   <th>
                                              Day to transfer
                                                </th>
                                                   <th>
                                            Hatced day
                                                </th>

                                                     
                                             
                                        
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
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
                                             '.$row['type'].'
                                                </td>
                                                  
                                                    <td>
                                             '.$row['chicken_father_id'].'
                                                </td>
                                                  <td>
                                             '.$row['chicken_mother_id'].'
                                                </td>
                                                    <td>
                                                    '.$row['bloodline'].'
                                                </td>
                                               <td>
                                                    '.$row['age'].'
                                                </td>
                                                 
                                                <td>
                                                    '.$row['day_to_transfer'].'
                                                </td>
                                                    <td>
                                                    '.$row['no_days'].'
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
                          





                                 ?>
                                         <center><h1>Transfer History</h1></center>
                                       <?php
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chicks_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Chick</h3>
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
                                 
                                       $sql = "SELECT * FROM stag_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Stag</h3>
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
                                 
                                       $sql = "SELECT * FROM bull_stag_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Bull Stag</h3>
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
                                $bull_stag =  $row['chicken_id'];
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
                                      <h3>Bull Stag</h3>
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
                                 
                                       $sql = "SELECT * FROM cock_his where prim_id = '$id' ;";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead> 
                                        <h3>Cock</h3>
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
                                $cock =  $row['chicken_id'];
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
                                      <h3>Cock</h3>
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
                                     <div class="header">
                          <center>
                              <h1>
                         
                         Services
                            </h1>
                          </center>  
                     
                        </div>
                        <h3>Deworming</h3>
                                   <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$chick';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
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
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
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
                            
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
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
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$bull_stug';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
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
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
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
                               
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM deworm where cock_id = '$cock';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Cage ID
                                            </th>
                                                <th>
                                              Date of Deworming
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Name of Drug
                                                </th>
                                                     <th>
                                              
                                              Dosage Deworm
                                                </th>
                                                <th>
                                              
                                              Deworming Description
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
                                           
                                                 <td>
                                             '.$row['deworm_id'].'
                                                </td>
                                                <td>
                                             '.$row['deworm_date'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['deworm_type'].'
                                                </td>
                                                   <td>
                                             '.$row['usage_deworm'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           
                                            <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_deworm.php?id='.$row['deworm_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-deworm.php?ref='.$row['deworm_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                        <h3>Vaccination</h3>
                                   <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$chick';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
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
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                                                 <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
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
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                                                 <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$bull_stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
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
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                                                 <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM vaccination where cock_id = '$cock';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                          <th>
                                         Place
                                            </th>
                                                <th>
                                              Date Vaccinate
                                                </th>
                                                   <th>
                                                Chicken Id
                                                </th>
                                                      <th>
                                              Injection
                                                </th>
                                                     <th>
                                              
                                              Dosage Vaccinition
                                                </th>
                                                <th>
                                              
                                              Vaccinition Description
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
                                           
                                                 <td>
                                             '.$row['vac_id'].'
                                                </td>
                                                <td>
                                             '.$row['date_vaccinate'].'
                                                </td>
                                                  <td>
                                             '.$row['cock_id'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['injection'].'
                                                </td>
                                                   <td>
                                             '.$row['dosage_vac'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                                                 
                                           <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_vaccine.php?id='.$row['vac_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-vaccine.php?ref='.$row['vac_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                       <h3>Immunization</h3>
                                            <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$chick';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
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
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                           <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
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
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                           <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$bull_stag';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
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
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                   <?php
          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM immune where cock_id = '$cock';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                       
                                                <th>
                                             Immune Date
                                                </th>
                                                   <th>
                                              Immune Type
                                                </th>
                                                      <th>
                                              Dosage Immune
                                                </th>
                                                <th>
                                              Immunization Description
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
                                           
                                                 <td>
                                             '.$row['immune_date'].'
                                                </td>
                                                <td>
                                             '.$row['immune_type'].'
                                                </td>
                                                  <td>
                                             '.$row['dosage_immune'].'
                                                </td>
                                                <td>
                                             '.$row['descrip'].'
                                                </td>
                          <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_immune.php?id='.$row['immune_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-immune.php?ref='.$row['immune_id'].'">Delete</a></li>
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
                                   
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                
                                      ?>
                                      <h3>Feeding</h3>
                                                                    <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$chick' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
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
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
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
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                                                               <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$stag' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
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
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
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
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                                                               <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$bull_stag' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
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
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
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
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                                        <?php
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM feed where cock_id = '$cock' ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                                <th>
                                         Cock ID
                                                </th>
                                                      <th>
                                          Date Feed
                                                </th>
                                                         <th>
                                        Name or Water
                                                </th>
                                                <th>
                                        Feed Description
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
                                     <input type="hidden" name="id" value="'.$row[' cock_id'].'">
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['feed_date'].'
                                                </td>
                                                 <td>
                                                    '.$row['type_feed'].'
                                                </td>
                                                <td>
                                                    '.$row['descrip'].'
                                                </td>
                                                  
                                              
                                                
                                                <td class="center">
                                                <div class="controls">
                                                    
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn bg-orange" data-toggle="dropdown" href="#">Option <i class="icon-caret-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                        <li><a rel = "facebox" href="edit_feed.php?id='.$row['feed_id'].'">Edit</a>
                                                        <li><a '; ?> onclick="return confirm('Are you sure you want to delete breed <?php echo $row['name']; ?> ?')" <?php print 'href="../../action/delete-feed.php?ref='.$row['feed_id'].'">Delete</a></li>
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
                                    
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>

  <div class="header">
                            <center><h1>
                         
                         Pit History
                            </h1></center>
                     
                        </div>
                                   <?php
                $id = $_GET['id'];
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM battles where prim_id = '$id';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable ">
                                    <thead style = "text-align:center;">
                                        <tr class = "warning" style = "text-align:center;">
                                           <th>
                                         Weight
                                            </th>
                                               <th>
                                         Height
                                            </th>
                                               <th>
                                         Injuries
                                            </th>
                                               <th>
                                         Gaff
                                            </th>
                                               <th>
                                         Bloodline
                                            </th>
                                                <th>
                                     Opponents Bloodline   
                                            </th>
                                                <th>
                                      Opponents Owner 
                                            </th>

                                                <th>
                                      Opponents weight
                                            </th>
                                         
                                                <th>
                                      Opponents height 
                                            </th>
                                        
                                          <th>
                                  Opponents gaff 
                                            </th>
                                               <th>
                                Opponents injuries 
                                            </th>

                                                <th>
                                                 Event Type
                                                </th>
                                                   <th>
                                            Date held
                                                </th>
                                                  <th>
                                             Result
                                                </th>
                                          
                                        </tr>
                                    </thead> 
                                     <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                             <input type="hidden" name="id" value="'.$row['chicken_id'].'">
                                                    <td>
                                             '.$row['weight'].'
                                                </td>
                                                       <td>
                                             '.$row['height'].'
                                                </td>
                                                       <td>
                                             '.$row['injuries'].'
                                                </td>
                                                       <td>
                                             '.$row['gaff'].'
                                                </td>
                                                       <td>
                                             '.$row['bloodline'].'
                                                </td>
                                                       <td>
                                             '.$row['obloodline'].'
                                                </td>
                                                       <td>
                                             '.$row['oowner'].'
                                                </td>
                                                       <td>
                                             '.$row['oweight'].'
                                                </td>
                                                       <td>
                                             '.$row['oheight'].'
                                                </td>
                                                       <td>
                                             '.$row['ogaff'].'
                                                </td>
                                                       <td>
                                             '.$row['oinjuries'].'
                                                </td>

                                                 <td>
                                             '.$row['place'].'
                                                </td>
                                                <td>
                                             '.$row['event_type'].'
                                                </td>
                                                  <td>
                                             '.$row['date_held'].'
                                                </td>
                          
                                                    <td>
                                             '.$row['result'].'
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
                                
                                      ?>
                            </div>
                        </div>
                    </div>
                </div   >             <center><h1>Ancestor</h1></center>
                  <h1>Sire</h1>
                 <div class="tree">

<ul>

  <li>
  <a href="#">
    Sire
 <h3>S-5376</h3></a>
    <ul>
      <li><a href="#"><h3>4-D-00020-00013</h3> </a>
 
      </li>
      <li><a href="#"><h3>8-D-00020-00008</h3></a>
   
      </li>
      <li><a href="#"><h3>9-D-00020-00009</h3></a>
     
      </li>
      <li><a href="#"><h3>1-D-00020-00010</h3></a>
    
      </li>
      <li><a href="#"><h3>2-D-00020-00011</h3></a>
  
      </li>
      <li><a href="#"><h3>3-D-00020-00012</h3></a>
        
      </li>
    </ul>
  </li>
</ul>
  </div>
                 <div class="col-md-6">

             
                <div class="tree">

  <ul>

            <?php
             $chicken_id = $_GET['id'];
                $sql = "SELECT * FROM chickens where chicken_id = '$id';";
                                 $result = $conn->query($sql);
                                   if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {

                                          $father = $row['chicken_father_id'];
                                       }}

                                

           
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where prim_id = '$father';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                    $sire_father_id = $row['chicken_father_id'];
                                      $sire_mother_id = $row['chicken_mother_id'];


                                  ?>
    <li>
      <a href="#">Father: <?php echo $sire_father_id ?></a>--
      --<a href="#">Mother: <?php echo  $sire_mother_id  ?></a>
      <ul>
     
        <li>
          <a href="#">Child: <?php echo $chicken_id  ?></a>
          <ul>
           
       
    <?php }} ?>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>
</div>

 <div class="col-md-6">

   <div class="tree">

  <ul>

            <?php
             $chicken_id = $_GET['id'];
                    $sql = "SELECT * FROM chickens where chicken_id = '$id';";
                                 $result = $conn->query($sql);
                                   if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {

                                          $mother = $row['chicken_mother_id'];
                                       }}

          
                                 include '../../../config/db_config.php';
                                 
                                       $sql = "SELECT * FROM chickens where prim_id = '$mother';";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                   while($row = $result->fetch_assoc()) {
                                    $dam_father_id = $row['chicken_father_id'];
                                      $dam_mother_id = $row['chicken_mother_id'];


                                  ?>
    <li>
      <a href="#">Father: <?php echo $dam_father_id ?></a>--
      --<a href="#">Mother: <?php echo  $dam_father_id  ?></a>
      <ul>
     
        <li>
          <a href="#">Child: <?php echo $chicken_id  ?></a>
          <ul>
           
       
    <?php }} ?>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
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