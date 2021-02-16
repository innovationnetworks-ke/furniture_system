<footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
          </div>
          <?php
            $query= "SELECT * FROM supplier";
            $result=mysqli_query($db,$query);
            $query2= "SELECT * FROM category";
            $result2=mysqli_query($db,$query2);
          ?>
        
         <center>
                  <h2>Add new Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="Productstransacts.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" hidden="hidden" placeholder="Product_Id" name="Product_Id">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Product Name" name="Product_Name" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="qnty" required>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="Supplier_Id">
                                <option selected disabled >Suppliers</option>
                                <?php while($row=mysqli_fetch_array($result)):;?>
                                 <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option> 
                               <?php endwhile; ?>
                              </select>
                            </div> 
                            <div class="form-group">
                              <select class="form-control" name="category">
                                <option selected disabled >Category</option>
                                <?php while($row2=mysqli_fetch_array($result2)):;?>
                                 <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option> 
                               <?php endwhile; ?>
                              </select>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" hidden value="1" name="quantity" required>
                            </div> 
                            <div class="form-group">
                              <input class="form-control" hidden value="1" name="onhand" required>
                            </div> 
                            <div class="form-group">
                            <input class="form-control" placeholder="Original Price" name="unit" required>
                            </div>
                            <div class="form-group"> 
                            <input class="form-control" placeholder="Markup" name="markup" required>
                            </div> 
                            <div class="form-group"> 
                            <input class="form-control" placeholder="Selling Price" name="sale" required>
                            </div> 
                            <div class="form-group"> 
                            <input class="form-control" type="date" placeholder="date" name="date" required>
                            </div> 
                            <div class="form-group"> 
                            <input class="form-control" type="number" placeholder="Product Code" name="code" required>
                            </div> 
                            <div class="form-group">
                            </div>  
                            <button type="submit" class=" btn btn-info">Save Record</button>
                            <br>  
                             <br>   
                            <button type="reset" class=" btn btn-default" style="background-color: red">Clear Entry</button>


                      </form>  
                    </div>
</center>     
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>





<?php include('theme/stickyfooter.php');?>     


     