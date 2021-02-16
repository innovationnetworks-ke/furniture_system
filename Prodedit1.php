<?php
       
       include('connection.php');
       include('theme/header.php');
       
        ?>  

<?php
			 $zz= $_POST['Product_Id'];
                $Product_Name = $_POST['Product_Name'];
                $Supplier_Id = $_POST['Supplier_Id'];
                $category_id = $_POST['category_id'];
                $Quantity = $_POST['Quantity'];
                $Onhand = $_POST['Onhand'];
                $Original_price = $_POST['Original_price'];
                $markup = $_POST['markup'];
                $Selling_price = $_POST['Selling_price'];
                $date = $_POST['date'];
                $ProductCode = $_POST['Product Code'];
		
	 			$query = 'UPDATE products_table set  Product_Name="'.$Product_Name.'",
					Supplier_Id ="'.$Supplier_Id.'", category_id ="'.$category_id.'",
					Quantity ="'.$Quantity.'",Onhand ="'.$Onhand.'",Original_price="'.$Original_price.'",markup="'.$markup.'",Selling_price="'.$Selling_price.'",date="'.$date.'",ProductCode="'.$ProductCode.'" WHERE
					Product_Id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "Productstable.php";
		</script>