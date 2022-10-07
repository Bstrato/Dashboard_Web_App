<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
//include 'model/weekly_query.php';


$x1="SELECT * from report_event_cases where r between 1 and 7";
$xa=sqlsrv_query($conn, $x1);
?>

     
<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="left">EVENTS AND CASES REPORT - EXPOSED</h4>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
      <div class="row">
            <div class="col-md-8">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                  <thead>
                    <tr>
                      <th>No.</th>     
                      <th >Cluster</th>      
                      <th >Event Category</th>
                      <th >Total</th>
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
                        <td> <?php echo $row['cluster']; ?></td>
                        <td> <?php echo $row['event_category']; ?></td>
                        <td> <?php echo $row['total']; ?></td>
                        </tr>

                        <?php
                          }

                         ?>     

                  </tbody>
                </table>
              </div>
            </div>
          </div>


    <script> 
$(document). ready(function(){

 var table = $('.cstable').DataTable();



});


</script>