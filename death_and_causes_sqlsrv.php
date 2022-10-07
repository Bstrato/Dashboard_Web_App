<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
//include 'model/weekly_query.php';


$x1="SELECT * from cause_of_death_04_12_2020";
$xa=sqlsrv_query($conn, $x1);
?>

     
<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">LIST OF DEATHS  AND CAUSES</h4>
      

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
      <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr> 
                      <th>No.</th> 
                      <th>Pid</th> 
                      <th>Name</th>
                      <th>Sex</th> 
                      <th>Cause</th> 
                      <th>Cluster</th>  
                      <th>District</th> 
                      <th>Groupings</th> 

                    </tr>
                  </thead>


                  <tbody>

                  <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($xa, SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                  ?>    

                        <tr>


                        <td> <?php echo $counter; ?></td>
                        <td> <?php echo  $row['pid'] ; ?></td>
                        <td> <?php echo  $row['pname'] ; ?></td>
                        <td> <?php echo  $row['sex'] ; ?></td>
                        <td> <?php echo  $row['cod'] ; ?></td>
                        <td> <?php echo  $row['cluster'] ; ?></td>
                        <td> <?php echo  $row['district'] ; ?></td>
                        <td> <?php echo  $row['groupings'] ; ?></td>


                        </tr>

                      <?php
                          }

                      ?>     

                  </tbody>
                </table>
              </div>
            </div>
          </div>
<div class="sidebar-overlay" data-reff=""></div>

<script> 
$(document).ready(function() {
    $('.cstable').DataTable( {
        dom: 'lBfrtip',
        buttons: [
             'csv', 'excel', 'print'
        ]
    } );
} );
</script>