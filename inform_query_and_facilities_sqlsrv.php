<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
//include 'model/weekly_query.php';


$x1="SELECT Age, Subject, Visit,CRF, hhospname, facloc, Description from Inform_Queries_and_Facilities order by hhospname desc;";

$xa=sqlsrv_query($conn, $x1);

/*
$x2="SELECT cluster, count(*) total from epimal003.dbo.inform_queries_share group by cluster order by cluster";
$xb=sqlsrv_query($conn, $x2);

$x3="SELECT groupings, count(*) total from epimal003.dbo.inform_queries_share group by groupings order by groupings";
$xc=sqlsrv_query($conn, $x3);

$x4="SELECT cluster,groupings, count(*) total from epimal003.dbo.inform_queries_share group by cluster,groupings order by cluster,groupings";
$xd=sqlsrv_query($conn, $x4);
*/

?>

        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">INFORM QUERY AND ASSOCIATED FACILITIES</h4>
   
      


           <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  <thead>
                    <tr>
                      <th style="min-width:20px;">No.</th>
                      <th style="min-width:20px;">Age</th>
                      <th style="min-width:20px;">Participant ID</th>
                      <th style="min-width:20px;">Visit</th>
                      <th style="min-width:20px;">CRF</th>
                      <th style="min-width:20px;">Facility</th>
                      <th style="min-width:20px;">District</th>
                      <th style="min-width:20px;">Description</th>
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
                        <td class="tg-0lax"><?php echo $counter; ?></td>
                        <td class="tg-0lax"><?php echo $row['Age']; ?></td>
                        <td class="tg-0lax"><?php echo $row['Subject']; ?></td>   
                        <td class="tg-0lax"><?php echo $row['Visit']; ?></td>
                        <td class="tg-0lax"><?php echo $row['CRF']; ?></td>
                        <td class="tg-0lax"><?php echo $row['hhospname']; ?></td>
                        <td class="tg-0lax"><?php echo $row['facloc']; ?></td>
                        <td class="tg-0lax"><?php echo $row['Description']; ?></td>   
                    </tr>

                        <?php
                          }

                         ?>     

                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  
<script> 
$(document).ready(function() {
    $('.cstable').DataTable( {
        dom: 'lBfrtip',
        buttons: [
             'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>