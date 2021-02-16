<?php
include('connection.php');
include('theme/header.php');

?>
<?php include('theme/sidebar.php');
?>
    
          <!-- Breadcrumbs-->
<div class="row">
    <div class="col-lg-3">
      <div class="col mb-3">
          <div class="card mb-3">
              <div class="card-header">
                <center><h2>Profile</h2></center>
              
              </div>
              <div class="card-body">
                <h5>Name: <?php echo $_SESSION['fname']; ?>
                    <?php echo $_SESSION['lname']; ?>
                </h5><br>
                <h5>Contact: <?php echo $_SESSION['contact']; ?>
                </h5><br>
                <h5>Address: <?php echo $_SESSION['address']; ?>
                </h5>
              </div>
          </div>
      </div>  
    </div>
    <div class="col-lg-9">
      <div class="col mb-3">
        <div class="card mb-3">
           <div class="card-header">
                        <h2>List of Order</h2>
                        <div class="card-body">       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" with="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Order No.</th>
                                        <th>OrderDate</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = "SELECT * FROM `order` WHERE `customer_id` = '".$_SESSION['acct_id']."'";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['order_id'].'</td>';
                            echo '<td>'. $row['order_code'].'</td>';
                            echo '<td>'. $row['order_date'].'</td>';
                            echo '<td>'. $row['total_price'].'</td>';
                            echo '<td>'. $row['status'].'</td>';
                            
                            
                          echo ' <td> <a  type="button" class="btn btn-xs  btn-warning " href="orderview1.php?action=edit & id='.$row['order_code'] . '">Detail</a> </td>';
                         /*  echo '  <a  type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="Productsdelete.php?type=client&delete & id=' . $row['Product_Id'] . '"></a> </td>';*/
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

                </div>
        <!-- /#page-wrapper -->

    <?php include('ProductsAdd.php'); ?>

        <!-- Sticky Footer -->
  <?php include('theme/stickyfooter.php');?>