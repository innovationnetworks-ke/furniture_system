
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/signuperror.css">

    <link rel="stylesheet" type="text/css" href="css/sb-new.css">
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <?php 
          session_start();
          if (isset($_GET['error'])) {
            if ($_GET["error"]=="emptyfields") {
              echo '<p class="signuperror">Fill in all fields</p>';
            }
            elseif ($_GET["error"]=="invalidmail") {
               echo '<p class="signuperror">Invalid Email</p>';
            }
            elseif ($_GET["error"]=="invaliduid") {
               echo '<p class="signuperror">Invalid Username</p>';
            }
            elseif ($_GET["error"]=="passwordcheck") {
               echo '<p class="signuperror">Your password do not match</p>';
            }
            elseif ($_GET["error"]=="usertaken") {
               echo '<p class="signuperror">Username is already taken</p>';
            }
            } 
             if (isset($_GET['register'])) {
              if ($_GET["register"]=="success") {
               echo '<p class="signupsuccess">Register successful</p>';
             }
         }
         
           ?>
          <form action="includes/signup.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name"autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputAddress" name="address" class="form-control" placeholder="Address">
                <label for="inputAddress">Address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="number" id="inputContact" name="contact" class="form-control" placeholder="Contact">
                <label for="inputContact">Contact</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="mail" class="form-control" placeholder="Email address">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <?php 
            if (isset($_SESSION['acct_id'])) {
              echo '<div class="form-group">
              <div class="form-label-group">
                <input type="hidden" id="inputPos" name="position" value="Admin" class="form-control" placeholder="Email address">
                <label for="inputEmail">Email address</label>
              </div>
            </div>';
            }else{
              echo '<div class="form-group">
              <div class="form-label-group">
                <input type="hidden" id="inputPos2" name="position" value="Customer" class="form-control" placeholder="Email address">
                <label for="inputEmail">Email address</label>
              </div>
            </div>';
             
            }
            ?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail1" name="uid" class="form-control" placeholder="User Name">
                <label for="inputEmail1">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="pwdcon" class="form-control" placeholder="Confirm password">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="signup-submit">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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
