<?php
 include('connection.php');
 include('theme/header.php');
 	?>
<?php include('theme/sidebar.php');?> 	
 <div class="col-lg-12">
                <?php
						
					    $category_id = $_POST['category_id'];
						$categoryname = $_POST['categoryname'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO category
								(category_id, categoryname)
								VALUES ('".$category_id."','".$categoryname."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "categorytable.php";
		</script>
                    </div>

<?php include('theme/stickyfooter.php');?>