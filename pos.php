<?php include('connection.php');?>  

<!--header area-->
<?php include 'theme/header.php'; ?>

<!--sidebar area-->
<?php include 'theme/sidebar.php'; ?>

<?php 
if(!isset($_SESSION['acct_id'])){
  header("Location: login.php");
 }
if (isset($_POST["add_to_cart"])) 
{
  $av = $_POST['onhand'];
$qq = $_POST["quant"];
  if ($av > $qq) {

  if (isset($_SESSION["cart"])) 
{

    
  $itemarrayid = array_column($_SESSION["cart"], "ids");
  if (!in_array($_GET["id"], $itemarrayid)) 
  {
    $count=count($_SESSION["cart"]);
    $itemarray = array(
     'ids' => $_GET["id"],
     'name' => $_POST["hiddenname"],
     'price' => $_POST["hiddenprice"],
     'quantity' => $_POST["quant"]);
     $_SESSION["cart"][$count] = $itemarray;
  }
  else
  {
      echo '<script>alert("Product is Already Added ")</script>';
      echo '<script>window.location="pos.php"</script>';
  }  
}
else
{
  $itemarray = array(
  'ids' => $_GET["id"], 
  'name' => $_POST["hiddenname"],
  'price' => $_POST["hiddenprice"],
  'quantity' => $_POST["quant"]);
  $_SESSION['cart'][0] = $itemarray;
}
}else{
  echo '<script>alert("Unavailable Quantity")</script>';
  echo '<script>window.location="pos.php"</script>';
}
}
if (isset($_GET["action"])) {
  if ($_GET["action"]=='delete') {
    foreach ($_SESSION["cart"] as $keys => $values) {
      if ($values['ids']==$_GET["id"]) {
        unset($_SESSION["cart"][$keys]);
        echo '<script>alert("Product is Remove")</script>';
            echo '<script>window.location="pos.php"</script>';
      }
    }
  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title> 

</head>
<body>
  <center><div class="card-header">
<h3>Product</h3>
</div></center>
<div class="row">

  <?php 
  $query = "SELECT * FROM products_table GROUP BY ProductCode";
$result = mysqli_query($db,$query);
if (mysqli_num_rows($result)>0) 
{
 while ($row=mysqli_fetch_array($result)) 
{
   ?>
<div class="col-lg-2">
  <div class="card mb-3">
    <div class="card-body">
      <form  class="col-md-12 col-lg-12" style="font-size:20px !mportant" method="post" action="pos.php?action=add&id=<?php echo $row["ProductCode"] ?>">
         <img src="theme/carousel/ab.jpg" alt="..." style="width:100%"> 
         <h4 class="text-info"><?php echo $row["Product_Name"]; ?> (Remaining:<?php echo $row["Onhand"]; ?>)</h4>
         <h4 class="text-danger">Ksh <?php echo $row["Selling_price"]; ?></h4>
       <input class="form-control" type="text" name="quant" value="1">
       <input class="form-control" type="hidden" name="onhand" value="<?php echo $row["Onhand"]; ?>">
       <input class="form-control" type="hidden" name="hiddenname" value="<?php echo $row["Product_Name"]; ?>">
       <input class="form-control" type="hidden" name="hiddenprice" value="<?php echo $row["Selling_price"]; ?>">
       <input class="btn btn-info" type="submit" name="add_to_cart" value="Add to Cart" style="margin-top: 10px"></center>
     </form>
    </div>
  </div>
</div>
<?php
}
}
?>
</div>
 <div class="card mb-3">
            <div class="card-header">
              <h2>Cart(s)</h2>
            <div class="card-body">
              <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th> 
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if (!empty($_SESSION["cart"])) {
                                   $_SESSION['mtotal']=0;
                                  foreach($_SESSION["cart"] as $keys => $values){
                                    ?>
                                    <tr>
                                      <td><?php echo $values["name"]; ?></td>
                                      <td><?php echo $values["quantity"]; ?></td>
                                      <td><?php echo $values["price"]; ?></td>
                                      <td><?php echo $values["quantity"] * $values["price"]; ?></td>
                                      <td><a class="btn btn-danger" type="button" href="pos.php?action=delete&id=<?php echo $values["ids"]; ?>">Remove</a></td>
                                    </tr>
                                    <?php 
                                    $name= $values["name"];

                                    $_SESSION['mtotal'] = $_SESSION['mtotal']+($values["quantity"] * $values["price"]);
                                  }
                                  ?>
                                   

                                  <td colspan="3" align="right">Sub Total</td>
                                  <td align="right"><?php echo $_SESSION['mtotal'];?></td>
                                  <td><a type="button" class="btn btn-success" href="transpos.php?action=adds">Checkout</a></td>
                                  <?php
                                }
                                 ?>
                             </tbody>
                              </table>
                        </div>
            </div>
           
          </div>

          
        </div>
</body>
</html>
<?php include 'theme/stickyfooter.php'; ?>
