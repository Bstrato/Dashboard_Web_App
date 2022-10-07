<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$query_all="SELECT * from conclusion_listb";

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">STUDY CONCLUSION LIST</h4>
      


    
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      
                      <th>No.</th>     
<th>pid</th>
<th>pname</th>
<th>sex</th>
<th>cluster</th>
<th>place_enrol</th>
<th>district</th>
<th>vname</th>
<th>groups</th>
<th>dob</th>
<th>date_enrolled</th>
<th>exit_date</th>
<th>exit_age_yrs</th>
<th>reason</th>
<th>cause_of_death</th>
<th>place_died</th>

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
<td> <?php echo $row['pname'] ; ?></td>
<td> <?php echo $row['sex'] ; ?></td>
<td> <?php echo $row['cluster'] ; ?></td>
<td> <?php echo $row['place_enrol'] ; ?></td>
<td> <?php echo $row['district'] ; ?></td>
<td> <?php echo $row['vname'] ; ?></td>
<td> <?php echo $row['groups'] ; ?></td>
<td> <?php echo $row['dob'] ; ?></td>
<td> <?php echo $row['date_enrolled'] ; ?></td>
<td> <?php echo $row['exit_date'] ; ?></td>
<td> <?php echo $row['exit_age_yrs'] ; ?></td>
<td> <?php echo $row['reason'] ; ?></td>
<td> <?php echo $row['cause_of_death'] ; ?></td>
<td> <?php echo $row['place_died'] ; ?></td>



                                         
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