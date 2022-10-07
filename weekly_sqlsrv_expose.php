<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
//include 'model/weekly_query.php';


$x1="SELECT* from Weekly_Visit_Status_datab where cluster = 'exposed' order by rn";
$xa=sqlsrv_query($conn, $x1);
?>

     
<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">STATUS OF PARTICIPANTS FOR EXPOSED</h4>
      

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
      <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      
                      <th>No.</th>         
                      <th >Grouping</th>
                      <th >Status</th>
                      <th >Number</th>
                      <th >Percentage</th>
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
                        <td> <?php echo $counter; ?></td>
                        <td> <?php echo $row['groupings']; ?></td>
                        <td> <?php echo $row['current_status']; ?></td>
                        <td> <?php echo $row['counts'] ; ?></td>
                        <td> <?php echo $row['%']; ?></td>
                        </tr>

                        <?php
                          }

                         ?>     

                  </tbody>
                </table>
              </div>
            </div>
          </div>


