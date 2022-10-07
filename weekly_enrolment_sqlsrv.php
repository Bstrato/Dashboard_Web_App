<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$query_all="SELECT * FROM weekly_report_enrolment_figures_datab order by no";

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">WEEKLY ENROLMENT FIGURES</h4>
      


    
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      
                      <th>No.</th>     
<th>Exposed</th>
<th>DTP</th>
<th>Catch-Up</th>
<th>Enhance</th>
<th>Voilation</th>
<th>total</th>
<th>Unexposed</th>
<th>DTP</th>
<th>Enhance</th>
<th>Voilation</th>
<th>Total</th>



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

<td> <?php echo $row['week_exposed'] ; ?></td>
<td> <?php echo $row['DTP group'] ; ?></td>
<td> <?php echo $row['Catch-Up group'] ; ?></td>
<td> <?php echo $row['Enhance hospital'] ; ?></td>
<td> <?php echo $row['Voilation'] ; ?></td>
<td> <?php echo $row['total'] ; ?></td>
<td> <?php echo $row['week_unexposed'] ; ?></td>
<td> <?php echo $row['DTP group_'] ; ?></td>
<td> <?php echo $row['Enhance hospital_'] ; ?></td>
<td> <?php echo $row['Voilation_'] ; ?></td>
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