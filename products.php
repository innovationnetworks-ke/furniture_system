<?php include('connection.php'); ?>

<?php include('theme/header.php'); ?>

<?php include('theme/sidebar.php'); ?>


<div class="col-lg-12">
                        <h2>List of Products</h2> <a href="newproducts.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Product ID</th>
                                        <th>Product Code</th>
                                        <th>Product Brand</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Register ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM products';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['product_id'].'</td>';
                            echo '<td>'. $row['Product_code'].'</td>';
                            echo '<td>'. $row['product_brand'].'</td>';
                            echo '<td>'. $row['type'].'</td>';
                            echo '<td>'. $row['price'].'</td>';
                            echo '<td>'. $row['register_id'].'</td>';
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['product_id'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['product_id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="delete.php?type=products&delete & id=' . $row['product_id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
<!---footer area--->
 <?php include('theme/stickyfooter.php'); ?>
