<?php
 include('connection.php');
 include('theme/header.php');
?>
<?php include('theme/sidebar.php');?>
 <div class="col-lg-12">
                <?php
						$Product_Id = $_POST['Product_Id'];
					    $Product_Name = $_POST['Product_Name'];
					     $qnty = $_POST['qnty'];
					    $Supplier_Id = $_POST['Supplier_Id'];
					    $category = $_POST['category'];
					    $quantity = $_POST['quantity'];
					    $onhand = $_POST['onhand'];
					    $unit = $_POST['unit'];
					    $markup = $_POST['markup'];
					    $sale = $_POST['sale'];
					    $date = $_POST['date'];
					    $code = $_POST['code'];
				
					switch($_GET['action']){
						case 'add':
						
									$query = "INSERT INTO products_table
								(Product_Id, Product_Name, Supplier_Id,category_id, Quantity, Onhand, Original_price,markup,Selling_price,date,ProductCode)
								VALUES ('null','".$Product_Name."','".$Supplier_Id."','".$category."','".$qnty."','".$qnty."','".$unit."','".$markup."','".$sale."','".$date."','".$code."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
										
								
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "Productstable.php";
		</script>
                    </div>
                    <?php include('theme/stickyfooter.php');?>