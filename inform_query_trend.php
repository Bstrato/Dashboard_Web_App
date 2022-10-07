<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
//include 'model/weekly_query.php';



$x1="SELECT * from 
(select Description_b,count(*) total from epimal003.dbo.inform_queries_share group by Description_b) a order by total desc";
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
        <h4 class="page-title" align="center">INFORM QUERY TREND</h4>
   
           <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  <thead>
                    <tr>
                      <th style="min-width:20px;">No.</th>
                      <th style="min-width:20px;">Description</th>
                      <th style="min-width:20px;">Total</th>
                    </tr>
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
                        <td class="tg-0lax"><?php echo $row['Description_b']; ?></td>
                        <td class="tg-0lax"><?php echo $row['total']; ?></td>    
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