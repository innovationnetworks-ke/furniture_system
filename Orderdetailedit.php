


<?php
include('connection.php');
       include('theme/header.php');
        ?>  

<?php include('theme/sidebar.php'); ?>
<?php 
$query = 'SELECT * FROM orderdetails
              WHERE
              Orders_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz=$row['Orders_id'];
                $i=$row['Product_code'];
                $a=$row['UnitPrice'];
                $b=$row['Quantity'];
                $c=$row['total'];
              }
              
              $id = $_GET['id'];
         
?>

             <center>
             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="  Orderdetailedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="Orders_id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Product id" name="Productid" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Unit Price" name="UnitPrice" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="quantity" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Total Price" name="TotalPrice" value="<?php echo $c; ?>">
                            </div> 
                            
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
                </div>
                </center>
<?php include('theme/stickyfooter.php'); ?>