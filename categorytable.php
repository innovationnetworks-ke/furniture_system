<?php
include('connection.php');
include('theme/header.php');
?>

<?php include('theme/sidebar.php');

  include 'theme/breadcrumbs.php';
     ?>
          <!-- Breadcrumbs-->
          
           <div class="col-lg-12">
                        <h2>Category Table</h2> <a href="#" data-toggle="modal" data-target="#logoutModal1" type="button" class="btn btn-xs btn-info">Add New</a>
                    </div>
                       
                        <div class="card-body">       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" with="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>category_id</th> 
                                        <th>categoryname</th>
                                         <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM category';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['category_id'].'</td>';
                            echo '<td>'. $row['categoryname'].'</td>';
                    
                            echo ' <td> <a  type="button" class="btn btn-lg  btn-warning fas fa-user-edit" href="categoryedit.php?action=edit & id='.$row['category_id'] . '"></a> ';
                            echo ' <a  type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="categorydelete.php?type=category&delete & id=' . $row['category_id'] . '"></a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include('categoryadd.php'); ?>  
        <!-- Sticky Footer -->
      <?php include('theme/stickyfooter.php'); ?> 
      <?php

      ?> 