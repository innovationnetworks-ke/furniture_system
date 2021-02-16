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
    <div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
          </div>
          <center>
                  <h2>Add new Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="clienttransac.php?action=add">
                            
            
                            <div class="form-group">
                              <input class="form-control" placeholder="Cust number" name="Cust_number">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="Cust_name">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="Cust_name2">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="City" name="City">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Region" name="Region">
                              <div class="form-group">
                                </div>
                              <input class="form-control" placeholder="Contact no" name="Contact_no"> 
                            <div class="form-group">
                            </div>  
                            <button type="submit" class="btn btn-default">Save Record></button>
                            <br>
                            <br>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


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