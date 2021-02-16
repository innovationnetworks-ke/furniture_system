<?php 
//session_start();
if (isset ($_SESSION['acct_id'])) {
  # code...
  echo '<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="charts.php">
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Charts</span></a>
        </li>

     <!----   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-table"></i>
           <span>Tables</span></a>

          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">All Tables:</h6>
            <a class="dropdown-item" href="Orderstable.php">Orders Table</a>
            <a class="dropdown-item" href="Productstable.php">Products Table</a>
            <a class="dropdown-item" href="Shipperstable.php">Shippers Table</a>
            <a class="dropdown-item" href="Suppliertable.php">Suppliers Table</a>
            <a class="dropdown-item" href="categorytable.php">Category Table</a>
          </div>
        </li> ---->


        <li class="nav-item">
          <a class="nav-link" href="clienttable.php">
            <i class="fas fa-male"></i>
            <span>Client</span></a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="Productstable.php">
            <i class="fas fa-product-hunt"></i>
            <span>Products</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Orderstable.php">
            <i class="fas fa-cart-arrow-down"></i>
            <span>Order</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Orderdetailtable.php">
            <i class="fas fa-receipt"></i>
            <span>Order Details</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Shipperstable.php">
            <i class="fas fa-shipping-fast"></i>
            <span>Shippers</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Suppliertable.php">
            <i class="fas fa-business-time"></i>
            <span>Suppliers</span></a>
        </li>

<li class="nav-item">
          <a class="nav-link" href="categorytable.php">
            <i class="fas fa-skull"></i>
            <span>Category</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
';
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
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">';

 
}
?>
