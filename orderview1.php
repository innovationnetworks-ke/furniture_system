<?php
include('connection.php');
include('theme/header.php');
?>
<?php include('theme/sidebar.php');
?>
<?php 
$query = 'SELECT a.order_code,concat(b.f_name," ",b.l_name)as name,b.contact,b.address,a.status FROM `order` a,tblaccounts b
              WHERE a.customer_id=b.acct_id and
              order_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $stats = $row['status'];
               $name = $row['name'];
               $contact = $row['contact'];
               $address = $row['address'];
               $cd = $row['order_code'];
              }
         
?>
 <span id="divToPrint">
 <div class="card">
   
            <div class="card-header">
              <div style="margin-bottom: 60px">
             <center><h2>Furnitures Online Shop</h2>
         </div>
              
               
         <ul>
             <div  style="margin-bottom: 30px">
            <h5>Order No.# : 0<?php echo $cd; ?></h5>
            <h5>Name : <?php echo $name; ?></h5>
            <h5>Contact : 0<?php echo $contact; ?></h5>
            <h5>Address : <?php echo $address; ?></h5>
        
        </div>
            
                

            <div class="card-body">
                <h4>Orders</h4>
              <div class="table-responsive">
                            <table class="table" width="100%" cellspacing="0">
                                <thead align="left">
                                    <tr>
                                        <th>Product</th>
                                        <th>OrderDate</th>
                                        <th>Quantity</th>
                                        <th>Price</th> 
                                        <th>Total</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php                  
                $query = "SELECT b.Product_Name,a.order_date,a.Quantity,a.UnitPrice,a.total FROM orderdetails a,products_table b WHERE a.Product_code=b.ProductCode AND a.order_code='".$_GET['id']."' GROUP BY a.Product_code";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Product_Name'].'</td>';                     
                            echo '<td>'. $row['order_date'].'</td>';
                            echo '<td>'. $row['Quantity'].'</td>';
                            echo '<td>Ksh '. $row['UnitPrice'].'</td>';
                            echo '<td>Ksh '. $row['total'].'</td>';
                           /* echo '<td>  ';
                            echo '<center> <a  type="button" class="btn btn-lg btn-info fas fa-cart-plus" href="addtransacdetail.php?action=edit & id='.$row['transac_id'] . '"></a> </td></center>';*/
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>

                        </div>
            </div>
            <?php 
$query = 'SELECT * FROM `order`
              WHERE
              order_code ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $zz = $row['total_price'];
              }
         
?>

          <h5 align="right" style="margin-right: 165px">Total Price : Ksh <?php echo $zz; ?></h5>
          </div>



          
        </div><br>
</ul>
</span>
            <?php if ($_SESSION['position']=='Customer') { 
              echo '<a href="orderview.php" class="btn btn-xs btn-info fas fa-arrow-left" >Back</a>';
           }else{
            echo '<a href="orderdetailtable.php" class="btn btn-xs btn-info fas fa-arrow-left" >Back</a>';
           } ?>
             
             <?php 
             if ($stats=='Confirmed') {
               ?>
               <a href="#" class="btn btn-xs btn-info fas fa-print" value="print" onclick="PrintDiv();">Print</a>
            <?php }
              ?>
             
    <?php include('theme/stickyfooter.php');?>


        <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=900,height=900');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>