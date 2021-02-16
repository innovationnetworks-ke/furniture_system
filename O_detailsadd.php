<?php
include('connection.php');
include('theme/header.php');
?>
<?php include('theme/sidebar.php'); ?>
<center>
                  <h2>Add new Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="O_detailtransacts.php?action=add">
                            
            
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="Orders_id" name="Orders_id">
                            </div>  
                            <div class="form-group">
                              <input class="form-control" placeholder="Product_code" name="Product_code">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="UnitPrice" name="UnitPrice">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Quantity" name="Quantity">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="total" name="total">
                            </div>
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
</center>    
<?php include('theme/stickyfooter.php');?>     