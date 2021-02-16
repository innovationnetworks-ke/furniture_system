


<?php
include('connection.php');
       include('theme/header.php');
        ?>  
<body>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                <!-- /.row -->
<?php 
$query = 'SELECT * FROM products_table
              WHERE
              Product_Id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Product_Id'];
                $i= $row['Product_Name'];
                $a=$row['Supplier_Id'];
                $b=$row['category_id'];
                $c=$row['Quantity'];
                $d=$row['Onhand'];
                $e=$row['Original_price'];
                $f=$row['markup'];
                $g=$row['Selling_price'];
                $h=$row['date'];
                $i=$row['ProductCode'];
          
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="Prodedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="Product_Id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Name" name="Product_Name" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Supplier Id" name="Suplier_Id" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="category id" name="category_id" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="Quantity" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Onhand" name="Onhand" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Original price" name="Original_price" value="<?php echo $e; ?>"></textarea>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="markup" name="markup" value="<?php echo $f; ?>"></textarea>
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Selling_price" name="Selling_price" value="<?php echo $g; ?>"></textarea>
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="date" name="date" value="<?php echo $h; ?>"></textarea>
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="ProductCode" name="ProductCode" value="<?php echo $i; ?>"></textarea>
                            </div>   
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

