<?php
include "includes/connection.php";
 session_start();
if($_GET["action"]=='adds') {

$query = 'SELECT current_date FROM tblaccounts';
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               $date = $row['current_date'];
              }

$time=time();	
foreach ($_SESSION["cart"] as $key => $value) {
	mysqli_query($db, "INSERT INTO orderdetails(order_code,order_date,Product_code,UnitPrice,Quantity,total,customer_id)VALUES('".$time."','".$date."','".$value['ids']."','".$value['price']."','".$value['quantity']."','".$value['quantity'] * $value['price']."','".$_SESSION['acct_id']."')")or die(mysqli_error($db));

	mysqli_query($db, "UPDATE products_table SET Onhand = Onhand - '".$value['quantity']."'WHERE ProductCode ='".$value['ids']."'")or die(mysqli_error($db));
}
	mysqli_query($db, "INSERT INTO `order`(order_code,order_date,customer_id,total_price,status)VALUES('".$time."','".$date."','".$_SESSION['acct_id']."','".$_SESSION["mtotal"]."','Pending')")or die(mysqli_error($db));

	mysqli_query($db, "INSERT INTO `notification`(customer_id,username,status)VALUES('".$_SESSION['acct_id']."','".$_SESSION['username']."','added')")or die(mysqli_error($db));

}
                        unset($_SESSION["cart"]);
                        unset($_SESSION["mtotal"]);
        

								
						
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "orderview.php";
		</script>

