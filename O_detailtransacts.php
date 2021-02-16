<?php
 include('connection.php');
 include('theme/header.php');
?>
<?php include('theme/sidebar.php');?>
 <div class="col-lg-12">
                <?php
						$Orders_id = $_POST['Orders_id'];
					    $Product_id = $_POST['Product_code'];
					    $UnitPrice = $_POST['UnitPrice'];
					    $Quantity = $_POST['Quantity'];
					    $Total_Price = $_POST['Total_Price'];
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO orderdetails
								(Orders_id, Product_code, UnitPrice, Quantity, total)
								VALUES ('".$Orders_id."','".$Product_code."','".$UnitPrice."','".$Quantity."','".$total."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "O_detailsadd.php";
		</script>
                    </div>
                    <?php include('theme/stickyfooter.php');?>