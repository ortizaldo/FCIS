<!DOCTYPE html>
<html>

<?php include('header.php');?>


<?php
error_reporting(0);
include 'action/check-login.php';
include 'alerts.php';

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



     

                            <form action="action/update-shop.php" method= "POST">
                                <div class="form-group form-float">
                                <div class="form-line">



                          Farm Name<input type="text" class="form-control" name="shopname" required value="<?php echo"$SEshopname"; ?>"  required autofocus>
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                  Farm Email<input type="text" class="form-control" name="shopemail" required value="<?php echo "$shop_email";  ?>" >
                        </div>
                                </div>
                                          <div class="form-group form-float">
                                <div class="form-line">
                  Farm address <input type="text" class="form-control"  name="shopaddress" required value="<?php echo"$shop_address"; ?>">
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                  Owner Name <input type="text" class="form-control"  name="owner_name" required value="<?php echo"$owner_name"; ?>">
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                  Owner Address <input type="text" class="form-control"  name="owner_address" required value="<?php echo"$owner_address"; ?>">
                        </div>
                                </div>
                                <div class="form-group form-float">
                                <div class="form-line">
                    Contact Number<input type="text" class="form-control" name="shopphone" value="<?php echo"$shop_phone"; ?>">
                        </div>
                                </div>
                         

                                <input type="checkbox" id="remember_me_2" class="filled-in">
                               
                                <br>
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