<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$query_all="SELECT * FROM weekly_report_expected_done_lshtm_datab order by r";

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">WEEKLY LSHTM EXPECTED</h4>
      


    
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      
                      <th>No.</th>     
<th>cluster</th>
<th>groups</th>
<th>visits</th>
<th>expected</th>
<th>done</th>
<th>diff</th>
<th>exited before shchedule</th>
<th>shchedule not due</th>




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

<td> <?php echo $row['cluster'] ; ?></td>
<td> <?php echo $row['groups'] ; ?></td>
<td> <?php echo $row['visits'] ; ?></td>
<td> <?php echo $row['expected'] ; ?></td>
<td> <?php echo $row['done'] ; ?></td>
<td> <?php echo $row['diff'] ; ?></td>
<td> <?php echo $row['exited before shchedule'] ; ?></td>
<td> <?php echo $row['shchedule not due'] ; ?></td>


                                         
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