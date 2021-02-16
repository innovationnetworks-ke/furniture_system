 <?php 

session_start();
session_unset($_SESSION['acct_id']);
header("Location: ../index.php");
?>