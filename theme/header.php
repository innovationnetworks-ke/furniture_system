<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NAIROBI FURNITURES</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-expand-xl .navbar-nav .nav-link bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php" style="color: #ffff00  "><u><b>NAIROBI FURNITURES</b></u></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
         
              <?php 
     if (isset($_SESSION['acct_id'])) {
      if ($_SESSION['position']=='Admin') {
        echo '<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw">
            '
      ;?>
      <?php
           

               $query = "SELECT * FROM notification";
               $result = mysqli_query($db,$query);
               $count = 0;
                while($row = mysqli_fetch_array($result)){
                  $count++;
                }

            echo '<br>'.'    '.'
            <span class="badge badge-danger">';?><?php echo $count;?><?php echo'</span>
            </i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">';?>

<?php 

                                $query2 = "SELECT * FROM notification order by not_id LIMIT 8";
                                $count2= 0;
                                $result2 = mysqli_query($db,$query2);
                              ?>
                              <?php while($row2 = mysqli_fetch_array($result2)):; 
                                $_SESSION['p']=$row2[1];
                                  
                                echo '
            <a class="dropdown-item" href="notification.php">';?><?php echo $row2[2]; echo ' ' . 'added transaction </a>';?>

          <?php  endwhile;
          echo '</li></ul><a class="nav-link" href="#" id="userDropdown"><i class="fas fa-user-circle ">'.$_SESSION['fname'].' '.$_SESSION['lname'].'</i></a>';
      }else if ($_SESSION['position']=='Customer') {
       echo '<a class="nav-link" href="orderview.php" id="userDropdown"><i class="fas fa-user-circle ">Profile</i></a>';
      }
     }
      ?>

            
          
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          
          </div>
        </li>
       
        
            <?php 
     if (isset($_SESSION['acct_id'])) {
      echo '<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt">Logout</i></a>';
     }else{
      echo ' <a class="nav-link" href="register.php" id="userDropdown">
              <i class="fas fa-user-circle"> Register</i>
            </a>
      <a class="nav-link" href="login.php" id="userDropdown">
              <i class="fas fa-sign-in-alt"> Login</i>
            </a>';
      

     }
      ?>
           
         
      </ul>

    </nav>