<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$query_all="SELECT * FROM report_rtss_monthly_lshtm_datab order by r";

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">MONTHLY LSHTM REPORT</h4>
      


    
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      
                      <th>No.</th>     
<th>month_</th>
<th>rtss1</th>
<th>rtss2</th>
<th>rtss3</th>
<th>rtss4</th>
<th>total</th>


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
<td> <?php echo $row['month_'] ; ?></td>
<td> <?php echo $row['rtss1'] ; ?></td>
<td> <?php echo $row['rtss2'] ; ?></td>
<td> <?php echo $row['rtss3'] ; ?></td>
<td> <?php echo $row['rtss4'] ; ?></td>
<td> <?php echo $row['total'] ; ?></td>

                                         
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