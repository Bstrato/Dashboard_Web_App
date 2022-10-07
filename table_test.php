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




<!-- Content -->
<style>

.card {
  margin-bottom: 30px;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
  border: 0;
  background: rgba(255,255,255,0.8);
}
.card-title2 {
  margin-bottom: 1.125px;
  width: 80%;

}
.card-box1 {
  
  margin-bottom: 10px;
  position: relative;
  
}

</style>




 <head>


    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">

</head>



    <!-- Content -->
        <div class="page-wrapper bg-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Inform Query Summary</h4>
                    </div>
                </div>
                

<div class="row">
   


   <thead>
     <tr>
  
         <th>

                <div class="row">
                    <div class="col-md-3">
                      <div class="card-box1">
                    <h4 class="card-title2">Query age in days </h4>
                <div class="row">
            <div class="col-md-10">
              <div class="table">
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
          </div>
      </div>
          </div>
              </div>
                    </th>
       
  <th> 
         <div class="row">
        <div class="col 10">
            <div class="card-box1">
              <h4 class="card-title2">Inform queries by cluster</h4>

                    <div class="row">
                     <div class="col-md-4">
                       <div class="table">
                     <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Cluster</th>
                      <th>Total</th>
                    </tr>
                  </thead>


                  <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($xb, SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>  


                  <tbody> 

                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $row['cluster'];?></td>
                        <td><?php echo $row['total'];?></td>   
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
</th>




       <th>

          <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col 10">
                        <div class="card-box1">
                            <h4 class="card-title2">Inform Queries By Groups</h4>

                                <div class="row">
            <div class="col-md-4">
              <div class="table">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      <th style="min-width:20px;">No.</th>
                      <th style="min-width:20px;">Cluster</th>
                      <th style="min-width:20px;">Total</th>
                    </tr>
                  </thead>


                  <tbody>

                  <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($xc, SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>  

                    <tr>
                        <td class="tg-0lax"><?php echo $counter; ?></td>
                        <td class="tg-0lax"><?php echo $row['groupings'];?></td>
                        <td class="tg-0lax"><?php echo $row['total'];?></td>


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
                            </div>
        </th>
 



  <th>

                      <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="card-box1">
                            <h4 class="card-title2">Queries by cluster and groups</h4>

                                <div class="row">
            <div class="col-md-10">
              <div class="table">
                <table class="table table-striped custom-table mb-0  cstable">
                  



                  <thead>
                    <tr>
                      <th style="min-width:20px;">No.</th>
                      <th style="min-width:20px;">Cluster</th>
                      <th style="min-width:20px;">Group</th>
                      <th style="min-width:20px;">Total</th>
                    </tr>
                  </thead>


                  <tbody>

                  <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($xd, SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>  

                    <tr>
                        <td class="tg-0lax"><?php echo $counter; ?></td>
                        <td class="tg-0lax"><?php echo $row['cluster'];?></td>
                        <td class="tg-0lax"><?php echo $row['groupings'];?></td>
                        <td class="tg-0lax"><?php echo $row['total'];?></td>


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
</div>
</th>




  <th>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-10">
                        <div class="card-box1">
                            <h4 class="card-title2">Address</h4>

                                <div class="row">
                     <div class="col-md-10">
                       <div class="table">
                     <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      <th style="min-width:20px; align-items: center;">No.</th>
                      <th style="min-width:20px; text-align: center;">Age</th>
                      <th style="min-width:20px; text-align: center;">Total</th>
                    </tr>
                  </thead>


                  <tbody> 

                    <tr>
                        <td class="tg-0lax">The boy is going to school</td>
                        <td class="tg-0lax">The boy is going to school</td>
                        <td class="tg-0lax">The boy is going to school</td>   
                    </tr>

                  </tbody>

              
                              </div>
                        </div>
                     </div>
                  </div>
                  </div>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
      </th>
    </tr>
  </thead>
  </table>


