<?php
       
       include('connection.php');
       include('theme/header.php');
       
        ?>  

<?php
			 $zz= $_POST['acct_id'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
		
	 			$query = 'UPDATE tblaccounts set  f_name="'.$fname.'",
					l_name ="'.$lname.'", address ="'.$address.'",
					contact ="'.$contact.'" WHERE
					acct_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "clienttable.php";
		</script>