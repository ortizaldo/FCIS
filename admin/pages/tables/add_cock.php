<!DOCTYPE html>
<html>

<?php include('header.php');?>






<?php

error_reporting(0);
$id = $_GET['id'];
include '../../../config/db_config.php';

$sql = "SELECT * FROM cocks WHERE cock_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $cock_id = $row['cock_id'];
      $cock_categories = $row['cock_categories'];
    $father_bloodline = $row['f_num_wins'];
    $f_num_loss = $row['f_num_loss'];
    $mother_bloodline = $row['mother_bloodline'];
    $siblings = $row['siblings'];
    $wins = $row['wins'];
    $losses = $row['losses'];
    $pu = $row['unit'];
      $day_to_transfer = $row['day_to_transfer'];
    $no_days = $row['no_days'];
     
    }
} else {

}
$conn->close();

?>


                         
                            <form action = "../../action/update-cock.php" method= "POST">

                               <input type="hidden" class="form-control" name="id"    value = "<?php echo $id?> ">
                         <div class="form-group form-float">
                                <div class="form-line">
                          <input type="hidden" class="form-control" name="barcode" placeholder="Product Name"   value = "<?php echo $barcode?> ">
                        </div>
                                </div>
                            
      
                             
                   <input type="hidden" class="form-control" name="sellingprice" placeholder="Seeling Price" value = "<?php echo $psp?>">
                  
                                 
                    <input type="hidden" class="form-control" name="buyingprice" placeholder="Buying Price" value = "<?php echo $pbp?>">
                    
                                <div class="form-group form-float">
                                <div class="form-line">
                      Product Name:<input type="text" name = "product" class="form-control"  placeholder="Add stock" value = "<?php echo $pname;?> " disabled>
                        </div>
                                </div>
								      <div class="form-group form-float">
                                <div class="form-line">
                       Opening Stock :<input type="text" class="form-control" name="stock" placeholder="Product Name" required autofocus  value = "<?php echo $pcs?>">
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                        Low stock level<input type="number" class="form-control" name="stocklevel" placeholder="Set limit minimum limit of stocks" value="<?php echo $psl?>" >
                        </div>
                                </div>
                       <input type="hidden" class="form-control" 
                         name="ex_date" placeholder="Product Name" 
                          value = "<?php echo $exd ?>">
                
                   
                            <input type="hidden" class="form-control show-tick" name = "productunit"  value = "<?php echo $pct?>"  autocomplete = "off" list="unit">
                       <input type="hidden" class="form-control show-tick" name = "productunit"  value = "<?php echo $pu?>"  autocomplete = "off" list="unit">
                          <input type="hidden" class="form-control show-tick" name = "supplier" list="products"  value = "<?php echo $s?>"  autocomplete = "off">

                                <center>
                                 <button type="submit" class="btn btn-lg bg-orange waves-effect">
                                    <i class="material-icons">save</i>Save</button>
                                  </center>
                            </form>
                     

            
            

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
 <script src="../../js/demo.js"></script>
        <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>
    <script src="../../js/pages/examples/sign-in.js"></script>
</body>

</html>