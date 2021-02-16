<?php  
if (isset($_POST['signup-submit'])) {

require 'connection.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['mail'];
$pos = $_POST['position'];
$username = $_POST['uid'];
$pass = $_POST['pwd'];
$passcon = $_POST['pwdcon'];

if (empty($fname)||empty($lname)||empty($email)||empty($username)||empty($pass)||empty($passcon)) {
	header("Location: ../register.php?error=emptyfields&firstname=".$fname."&lastname=".$lname.
	"&mail=".$email."&uid=".$username);
	exit();
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: ../register.php?error=invalidmail&uid=");
	exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	header("Location: ../register.php?error=invalidmail&uid=".$username);
	exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
	header("Location: ../register.php?error=invaliduid&mail=".$email);
	exit();
}
else if ($pass !== $passcon) {
	header("Location: ../register.php?error=passwordcheck&firstname=".$fname."&lastname=".$lname.
	"&mail=".$email."&uid=".$username);
	exit();
} 
else{
	$sql = "SELECT username FROM tblaccounts WHERE username=?";
	$stmt = mysqli_stmt_init($db);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
	header("Location: ../register.php?error=sqlerror");
	exit();
	} 
	else{
		mysqli_stmt_bind_param($stmt,"s",$username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck = mysqli_stmt_num_rows($stmt);
		if ($resultCheck > 0) {
			header("Location: ../register.php?error=usertaken&mail=".$email);
			exit();
		}
		else{
			$sql = "INSERT INTO tblaccounts(f_name,l_name,address,contact,email,position,username,password)VALUES(?,?,?,?,?,?,?,?)";
			mysqli_stmt_execute($stmt);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: ../register.php?error=sqlerror");
			exit();
		}else{
			
			$hashedPwd =md5($pass,PASSWORD_DEFAULT);

			mysqli_stmt_bind_param($stmt,"ssssssss",$fname,$lname,$address,$contact,$email,$pos,$username,$hashedPwd);
			mysqli_stmt_execute($stmt);
			?>
			<script type="text/javascript">
				alert('Register successful');
				window.location = "../login.php?register=success";
			</script>
			<?php		
			exit();
			}
		}
	}			
}
mysqli_stmt_close($stmt);
mysqli_close($db);

}
else{
	header("Location: ../login.php");
	exit();
}
