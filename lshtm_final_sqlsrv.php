<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$query_all="SELECT * FROM report_LSHTM_final_datab";

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">LSHTM REPORT</h4>
      


    
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      
                      <th>No.</th>     

<th>Com</th>
<th>Remark</th>
<th>Exposed</th>
<th>Unexposed</th>
<th>Total</th>
<th>__</th>
<th>KN</th>
<th>KS</th>
<th>NN</th>
<th>NS</th>
<th>TN</th>
<th>TS</th>
<th>Total_</th>

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
<td> <?php echo $row['com'] ; ?></td>
<td> <?php echo $row['remark'] ; ?></td>
<td> <?php echo $row['exposed'] ; ?></td>
<td> <?php echo $row['unexposed'] ; ?></td>
<td> <?php echo $row['total'] ; ?></td>
<td> <?php echo $row['____'] ; ?></td>
<td> <?php echo $row['KN'] ; ?></td>
<td> <?php echo $row['KS'] ; ?></td>
<td> <?php echo $row['NN'] ; ?></td>
<td> <?php echo $row['NS'] ; ?></td>
<td> <?php echo $row['TN'] ; ?></td>
<td> <?php echo $row['TS'] ; ?></td>
<td> <?php echo $row['total_'] ; ?></td>

                        
                       
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