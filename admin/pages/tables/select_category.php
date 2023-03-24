            <option value="">Select one..</option>
                                                    <?php
                                                    include '../../../config/db_config.php';
                                                    $sql = "SELECT * FROM product_categories WHERE shop = '$SEshopno' or shop = 'ALL' ORDER BY name";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {

                                                    while($row = $result->fetch_assoc()) {
                                                    echo
                                                     '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                       }
                                                     } else {

                                                     }
                                                     $conn->close();
                                                    ?>
                                                </select>