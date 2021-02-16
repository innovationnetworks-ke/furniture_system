<?php
       
       include('connection.php');
       include('theme/header.php');
       
        ?>  

<?php
			 $zz= $_POST['Orders_id'];
                $pi = $_POST['Productid'];
                $up = $_POST['UnitPrice'];
                $q = $_POST['quantity'];
                $tp = $_POST['TotalPrice'];

		$query = 'UPDATE orderdetails set  Product_id="'.$pi.'",
					UnitPrice ="'.$up.'", Quantity ="'.$q.'",
					Total_Price ="'.$tp.'" WHERE
					Orders_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "Orderdetailtable.php";
		</script>