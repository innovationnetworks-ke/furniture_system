<?php
include('connection.php');
include('theme/header.php');
?>

<?php include('theme/sidebar.php'); ?>    

          <!-- Breadcrumbs-->



           
                        <h2>Order Details</h2> 
                        <div class="card-body">       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" with="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Order code</th>
                                        <th>Order Date</th>
                                        <th>Customer</th>
                                        <th>Total_Price</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT a.order_id,a.order_code,a.order_date,concat(b.f_name," ",b.l_name)as name,a.total_price,a.status FROM `order` a, tblaccounts b WHERE a.customer_id=b.acct_id';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['order_id'].'</td>';
                            echo '<td>'. $row['order_code'].'</td>';
                            echo '<td>'. $row['order_date'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['total_price'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            echo '<td>';
                            echo '<a  type="button" class="btn btn-xs btn-info " href="orderview1.php?action=edit & id='.$row['order_code'] . '">Detail</a> ';
                            echo '<a  type="button" class="btn btn-xs btn-warning " href="confirm.php?action=edit & confirm='.$row['order_code'] . '">Confirm</a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger " href="confirm.php?type=orderdetails&delete & cancel=' . $row['order_code'] . '">Cancel</a> </td>';
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


        <!-- Sticky Footer -->
<?php include('theme/stickyfooter.php');?>