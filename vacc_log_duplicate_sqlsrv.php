<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';


$query_all="SELECT * FROM EPIMAL003_Master.dbo.vacc_log_duplicate";
$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="centre">VACCINATION LOG DUPLICATE - LISTINGS</h4>
      


       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
      <div class="row">
             
            

                 
            </div>

     <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
<table class="table table-striped custom-table mb-0  cstable">
                  
<thead>
                      <tr>                               
<th>No.</th> 
<th >pid</th>        
<th >form</th>
<th >form_code</th>
<th >siteid</th>
<th >batchno</th>
<th >formno</th>
<th >barcode</th>
<th >type_</th>
<th >vacc_name</th>
<th >vacc_num</th>
<th >date_</th>


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
                        <td> <?php echo $counter; ?></td>
                        <td> <?php echo $row['pid']; ?></td>
                        <td> <?php echo $row['form'] ; ?></td>
                        <td> <?php echo $row['form_code'] ; ?></td>
                        <td> <?php echo $row['siteid'] ; ?></td>
                        <td> <?php echo $row['batchno'] ; ?></td>
                        <td> <?php echo $row['formno'] ; ?></td>
                        <td> <?php echo $row['barcode'] ; ?></td>
                        <td> <?php echo $row['type_'] ; ?></td>
                        <td> <?php echo $row['vacc_name'] ; ?></td>
                        <td> <?php echo $row['vacc_num'] ; ?></td>
                        <td> <?php echo $row['date_'] ; ?></td>

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
        dom:'lBfrtip',
        buttons: [
             'csv', 
             'excel', 
             'print',
             {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ]
    } );
} );
</script>