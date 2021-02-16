<?php
include('connection.php');
include('theme/carousel/header.php');
?>

<?php include('theme/carousel/sidebar.php');

  include 'theme/carousel/clientbreadcrumbs.php';
     ?>
          <!-- Breadcrumbs-->
          
           <div class="col-lg-12">
                        <h2>Accounts Table</h2> <a href="#" data-toggle="modal" data-target="#logoutModal1" type="button" class="btn btn-xs btn-info">Add New</a>
                    </div>
                       
                         <div class="card-body">       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" with="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>acc_id</th> 
                                        <th>f_name</th>
                                        <th>l_name</th>
                                        <th>email</th>
                                        <th>position</th>
                                        <th>username</th>
                                        <th>password</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM tblaccounts';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['acc_id'].'</td>';
                            echo '<td>'. $row['f_name'].'</td>';
                            echo '<td>'. $row['l_name'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
                            echo '<td>'. $row['position].'</td>';
                             echo '<td>'. $row['username'].'</td>';
                              echo '<td>'. $row['password'].'</td>';
                    
                            echo ' <td> <a  type="button" class="btn btn-lg  btn-warning fas fa-user-edit" href="clientedit.php?action=edit & id='.$row['Cust_id'] . '"></a> ';
                            echo ' <a  type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="clientdelete.php?type=client&delete & id=' . $row['Cust_id'] . '"></a> </td>';
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

<?php include('clientadd.php'); ?>  
        <!-- Sticky Footer -->
      <?php include('theme/stickyfooter.php'); ?> 
      