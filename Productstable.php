<?php
include('connection.php');
include('theme/header.php');
?>
<?php include('theme/sidebar.php');
include 'prodbreadcrumbs.php';
?>
    
          <!-- Breadcrumbs-->

           <div class="col-lg-12">
                        <h2>Products Table</h2> <a href="#" data-toggle="modal" data-target="#logoutModal2" type="button" class="btn btn-xs btn-info">Add New</a>
                    </div>
                                
                        
                        <div class="card-body">       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" with="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Product_Id</th>
                                        <th>Product_Name</th>
                                        <th>Suplier_Id</th>
                                        <th>category_id</th>
                                        <th>Quantity</th>
                                        <th>Onhand</th>
                                         <th>Original Price</th>
                                         <th>markup</th>
                                         <th>Selling Price</th>
                                        <th>Date</th>
                                        <th>Product Code</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT a.Product_Id,a.Product_Name,b.supname,c.categoryname,sum(a.Quantity)as quantity,sum(a.Onhand) as onhand,a.Original_price
                ,a.markup,a.Selling_price,a.date,a.ProductCode FROM products_table a,supplier b,category c WHERE 
                a.Supplier_Id=b.Supplier_Id AND a.category_id=c.category_id GROUP by ProductCode';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Product_Id'].'</td>';
                            echo '<td>'. $row['Product_Name'].'</td>';
                            echo '<td>'. $row['supname'].'</td>';
                            echo '<td>'. $row['categoryname'].'</td>';
                            echo '<td>'. $row['quantity'].'</td>';
                            echo '<td>'. $row['onhand'].'</td>';
                            echo '<td>'. $row['Original_price'].'</td>';
                            echo '<td>'. $row['markup'].'</td>';
                            echo '<td>'. $row['Selling_price'].'</td>';
                            echo '<td>'. $row['date'].'</td>';
                             echo '<td>'. $row['ProductCode'].'</td>';
                            
                            
                          echo ' <td> <a  type="button" class="btn btn-lg  btn-warning fas fa-user-edit" href="Prodedit.php?action=edit & id='.$row['Product_Id'] . '"></a> ';
                           echo ' <td> <a  type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="Productsdelete.php?type=client&delete & id=' . $row['Product_Id'] . '"></a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                
        <!-- /#page-wrapper -->

    <?php include('ProductsAdd.php'); ?>

        <!-- Sticky Footer -->
  <?php include('theme/stickyfooter.php');?>