  			<?php
error_reporting(0);
include 'action/check-login.php';
include 'action/alerts.php';

include '../config/db_config.php';

$sql = "SELECT * FROM shops where shop_id = '$SEshop_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $shop_address = $row['shop_address'];
	$shop_street = $row['shop_street'];
	$shop_phone = $row['shop_phone'];
	$shop_timezone = $row['shop_timezone'];
	$shop_email = $row['shop_email'];
	$SEshopname = $row['shop_name'];
    $owner_name = $row['owner_name'];
    $owner_address = $row['owner_address'];
    }
} else {
 
}
$conn->close();

?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
                <div class="user-info">
        
                <div class="info-container">
            
                <div class="name" id="owner_name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Owner Name: <?php  echo   $owner_name?></div>
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Owner Address: <?php  echo   $owner_address?></div>
                      <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php  echo   $SEshopname?></div>
                    <div class="email"><?php  echo  $shop_address   ?></div>
                     <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a  rel="facebox"  href="account.php"><i class="material-icons">person</i>Profile</a></li>
                                <li>  <a  rel="facebox"  href="update_pass.php"><i class="material-icons">settings</i>Account Settings</a></li>

                            <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>




                      
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                
                    <li>
           
                        <ul class="ml-menu">
                 
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Information Box</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-1.html"> information</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
  
                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Breeding</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="pages/tables/father.php">Sire</a>
                            
                                  <a href="pages/tables/mother.php">Dam</a>
                                  <a href="pages/tables/breed.php">Breed</a>
                                  <a href="pages/tables/mate.php">Mating Information</a>
                                  
                                  
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Assign Services</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                
                            
                                  <a href="pages/tables/deworming.php">Deworming</a>
                                  <a href="pages/tables/vaccination.php">Vaccination</a>
                                  <a href="pages/tables/immune.php">Immunization</a>
                                  <a href="pages/tables/feeding.php">Feeding</a>
                            </li>
                        </ul>
                    </li>
                           
                       
       
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Manage Record</span>
                        </a>
                    
                              <ul class="ml-menu">
                              
                             <a href="pages/tables/chickens.php">Fowl Information</a>
                            
                           
                             <a href="javascript:void(0);" class="menu-toggle">Chicken
                             </a>
                           

                             <ul class="ml-menu">
                                <a href="pages/tables/chicks.php">Chicks</a>
                                <a href="pages/tables/stugs.php">Stags</a>
                                 <a href="pages/tables/bull_stugs.php">Bull Stags</a>
                              <a href="pages/tables/cocks.php">Fighting Cocks</a>

                                  
                              
                          
                        </ul>
                        </ul>
                 </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Conditioning Program</span>
                        </a>
                    
                              <ul class="ml-menu">
                              
                             <a href="pages/tables/conditioning.php">Conditioning Event</a>
                            
                           
                             <a href="javascript:void(0);" class="menu-toggle">Conditioning Service
                             </a>
                           

                             <ul class="ml-menu">
                                <a href="pages/tables/cfeed.php">Feeding</a>
                                <a href="pages/tables/cvacc.php">Vaccination</a>
                                 <a href="pages/tables/cprac.php">Practices</a>
                              

                                  
                              
                          
                        </ul>
                        </ul>
                 </li>
                      
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Generate Reports</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                            <a href="reports.php">Reports</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                                       
                             
                    
                        
        
   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                  <a href="logout.php">Log Out</a>.
                </div>
     
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">Access log</a></li>
                
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                    <?php
                                 include '../config/db_config.php';
                                 
                                  $sql = "SELECT * FROM user_log ";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $label = $row['label'];
      $date_login = $row['date_login'];
   ?> 
                        <li data-theme="red" class="active">
                             <span><b><?php echo $label; ?></b>: </span>
                            <span><?php echo $date_login; ?></span>
                        </li>
                 <?php }} ?>
                       
                    </ul>
                </div>
               
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>