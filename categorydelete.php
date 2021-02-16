
<?php
       
       include('connection.php');
       include('theme/header.php');
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'category':
					$query = 'DELETE FROM category
							WHERE
							catid = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "categorytable.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>