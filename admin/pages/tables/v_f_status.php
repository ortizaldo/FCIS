<?php 
                                 include '../../../config/db_config.php';
                                 $id = $_GET['id'];
                                       $sql = "SELECT * FROM status where cock_id = '$id'";
                                 $result = $conn->query($sql);

                                 if ($result->num_rows > 0) {
                                     print '
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <a type="button" href = "datatables/print_stat.php?id='.$id.'" class="btn  waves-effect m-r-20 bg-green">Print</a>
                                        <tr>
                                  
                                                      <th>
                                          Cock ID
                                                </th>
                                                <th>
                                          Weight
                                                </th>
                                       
                                                <th>
                                          Speed
                                                </th>

                                                <th>
                                          Performance
                                                </th>
                                        </tr>
                                    </thead>
                                             <tbody>';
    
                                  while($row = $result->fetch_assoc()) {
                        
                               print '
                                        <tr>
                                    
                                                <td>
                                                    '.$row['cock_id'].'
                                                </td>
                                                 <td>
                                                    '.$row['weight'].'
                                                </td>
                                                 <td>
                                                    '.$row['speed'].'
                                                </td>
                                                <td>
                                                    '.$row['performance'].'
                                                </td>
                                                  
                                              
                                                
                                     
                                            </tr>
                                         ';
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                    }
                                    }





                                    else {
                                    print '
                                    <div class="module-body">
                                 <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h3 style="color:green">No records found</h3>
                                        All records  will be shown here.
                                    </div>
                                    </div>';
                                       }
                                       
                                       print ' </tbody>
                                
                                    </table>';
                                     $conn->close();
                                 ?>
                            </div>
        
            <!-- #END# Exportable Table -->

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