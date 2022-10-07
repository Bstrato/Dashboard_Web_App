<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$query_all="SELECT * FROM Bednet_current_xtics_14_01_2021";

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">BED NET INFORMATION</h4>
      


    
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      
                      <th>No.</th>     

          <th>pid</th>
          <th>last_visits</th>
          <th>change_freg_no</th>
          <th>freq_</th>
          <th>xtic_change_no</th>
          <th>no_use_bednet_</th>
          <th>netnew_less1yr_</th>
          <th>impregnated_</th>
          <th>net_torn_</th>
          <th>net_comment_</th>
          <th>last_night_no</th>
          <th>new_</th>
          <th>inpregnated_</th>
          <th>torn_</th>
          <th>hole_size_</th>
          <th>reason_miss_last_nit</th>
          <th>reason_oth</th>
          <th>check_</th>
          <th>r</th>


                    </tr>
                  </thead>


                  <tbody>

                  <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($statement_query2,SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>    

                        <tr>
                        
                          <td> <?php echo  $counter  ; ?></td>

            <td> <?php echo $row['pid'] ; ?></td>
            <td> <?php echo $row['last_visits'] ; ?></td>
            <td> <?php echo $row['change_freg_no'] ; ?></td>
            <td> <?php echo $row['freq_'] ; ?></td>
            <td> <?php echo $row['xtic_change_no'] ; ?></td>
            <td> <?php echo $row['no_use_bednet_'] ; ?></td>
            <td> <?php echo $row['netnew_less1yr_'] ; ?></td>
            <td> <?php echo $row['impregnated_'] ; ?></td>
            <td> <?php echo $row['net_torn_'] ; ?></td>
            <td> <?php echo $row['net_comment_'] ; ?></td>
            <td> <?php echo $row['last_night_no'] ; ?></td>
            <td> <?php echo $row['new_'] ; ?></td>
            <td> <?php echo $row['inpregnated_'] ; ?></td>
            <td> <?php echo $row['torn_'] ; ?></td>
            <td> <?php echo $row['hole_size_'] ; ?></td>
            <td> <?php echo $row['reason_miss_last_nit'] ; ?></td>
            <td> <?php echo $row['reason_oth'] ; ?></td>
            <td> <?php echo $row['check_'] ; ?></td>
            <td> <?php echo $row['r'] ; ?></td>


                               
                        </tr>

                        <?php
                          }

                         ?>
                    
                  </tbody>
        
                </table>
              </div>
            </div>
          </div>
          
        </p>
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