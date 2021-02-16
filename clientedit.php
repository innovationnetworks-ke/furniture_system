


<?php
       include('theme/header.php');
       include('connection.php');
       include('theme/sidebar.php');
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
$query = 'SELECT * FROM tblaccounts
              WHERE
              acct_id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['acct_id'];
                $f= $row['f_name'];
                $l=$row['l_name'];
                $a=$row['address'];
                $c=$row['contact'];
             
              }
              
              $id = $_GET['id'];
         
?>
<div class="container">
             <div class="card card-register mx-auto mt-5">
                  <div class="card-header"><h2>Edit Records</h2></div>
                      <div class="card-body">

                        <form role="form" method="post" action="clientedit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="acct_id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="fname" value="<?php echo $f; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lname" value="<?php echo $l; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact" name="contact" value="<?php echo $c; ?>">
                            </div> 
                             
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
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

