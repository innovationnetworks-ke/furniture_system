<?php
       
       include('connection.php');
       include('theme/header.php');
       
        ?>  

<?php
			 $zz= $_POST['category_id'];
                $categoryname = $_POST['categoryname'];

	 			$query = 'UPDATE category set  categoryname="'.$categoryname.'" WHERE
					category_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "categorytable.php";
		</script>

		<?php
       
       include('connection.php');
       include('theme/header.php');
       
        ?>  

