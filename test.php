<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
//include 'model/weekly_query.php';


$x1="SELECT * from epimal003.dbo.inform_query_age where age!='total' and age!='new' order by nos;";
$xa=sqlsrv_query($conn, $x1);

$x2="SELECT cluster, count(*) total from epimal003.dbo.inform_queries_share group by cluster order by cluster";
$xb=sqlsrv_query($conn, $x2);

$x3="SELECT groupings, count(*) total from epimal003.dbo.inform_queries_share group by groupings order by groupings";
$xc=sqlsrv_query($conn, $x3);

$x4="SELECT cluster,groupings, count(*) total from epimal003.dbo.inform_queries_share group by cluster,groupings order by cluster,groupings";
$xd=sqlsrv_query($conn, $x4);

?>

<div class="content">
  <div class="col-md-4">
      <h4 class="page-title">Inform Query Summary</h4>
          <table class="table table-striped custom-table mb-0  cstable">
              <thead>
                    <tr>
                      <th>No.</th>
                      <th>Age</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                   <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($xa, SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>  


                  <tbody>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                    </tr>
                        <?php
                          }

                         ?>  
                  </tbody>

                </table>

  </div>
  <div class="col-md-4">
      <h4 class="page-title">Inform Query Summary</h4>
          <table class="table table-striped custom-table mb-0  cstable">
              <thead>
                    <tr>
                      <th>No.</th>
                      <th>Age</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                   <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($xa, SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>  


                  <tbody>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                    </tr>
                        <?php
                          }

                         ?>  
                  </tbody>

                </table>
  </div>
  <div class="col-md-4">
      <h4 class="page-title">Inform Query Summary</h4>
          <table class="table table-striped custom-table mb-0  cstable">
              <thead>
                    <tr>
                      <th>No.</th>
                      <th>Age</th>
                      <th>Total</th>
                    </tr>
                  </thead>

                   <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($xa, SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>  


                  <tbody>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                    </tr>
                        <?php
                          }

                         ?>  
                  </tbody>

                </table>
  </div>
</div>

