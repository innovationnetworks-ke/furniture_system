<?php
include('connection.php');
include('theme/header.php');
?>

<?php include('theme/sidebar.php');

  include 'theme/clientbreadcrumbs.php';
     ?>
          <!-- Breadcrumbs-->
          
           <div class="col-lg-12">
                        <h2>Order</h2> 
                    </div>
                       
                         <div class="card-body">       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" with="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th> 
                                        <th>Order No.</th>
                                        <th>OrderDate</th>
                                        <th>Product_code</th>
                                        <th>UnitPrice</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Customer</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = "SELECT * FROM orderdetails ";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Orders_id'].'</td>';
                            echo '<td>'. $row['order_code'].'</td>';
                            echo '<td>'. $row['order_date'].'</td>';
                            echo '<td>'. $row['Product_code'].'</td>';
                            echo '<td>'. $row['UnitPrice'].'</td>';
                            echo '<td>'. $row['Quantity'].'</td>';
                            echo '<td>'. $row['total'].'</td>';
                            echo '<td>'. $row['customer_id'].'</td>';
        
                           
                            echo '  <td> <a  type="button" class="btn btn-xs btn-warning fas fa-user-edit" href="orderedit.php?action=edit & id='.$row['Orders_id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="Ordersdelete.php?type=orders&delete & id=' . $row['Orders_id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include('clientadd.php'); ?>  
        <!-- Sticky Footer -->
      <?php include('theme/stickyfooter.php'); ?> 
      <?php

      ?> 