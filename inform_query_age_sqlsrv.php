<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
//include 'model/weekly_query.php';


$x1="SELECT * from epimal003.dbo.inform_query_age order by nos;";
$xa=sqlsrv_query($conn, $x1);

$x2="SELECT cluster, count(*) total from epimal003.dbo.inform_queries_share group by cluster order by cluster";
$xb=sqlsrv_query($conn, $x2);

$x3="SELECT groupings, count(*) total from epimal003.dbo.inform_queries_share group by groupings order by groupings";
$xc=sqlsrv_query($conn, $x3);

$x4="SELECT cluster,groupings, count(*) total from epimal003.dbo.inform_queries_share group by cluster,groupings order by cluster,groupings";
$xd=sqlsrv_query($conn, $x4);

?>




<!-- Content -->
<link rel="stylesheet" type="text/css" href="assets/css/table1.css">



        <div class="page-wrapper bg-wrapper" align="center">
        <div class="content" align="center">
        <div class="row" align="center">
        <div class="col-md-3" class="center">
        <h4 class="page-title">INFORM QUERY SUMMARY</h4>
              <div class="table" class="center">
                <table class="table" align="center">
                  
                  <thead>
                    <tr>
                      <th style="min-width:20px; text-align: center;">No.</th>
                      <th style="min-width:20px; text-align: center;">Age</th>
                      <th style="min-width:20px; text-align: center;">Total</th>
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
                        <td class="tg-0lax" align="center"><?php echo $counter; ?></td>
                        <td class="tg-0lax" align="center"><?php echo $row['age']; ?></td>
                        <td class="tg-0lax" align="center"><?php echo $row['total']; ?></td>   
                    </tr>

                        <?php
                          }

                         ?>     

                  </tbody>

                </table>
        
   <br/>
  <br/> 
  <br/> 
  <br/>

 

        <div class="content" align="center">
        <div class="row" align="center">
        <div class="col-md-5" class="center">
          <div class="table" class="center">
            <table class="table" align="center">
        <thead>
        <tr>
        <th class="tg-0pky" colspan="3">Inform queries by cluster</th> 
        </tr>
      </thead>
    <tbody>
  <tr>
    <td class="tg-0pky"><strong>No.</strong></td>
    <td class="tg-0pky"><strong>Cluster</strong></td>
    <td class="tg-0pky"><strong>Total</strong></td>
  <tr>

<?php
    $counter1=0;
      while($row=sqlsrv_fetch_array($xb, SQLSRV_FETCH_ASSOC))
                      {
       $counter1=$counter1+1;
          ?>  

    <td class="tg-0pky"><?php echo $counter1; ?></td>
    <td class="tg-0pky"><?php echo $row['cluster']; ?></td>
    <td class="tg-0pky"><?php echo $row['total']; ?></td>
  </tr>
                        <?php
                          }

                         ?>     
</tr>
</tbody>
</table>
</table>
</div>
</div>
</div>
</div>


        <div class="content" align="center">
        <div class="row" align="center">
        <div class="col-md-10" class="center">
          <div class="table" class="center">
            <table class="table" align="center">
        <thead>
        <tr>
        <th class="tg-0pky" colspan="3">Inform queries by groups</th> 
        </tr>
      </thead>
    <tbody>
  <tr>
    <td class="tg-0pky"><strong>No.</strong></td>
    <td class="tg-0pky"><strong>Cluster</strong></td>
    <td class="tg-0pky"><strong>Total</strong></td>
  <tr>

<?php
    $counter2=0;
      while($row=sqlsrv_fetch_array($xc, SQLSRV_FETCH_ASSOC))
                      {
       $counter2=$counter2+1;
          ?>  

    <td class="tg-0pky"><?php echo $counter2; ?></td>
    <td class="tg-0pky"><?php echo $row['groupings']; ?></td>
    <td class="tg-0pky"><?php echo $row['total']; ?></td>
  </tr>
                        <?php
                          }

                         ?>     
</tr>
</tbody>
</table>
</table>
</div>
</div>
</div>
</div>



        <div class="content" align="center">
        <div class="row" align="center">
        <div class="col-md-20" class="center">
          <div class="table" class="center">
            <table class="table" align="center">
        <thead>
        <tr>
        <th class="tg-0pky" colspan="3">Inform queries by cluster and groups</th> 
        </tr>
      </thead>
    <tbody>
  <tr>
    <td class="tg-0pky"><strong>No.</strong></td>
    <td class="tg-0pky"><strong>Cluster</strong></td>
    <td class="tg-0pky"><strong>Group</strong></td>
    <td class="tg-0pky"><strong>Total</strong></td>
  <tr>

<?php
    $counter3=0;
      while($row=sqlsrv_fetch_array($xd, SQLSRV_FETCH_ASSOC))
                      {
       $counter3=$counter3+1;
          ?>  

    <td class="tg-0pky"><?php echo $counter3; ?></td>
    <td class="tg-0pky"><?php echo $row['cluster']; ?></td>
    <td class="tg-0pky"><?php echo $row['groupings']; ?></td>
    <td class="tg-0pky"><?php echo $row['total']; ?></td>
  </tr>
                        <?php
                          }

                         ?>     
</tr>
</tbody>
</table>
</table>
</div>
</div>
</div>
</div>

      </div>
            </div>
          </div>
        </div>