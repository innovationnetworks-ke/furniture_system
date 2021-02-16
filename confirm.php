<?php include('connection.php');
if (isset($_GET['confirm'])) {
	mysqli_query($db, "UPDATE `order` SET status = 'Confirmed' WHERE order_code = '".$_GET['confirm']."'")or die(mysqli_error($db));
}
if (isset($_GET['cancel'])) {
	mysqli_query($db, "UPDATE `order` SET status = 'Cancelled' WHERE order_code = '".$_GET['cancel']."'")or die(mysqli_error($db));
}
 ?>
 <script type="text/javascript">
 	alert("Order Updated");
 	window.location = "Orderdetailtable.php";
 </script>