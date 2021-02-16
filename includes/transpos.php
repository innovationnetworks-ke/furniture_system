<?php
       
       include('includes/connection.php');
       
       
        ?>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
  	# code...
  $query = "SELECT * FROM client";
        $result = mysqli_query($db,$query);
        while ($row = mysqli_fetch_array($result)) {
 
						$prcd = $_COOKIE['prdctcd'];
					    $qnt =$_COOKIE['qantty'];
					     $prc =$_COOKIE['price'];
				$cust = $row['Cust_id'];
							
								$query = "INSERT INTO orderdetails(product_code,UnitPrice,Quantity,customer_id)
								VALUES ('".$prcd."','".$prc."','".$qnt."','".$cust."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
						
						
				?>
    	 <script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
</body>
</html>