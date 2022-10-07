<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';

$table_name="expedited_events_datab";

if(isset($_POST['listings']) && isset($_POST['SEARCH'])){

    $table_name=$_POST['expedited_events_datab'];
   
   if(!empty($_POST['expedited_events_datab'])){
       
   }  
}

$cluster = '';

$cluster_query = "SELECT cluster, count(cluster) as cnt2 FROM expedited_events_datab GROUP BY cluster ORDER BY cluster";

$cquery= sqlsrv_query($conn, $cluster_query);


while ($row = sqlsrv_fetch_array($cquery,SQLSRV_FETCH_ASSOC))
{
  
  $cluster.='<option value="'.$row['cluster'].'">'.$row['cluster'].'</option>';
}

$grouping = '';
$grouping_query = "SELECT groupings, count(groupings) as cnt2 FROM expedited_events_datab GROUP BY groupings ORDER BY groupings";
$gquery = sqlsrv_query($conn, $grouping_query);

while ($row = sqlsrv_fetch_array($gquery, SQLSRV_FETCH_ASSOC))
{
  $grouping .='<option value="'.$row['groupings'].'">'.$row['groupings'].'</option>';
}

$district = '';
$district_query ="SELECT district, count(district) as cnt3 FROM expedited_events_datab GROUP BY district ORDER BY district";
$dquery=sqlsrv_query($conn, $district_query);

while ($row = sqlsrv_fetch_array($dquery, SQLSRV_FETCH_ASSOC))
{
  $district .='<option value="'.$row['district'].'">'.$row['district'].'</option>';
}


$query_all="SELECT * FROM EPIMAL003_Master.dbo.expedited_events_datab";

$query_init=''; 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

if (isset($_POST['filter_cluster'],$_POST['filter_grouping'], $_POST['filter_district']) && (!empty(trim($_POST['filter_cluster'])) && !empty(trim($_POST['filter_grouping'])) && !empty(trim($_POST['filter_district']))))
{
  $query_init .=" WHERE cluster='".$_POST['filter_cluster']."' AND groupings='".$_POST['filter_grouping']."' AND district='".$_POST['filter_district']."'";

}else{


  $query_all="SELECT * FROM expedited_events_datab";


}


$query_all =$query_all.$query_init;

}

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="centre">EXPEDITED EVENTS - LISTINGS</h4>
      


       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
      <div class="row">
             
            
              
                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">CLUSTER</label>
                    <select class="select" name="filter_cluster" id="filter_cluster">
                    <option value="">Select Cluster</option>
                    <?php echo $cluster;?>
                    </select>     
                  </div>
           
                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">GROUPING</label>
                    <select class="select" name="filter_grouping" id="filter_grouping">
                    <option value="">Select Grouping</option>
                    <?php echo $grouping;?>
                    </select>     
                  </div>
     
                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">DISTRICT</label>
                    <select class="select" name="filter_district" id="filter_district">
                    <option value="">Select District</option>
                    <?php echo $district;?>
                    </select>     
                  </div><br><br>    
             
              <div class="form-group" align="right" style="margin-top:1.0rem;">
                <button type="submit" name="filter" id="filter" class="btn btn-success">Filter</button>
              </div>


         

              </div><br><br>
                </form>            
            </div>

    <p>
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
                  
                <thead>
   <tr>                      
<th>No.</th>        
<th >pid</th>
<th >pname</th>
<th >mname</th>
<th >dob</th>
<th >sex</th>
<th >vname</th>
<th >tel</th>
<th >event_date</th>
<th >event_name</th>
<th >vac</th>
<th >vacdate</th>
<th >days_after_vaccine</th>
<th >cluster</th>
<th >district</th>
<th >groupings</th>
<th >rtss1</th>
<th >rtss2</th>
<th >rtss3</th>
<th >rtss4</th>
<th >interval_range</th>

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
<td> <?php echo $row['pname'] ; ?></td>
<td> <?php echo $row['mname'] ; ?></td>
<td> <?php echo $row['dob'] ; ?></td>
<td> <?php echo $row['sex'] ; ?></td>
<td> <?php echo $row['vname'] ; ?></td>
<td> <?php echo $row['tel'] ; ?></td>
<td> <?php echo $row['event_date'] ; ?></td>
<td> <?php echo $row['event_name'] ; ?></td>
<td> <?php echo $row['vac'] ; ?></td>
<td> <?php echo $row['vacdate'] ; ?></td>
<td> <?php echo $row['days_after_vaccine'] ; ?></td>
<td> <?php echo $row['cluster'] ; ?></td>
<td> <?php echo $row['district'] ; ?></td>
<td> <?php echo $row['groupings'] ; ?></td>
<td> <?php echo $row['rtss1'] ; ?></td>
<td> <?php echo $row['rtss2'] ; ?></td>
<td> <?php echo $row['rtss3'] ; ?></td>
<td> <?php echo $row['rtss4'] ; ?></td>
<td> <?php echo $row['interval_range'] ; ?></td>
              
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