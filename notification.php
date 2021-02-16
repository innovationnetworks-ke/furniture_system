<?php
include "includes/connection.php";
session_start();

                                $query = "DELETE FROM notification where customer_id ='".$_SESSION['p']."'";
								mysqli_query($db,$query)or die (mysqli_error($db));
 
  ?>
  <script>
window.location = "Orderdetailtable.php";
  </script>
