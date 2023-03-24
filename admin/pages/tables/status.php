                  <?php

error_reporting(0);
$id = $_GET['id'];

$place = $_GET['place'];
$event_type = $_GET['event_type'];
$event_date = $_GET['event_date'];

include '../../../config/db_config.php';

$sql = "SELECT * FROM chickens WHERE chicken_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $chick_id = $row['chicken_id'];
    $bloodline = $row['bloodline'];


    }
} else {

}
$conn->close();

?>
















                    <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <h3>Update</h3>
                                  <br>
                                       <br>
                                    </ul>


                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <form method = "POST" action ="../../action/status.php">
                                            
                                      
                                        <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1">
                                                 <input type="hidden" class="form-control show-tick"  value = "<?php echo $chick_id ?>"  name = "chick_id"  >
                                       <label>Weight</label><br>
                                       <input type="number" min="1" max="100" name="weight">%
                                        <br> <label>Speed</label><br>
                                       <input type="number"  min="1" max="100" name="speed">%<br>
                                               <label>Performance</label><br>
                                       <input type="number"  min="1" max="100" name="performance"> %
                                       <br>
                                       <br>
                                       <button type = "submit" class = "btn bg-orange">Submit</button>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <center>
                                              <h3>Result</h3>
                                        </center>
                                  
                                        <li role="presentation"><a href="#before_r" data-toggle="tab">Before</a></li>
                                        <li role="presentation"><a href="#after_r" data-toggle="tab">After</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                 
                                        <div role="tabpanel" class="tab-pane animated fadeInRight active" id="before_r">
                                                 <?php
             include '../../../config/db_config.php';
                                 
                  $sql = "SELECT * FROM status where cock_id = '$id' order by date ASC limit 1";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 
                 while($row = $result->fetch_assoc()) {
                
                    $weight = $row['weight'];
                    $speed = $row['speed'];
                    $performance = $row['performance'];
                  
                   
                                ?>
                                                    <div class="progress">
                                <div class="progress-bar bg-pink progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $weight ?>" aria-valuemin="0" aria-valuemax="100"
                                     style="width:<?php echo $weight ?>%">
                                   Weight:<?php echo $weight ?>%
                                </div>
                            </div>
                               <div class="progress">
                                <div class="progress-bar bg-cyan progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $speed ?>" aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?php echo $speed ?>%">
                                   Speed : <?php echo $speed ?>%
                                </div>
                            </div>
                               <div class="progress">
                                <div class="progress-bar bg-teal progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $performance ?>" aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?php echo $performance ?>%">
                                    performance : <?php echo $performance ?>%
                                </div>
                            </div>
                        <?php }} ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane animated fadeInRight" id="after_r">
                          <?php
             include '../../../config/db_config.php';
                                 
                  $sql = "SELECT * FROM status where cock_id = '$id' order by date desc limit 1";
                 $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 
                 while($row = $result->fetch_assoc()) {
                
                    $weight = $row['weight'];
                    $speed = $row['speed'];
                    $performance = $row['performance'];
                  
                   
                                ?>
                                                    <div class="progress">
                                <div class="progress-bar bg-pink progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $weight ?>" aria-valuemin="0" aria-valuemax="100"
                                     style="width:<?php echo $weight ?>%">
                                   Weight :<?php echo $weight ?>%
                                </div>
                            </div>
                               <div class="progress">
                                <div class="progress-bar bg-cyan progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $speed ?>" aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?php echo $speed ?>%">
                                   Speed: <?php echo $speed ?>%
                                </div>
                            </div>
                               <div class="progress">
                                <div class="progress-bar bg-teal progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $performance ?>" aria-valuemin="0" aria-valuemax="100"
                                     style="width: <?php echo $performance ?>%">
                                    Performance: <?php echo $performance ?>%
                                </div>
                            </div>
                        <?php }} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>