<?php
include('connection.php');
include('theme/header.php');
?>

<?php include('theme/sidebar.php');

  include 'theme/clientbreadcrumbs.php';
     ?>
          <!-- Breadcrumbs-->
          
           <div class="col-lg-12">
                        <h2>Clients Table</h2> 
                    </div>
                       
                         <div class="card-body">       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTable" with="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th> 
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = "SELECT * FROM tblaccounts where position = 'Customer'";
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['acct_id'].'</td>';
                            echo '<td>'. $row['f_name'].'</td>';
                            echo '<td>'. $row['l_name'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
                            echo '<td>'. $row['contact'].'</td>';
                            echo '<td>'. $row['email'].'</td>';
        
                            echo ' <td> <a  type="button" class="btn btn-lg  btn-warning fas fa-user-edit" href="clientedit.php?action=edit & id='.$row['acct_id'] . '"></a> ';
                            echo ' <a  type="button" class="btn btn-lg btn-danger fas fa-trash-alt" href="clientdelete.php?type=client&delete & id=' . $row['acct_id'] . '"></a> </td>';
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
      <?php

      ?> 