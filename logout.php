
<?php
session_start();
session_unset($_SESSION['acct_id']);
session_destroy();
header('Location: index.php');

?>