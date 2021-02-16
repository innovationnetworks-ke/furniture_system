<?php 
//session_start();
if (isset ($_SESSION['acct_id'])) {
if($_SESSION['position']=='Admin') {
    echo '<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient(brown,#ff9900);">
        <li class="nav-item active">
          <a class="nav-link" style="color: #9FC4F5"href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
     <!----   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-table"></i>
           <span>Tables</span></a>

          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">All Tables:</h6>
            <a class="dropdown-item" href="Productstable.php">Products Table</a>
            <a class="dropdown-item" href="categorytable.php">Category Table</a>
            <a class="dropdown-item" href="orderstbl.php">Orders Table</a>
            <a class="dropdown-item" href="contact.php">Contact Us</a>
            <a class="dropdown-item" href="categorytable.php">About Us</a>
          </div>
        </li> ---->


        <li class="nav-item">
          <a class="nav-link" style="color: #9FC4F5" href="clienttable.php">
            <i class="fas fa-male"></i>
            <span>Clients</span></a>
        </li>

         <li class="nav-item">
          <a class="nav-link" style="color: #9FC4F5" href="Productstable.php">
            <i class="fas fa-product-hunt"></i>
            <span>Products</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" style="color: #9FC4F5" href="orderstbl.php">
            <i class="fas fa-product-hunt"></i>
            <span>Orders</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link"style="color: #9FC4F5" href="Orderdetailtable.php">
            <i class="fas fa-receipt"></i>
            <span>Order Details</span></a>
        </li>
        
       
        <li class="nav-item">
          <a class="nav-link"style="color: #9FC4F5" href="categorytable.php">
            <i class="fas fa-skull"></i>
            <span>Categories</span></a>
        </li>


      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
';
  }elseif ($_SESSION['position']=='Customer') {
    echo '<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" style="color: #9FC4F5"href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link"style="color: #9FC4F5" href="pos.php">
            <i class="fas fa-shopping-cart"></i>
            <span>Buy-Products</span></a>
            </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">';  }
}else{
  echo '<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
         <li class="nav-item active">
          <a class="nav-link" href="contact.php">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact Us</span>
          </a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">';

 
}
?>
