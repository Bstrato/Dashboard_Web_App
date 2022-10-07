<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';

$table_name="aesi_share";

if(isset($_POST['listings']) && isset($_POST['SEARCH'])){

    $table_name=$_POST['aesi_share'];
   
   if(!empty($_POST['aesi_share'])){
       
   }  
}

$cluster = '';

$cluster_query = "SELECT cluster, count(cluster) as cnt2 FROM aesi_share GROUP BY cluster ORDER BY cluster";

$cquery= sqlsrv_query($conn, $cluster_query);


while ($row = sqlsrv_fetch_array($cquery,SQLSRV_FETCH_ASSOC))
{
  
  $cluster.='<option value="'.$row['cluster'].'">'.$row['cluster'].'</option>';
}

$grouping = '';
$grouping_query = "SELECT groupings, count(groupings) as cnt2 FROM aesi_share GROUP BY groupings ORDER BY groupings";
$gquery = sqlsrv_query($conn, $grouping_query);

while ($row = sqlsrv_fetch_array($gquery, SQLSRV_FETCH_ASSOC))
{
  $grouping .='<option value="'.$row['groupings'].'">'.$row['groupings'].'</option>';
}

$district = '';
$district_query ="SELECT district, count(district) as cnt3 FROM aesi_share GROUP BY district ORDER BY district";
$dquery=sqlsrv_query($conn, $district_query);

while ($row = sqlsrv_fetch_array($dquery, SQLSRV_FETCH_ASSOC))
{
  $district .='<option value="'.$row['district'].'">'.$row['district'].'</option>';
}


$query_all="SELECT * FROM EPIMAL003_Master.dbo.aesi_share";

$query_init=''; 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

if (isset($_POST['filter_cluster'],$_POST['filter_grouping'], $_POST['filter_district']) && (!empty(trim($_POST['filter_cluster'])) && !empty(trim($_POST['filter_grouping'])) && !empty(trim($_POST['filter_district']))))
{
  $query_init .=" WHERE cluster='".$_POST['filter_cluster']."' AND groupings='".$_POST['filter_grouping']."' AND district='".$_POST['filter_district']."'";

}else{


  $query_all="SELECT * FROM aesi_share";


}


$query_all =$query_all.$query_init;

}

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="centre">AESI LISTINGS</h4>
      


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
<th >form</th>
<th >site_</th>
<th >batchno</th>
<th >formno</th>
<th >pid</th>
<th >dob</th>
<th >pname</th>
<th >sex</th>
<th >mname</th>
<th >compno</th>
<th >vname</th>
<th >lmark</th>
<th >tel</th>



                  <tbody>

                  <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($statement_query2,SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>    

                       
<tr>
<td> <?php echo $counter; ?></td>
<td> <?php echo $row['form']; ?></td>
<td> <?php echo $row['site_'] ; ?></td>
<td> <?php echo $row['batchno'] ; ?></td>
<td> <?php echo $row['formno'] ; ?></td>
<td> <?php echo $row['pid'] ; ?></td>
<td> <?php echo $row['dob'] ; ?></td>
<td> <?php echo $row['pname'] ; ?></td>
<td> <?php echo $row['sex'] ; ?></td>
<td> <?php echo $row['mname'] ; ?></td>
<td> <?php echo $row['compno'] ; ?></td>
<td> <?php echo $row['vname'] ; ?></td>
<td> <?php echo $row['lmark'] ; ?></td>
<td> <?php echo $row['tel'] ; ?></td>
</tr>





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