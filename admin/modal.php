<!DOCTYPE html>
<html>

<?php include('header.php');?>






<?php

error_reporting(0);
$id = $_GET['id'];
include '../config/db_config.php';

$sql = "SELECT * FROM products WHERE product_id = '$id'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $barcode = $row['barcode'];
      $pname = $row['name'];
    $cst = $row['current_stock'];
    $pbp = $row['buying_price'];
    $psp = $row['selling_price'];
    $psl = $row['stock_level'];
    $pcs = $row['current_stock'];
    $pct = $row['category'];
    $pu = $row['unit'];
      $expired = $row['expiration_date'];
    $exd = $row['expiration_date'];
    $exm = $row['expire_month'];
    $exy = $row['expire_year'];
     $s = $row['supplier'];
    }
} else {

}
$conn->close();

?>


                         
                            <form action = "action/update-stock.php" method= "POST">
                            <form action = "action/update-stock.php" method= "POST">

                               <input type="hidden" class="form-control" name="id"    value = "<?php echo $id?> ">
                         <div class="form-group form-float">
                                <div class="form-line">
                          <input type="hidden" class="form-control" name="barcode" placeholder="Product Name"   value = "<?php echo $barcode?> ">
                        </div>
                                </div>
                                Product Name:   <div class="form-group form-float">
                                <div class="form-line">
                          <input type="text" class="form-control" name="product" placeholder="Product Name"  value = "  <?php echo $pname?>">
                        </div>
                                </div>
                                         
                             
                                          <div class="form-group form-float">
                                <div class="form-line">
                   Selling Price: <input type="number" class="form-control" name="sellingprice" placeholder="Seeling Price" value = "<?php echo $psp?>">
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                    Buying Price: <input type="number" class="form-control" name="buyingprice" placeholder="Buying Price" value = "<?php echo $pbp?>">
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
                          <div class="form-group form-float">
                                <div class="form-line">
                         Expiration date: <input type="date" class="form-control" 
                         name="ex_date" placeholder="Product Name" 
                          value = "<?php echo $exd ?>">
                        </div>
                                </div>
                   
						           
                                <div class="form-group form-float">
                                <div class="form-line">
                   
                             Product Category:<input type="text" class="form-control show-tick" name = "productunit"  value = "<?php echo $pct?>"  autocomplete = "off" list="unit">
                        <datalist id="unit">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                      $sql = "SELECT * FROM product_categories WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                         '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                        </datalist>
                   
                        </div>
                                </div>
                               
                                <div class="form-group form-float">
                                <div class="form-line">
                   
                              Product Unit :<input type="text" class="form-control show-tick" name = "productunit"  value = "<?php echo $pu?>"  autocomplete = "off" list="unit">
                        <datalist id="unit">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM product_units  WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();
                          ?>
                        </datalist>
                   
                        </div>
                                </div>
                              
                                     








                                     <div class="form-group form-float">
                                <div class="form-line">
                            Supplier :<input type="text" class="form-control show-tick" name = "supplier" list="products"  value = "<?php echo $s?>"  autocomplete = "off">
                        <datalist id="products">
                        
                                <?php
                          include '../../../config/db_config.php';
                 
                                     $sql = "SELECT * FROM supplier WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY supplier";
                                                     $result = $conn->query($sql);
                                  
                                    if ($result->num_rows > 0) {
    
                                                   while($row = $result->fetch_assoc()) {
                                                       echo '<option value="'.$row['supplier'].'">'.$row['supplier'].'</option>';
                                                         }
                                                    } else {
  
                                                      }
                                                       $conn->close();  ?> </datalist>
                   
                                           </div>
                                            </div>



                    
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