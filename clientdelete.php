
<?php
       
       include('connection.php');
       include('theme/header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'client':
					$query = 'DELETE FROM client
							WHERE
							Cust_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "clienttable.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>