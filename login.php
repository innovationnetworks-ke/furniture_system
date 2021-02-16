<?php 
include "connection.php";
session_start();
if (isset($_SESSION['fname'])) {
  # code...
  header("location: index.php");
}else{
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body style="background-color: white">

    <div class="container">
      <div class="card card-login mx-auto mt-5" style="background-color:black ">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="includes/sigin.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="mailuid" class="form-control" placeholder="Email/Username" autofocus="autofocus">
                <label for="inputEmail">Email/Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" >
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" name="login-submit">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            <a class="d-block small mt-3" href="index.php">Home</a>
          </div>
        </div>
      </div>
    </div>

 <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
<?php
}
?>
