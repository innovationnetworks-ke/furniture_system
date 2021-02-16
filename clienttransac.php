<?php
 include('connection.php');
 include('theme/header.php');
 	?>
<?php include('theme/sidebar.php');?> 	
 <div class="col-lg-12">
                <?php
						
					    $Cust_number = $_POST['Cust_number'];
						$Cust_name = $_POST['Cust_name'];
						$Cust_name2 = $_POST['Cust_name2'];
						$address = $_POST['Address'];
						$City = $_POST['City'];
						$Region = $_POST['Region'];
						$Contact_no = $_POST['Contact_no'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO client
								(Cust_number, f_name, l_name, Address, City,Region,Contact_no)
								VALUES ('".$Cust_number."','".$Cust_name."','".$Cust_name2."','".$address."','".$City."','".$Region."','".$Contact_no."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "clienttable.php";
		</script>
                    </div>

<?php include('theme/stickyfooter.php');?>