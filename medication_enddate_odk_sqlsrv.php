<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$table_name="blank_medication_enddate_odk_datab";

if(isset($_POST['listings']) && isset($_POST['SEARCH'])){

    $table_name=$_POST['blank_medication_enddate_odk_datab'];
   
   if(!empty($_POST['blank_medication_enddate_odk_datab'])){
       
   }  
}

$cluster = '';

$cluster_query = "SELECT cluster, count(cluster) as cnt2 FROM blank_medication_enddate_odk_datab GROUP BY cluster ORDER BY cluster";

$cquery= sqlsrv_query($conn, $cluster_query);


while ($row = sqlsrv_fetch_array($cquery,SQLSRV_FETCH_ASSOC))
{
  
  $cluster.='<option value="'.$row['cluster'].'">'.$row['cluster'].'</option>';
}

$grouping = '';
$grouping_query = "SELECT group_, count(group_) as cnt2 FROM blank_medication_enddate_odk_datab GROUP BY group_ ORDER BY group_";
$gquery = sqlsrv_query($conn, $grouping_query);

while ($row = sqlsrv_fetch_array($gquery, SQLSRV_FETCH_ASSOC))
{
  $grouping .='<option value="'.$row['group_'].'">'.$row['group_'].'</option>';
}

$district = '';
$district_query ="SELECT district, count(district) as cnt3 FROM blank_medication_enddate_odk_datab GROUP BY district ORDER BY district";
$dquery=sqlsrv_query($conn, $district_query);

while ($row = sqlsrv_fetch_array($dquery, SQLSRV_FETCH_ASSOC))
{
  $district .='<option value="'.$row['district'].'">'.$row['district'].'</option>';
}


$query_all="SELECT * FROM blank_medication_enddate_odk_datab";

$query_init=''; 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

if (isset($_POST['filter_cluster'],$_POST['filter_grouping'], $_POST['filter_district']) && (!empty(trim($_POST['filter_cluster'])) && !empty(trim($_POST['filter_grouping'])) && !empty(trim($_POST['filter_district']))))
{
  $query_init .=" WHERE cluster='".$_POST['filter_cluster']."' AND groupings='".$_POST['filter_grouping']."' AND district='".$_POST['filter_district']."'";

}else{


  $query_all="SELECT * FROM blank_medication_enddate_odk_datab";
}


$query_all =$query_all.$query_init;

}

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title">NEXT WEEK LISTINGS</h4>
      


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
<th>pid</th>
<th>dov</th>
<th>med</th>
<th>medname1</th>
<th>medindication1</th>
<th>meddose1</th>
<th>medroute1</th>
<th>medstartdate1</th>
<th>medenddate1</th>
<th>medname2</th>
<th>medindication2</th>
<th>meddose2</th>
<th>medroute2</th>
<th>medstartdate2</th>
<th>medenddate2</th>
<th>medname3</th>
<th>medindication3</th>
<th>meddose3</th>
<th>medroute3</th>
<th>medstartdate3</th>
<th>medenddate3</th>
<th>medname4</th>
<th>medindication4</th>
<th>meddose4</th>
<th>medroute4</th>
<th>medstartdate4</th>
<th>medenddate4</th>
<th>medname5</th>
<th>medindication5</th>
<th>meddose5</th>
<th>medroute5</th>
<th>medstartdate5</th>
<th>medenddate5</th>
<th>medname6</th>
<th>medindication6</th>
<th>meddose6</th>
<th>medroute6</th>
<th>medstartdate6</th>
<th>medenddate6</th>
<th>medname7</th>
<th>medindication7</th>
<th>meddose7</th>
<th>medroute7</th>
<th>medstartdate7</th>
<th>medenddate7</th>
<th>medname8</th>
<th>medindication8</th>
<th>meddose8</th>
<th>medroute8</th>
<th>medstartdate8</th>
<th>medenddate8</th>
<th>medname9</th>
<th>medindication9</th>
<th>meddose9</th>
<th>medroute9</th>
<th>medstartdate9</th>
<th>medenddate9</th>
<th>medname10</th>
<th>medindication10</th>
<th>meddose10</th>
<th>medroute10</th>
<th>medstartdate10</th>
<th>medenddate10</th>
<th>medname11</th>
<th>medindication11</th>
<th>meddose11</th>
<th>medroute11</th>
<th>medstartdate11</th>
<th>medenddate11</th>
<th>medname12</th>
<th>medindication12</th>
<th>meddose12</th>
<th>medroute12</th>
<th>medstartdate12</th>
<th>medenddate12</th>
<th>medname13</th>
<th>medindication13</th>
<th>meddose13</th>
<th>medroute13</th>
<th>medstartdate13</th>
<th>medenddate13</th>
<th>medname14</th>
<th>medindication14</th>
<th>meddose14</th>
<th>medroute14</th>
<th>medstartdate14</th>
<th>medenddate14</th>
<th>medname15</th>
<th>medindication15</th>
<th>meddose15</th>
<th>medroute15</th>
<th>medstartdate15</th>
<th>medenddate15</th>
<th>medname16</th>
<th>medindication16</th>
<th>meddose16</th>
<th>medroute16</th>
<th>medstartdate16</th>
<th>medenddate16</th>
<th>medname17</th>
<th>medindication17</th>
<th>meddose17</th>
<th>medroute17</th>
<th>medstartdate17</th>
<th>medenddate17</th>
<th>medname18</th>
<th>medindication18</th>
<th>meddose18</th>
<th>medroute18</th>
<th>medstartdate18</th>
<th>medenddate18</th>
<th>medname19</th>
<th>medindication19</th>
<th>meddose19</th>
<th>medroute19</th>
<th>medstartdate19</th>
<th>medenddate19</th>
<th>medname20</th>
<th>medindication20</th>
<th>meddose20</th>
<th>medroute20</th>
<th>medstartdate20</th>
<th>medenddate20</th>
<th>medname21</th>
<th>medindication21</th>
<th>meddose21</th>
<th>medroute21</th>
<th>medstartdate21</th>
<th>medenddate21</th>
<th>medname22</th>
<th>medindication22</th>
<th>meddose22</th>
<th>medroute22</th>
<th>medstartdate22</th>
<th>medenddate22</th>
<th>medname23</th>
<th>medindication23</th>
<th>meddose23</th>
<th>medroute23</th>
<th>medstartdate23</th>
<th>medenddate23</th>
<th>medname24</th>
<th>medindication24</th>
<th>meddose24</th>
<th>medroute24</th>
<th>medstartdate24</th>
<th>medenddate24</th>
<th>medname25</th>
<th>medindication25</th>
<th>meddose25</th>
<th>medroute25</th>
<th>medstartdate25</th>
<th>medenddate25</th>
<th>medname26</th>
<th>medindication26</th>
<th>meddose26</th>
<th>medroute26</th>
<th>medstartdate26</th>
<th>medenddate26</th>
<th>medname27</th>
<th>medindication27</th>
<th>meddose27</th>
<th>medroute27</th>
<th>medstartdate27</th>
<th>medenddate27</th>
<th>medname28</th>
<th>medindication28</th>
<th>meddose28</th>
<th>medroute28</th>
<th>medstartdate28</th>
<th>medenddate28</th>
<th>medname29</th>
<th>medindication29</th>
<th>meddose29</th>
<th>medroute29</th>
<th>medstartdate29</th>
<th>medenddate29</th>
<th>medname30</th>
<th>medindication30</th>
<th>meddose30</th>
<th>medroute30</th>
<th>medstartdate30</th>
<th>medenddate30</th>
<th>pname</th>
<th>mname</th>
<th>lmark</th>
<th>tel</th>
<th>group_</th>
<th>district</th>
<th>cluster</th>
<th>vname</th>
<th>compno</th>
<th>rown</th>



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
<td> <?php echo  $counter  ; ?></td>                       
<td> <?php echo $row['pid'] ; ?></td>
<td> <?php echo $row['dov'] ; ?></td>
<td> <?php echo $row['med'] ; ?></td>
<td> <?php echo $row['medname1'] ; ?></td>
<td> <?php echo $row['medindication1'] ; ?></td>
<td> <?php echo $row['meddose1'] ; ?></td>
<td> <?php echo $row['medroute1'] ; ?></td>
<td> <?php echo $row['medstartdate1'] ; ?></td>
<td> <?php echo $row['medenddate1'] ; ?></td>
<td> <?php echo $row['medname2'] ; ?></td>
<td> <?php echo $row['medindication2'] ; ?></td>
<td> <?php echo $row['meddose2'] ; ?></td>
<td> <?php echo $row['medroute2'] ; ?></td>
<td> <?php echo $row['medstartdate2'] ; ?></td>
<td> <?php echo $row['medenddate2'] ; ?></td>
<td> <?php echo $row['medname3'] ; ?></td>
<td> <?php echo $row['medindication3'] ; ?></td>
<td> <?php echo $row['meddose3'] ; ?></td>
<td> <?php echo $row['medroute3'] ; ?></td>
<td> <?php echo $row['medstartdate3'] ; ?></td>
<td> <?php echo $row['medenddate3'] ; ?></td>
<td> <?php echo $row['medname4'] ; ?></td>
<td> <?php echo $row['medindication4'] ; ?></td>
<td> <?php echo $row['meddose4'] ; ?></td>
<td> <?php echo $row['medroute4'] ; ?></td>
<td> <?php echo $row['medstartdate4'] ; ?></td>
<td> <?php echo $row['medenddate4'] ; ?></td>
<td> <?php echo $row['medname5'] ; ?></td>
<td> <?php echo $row['medindication5'] ; ?></td>
<td> <?php echo $row['meddose5'] ; ?></td>
<td> <?php echo $row['medroute5'] ; ?></td>
<td> <?php echo $row['medstartdate5'] ; ?></td>
<td> <?php echo $row['medenddate5'] ; ?></td>
<td> <?php echo $row['medname6'] ; ?></td>
<td> <?php echo $row['medindication6'] ; ?></td>
<td> <?php echo $row['meddose6'] ; ?></td>
<td> <?php echo $row['medroute6'] ; ?></td>
<td> <?php echo $row['medstartdate6'] ; ?></td>
<td> <?php echo $row['medenddate6'] ; ?></td>
<td> <?php echo $row['medname7'] ; ?></td>
<td> <?php echo $row['medindication7'] ; ?></td>
<td> <?php echo $row['meddose7'] ; ?></td>
<td> <?php echo $row['medroute7'] ; ?></td>
<td> <?php echo $row['medstartdate7'] ; ?></td>
<td> <?php echo $row['medenddate7'] ; ?></td>
<td> <?php echo $row['medname8'] ; ?></td>
<td> <?php echo $row['medindication8'] ; ?></td>
<td> <?php echo $row['meddose8'] ; ?></td>
<td> <?php echo $row['medroute8'] ; ?></td>
<td> <?php echo $row['medstartdate8'] ; ?></td>
<td> <?php echo $row['medenddate8'] ; ?></td>
<td> <?php echo $row['medname9'] ; ?></td>
<td> <?php echo $row['medindication9'] ; ?></td>
<td> <?php echo $row['meddose9'] ; ?></td>
<td> <?php echo $row['medroute9'] ; ?></td>
<td> <?php echo $row['medstartdate9'] ; ?></td>
<td> <?php echo $row['medenddate9'] ; ?></td>
<td> <?php echo $row['medname10'] ; ?></td>
<td> <?php echo $row['medindication10'] ; ?></td>
<td> <?php echo $row['meddose10'] ; ?></td>
<td> <?php echo $row['medroute10'] ; ?></td>
<td> <?php echo $row['medstartdate10'] ; ?></td>
<td> <?php echo $row['medenddate10'] ; ?></td>
<td> <?php echo $row['medname11'] ; ?></td>
<td> <?php echo $row['medindication11'] ; ?></td>
<td> <?php echo $row['meddose11'] ; ?></td>
<td> <?php echo $row['medroute11'] ; ?></td>
<td> <?php echo $row['medstartdate11'] ; ?></td>
<td> <?php echo $row['medenddate11'] ; ?></td>
<td> <?php echo $row['medname12'] ; ?></td>
<td> <?php echo $row['medindication12'] ; ?></td>
<td> <?php echo $row['meddose12'] ; ?></td>
<td> <?php echo $row['medroute12'] ; ?></td>
<td> <?php echo $row['medstartdate12'] ; ?></td>
<td> <?php echo $row['medenddate12'] ; ?></td>
<td> <?php echo $row['medname13'] ; ?></td>
<td> <?php echo $row['medindication13'] ; ?></td>
<td> <?php echo $row['meddose13'] ; ?></td>
<td> <?php echo $row['medroute13'] ; ?></td>
<td> <?php echo $row['medstartdate13'] ; ?></td>
<td> <?php echo $row['medenddate13'] ; ?></td>
<td> <?php echo $row['medname14'] ; ?></td>
<td> <?php echo $row['medindication14'] ; ?></td>
<td> <?php echo $row['meddose14'] ; ?></td>
<td> <?php echo $row['medroute14'] ; ?></td>
<td> <?php echo $row['medstartdate14'] ; ?></td>
<td> <?php echo $row['medenddate14'] ; ?></td>
<td> <?php echo $row['medname15'] ; ?></td>
<td> <?php echo $row['medindication15'] ; ?></td>
<td> <?php echo $row['meddose15'] ; ?></td>
<td> <?php echo $row['medroute15'] ; ?></td>
<td> <?php echo $row['medstartdate15'] ; ?></td>
<td> <?php echo $row['medenddate15'] ; ?></td>
<td> <?php echo $row['medname16'] ; ?></td>
<td> <?php echo $row['medindication16'] ; ?></td>
<td> <?php echo $row['meddose16'] ; ?></td>
<td> <?php echo $row['medroute16'] ; ?></td>
<td> <?php echo $row['medstartdate16'] ; ?></td>
<td> <?php echo $row['medenddate16'] ; ?></td>
<td> <?php echo $row['medname17'] ; ?></td>
<td> <?php echo $row['medindication17'] ; ?></td>
<td> <?php echo $row['meddose17'] ; ?></td>
<td> <?php echo $row['medroute17'] ; ?></td>
<td> <?php echo $row['medstartdate17'] ; ?></td>
<td> <?php echo $row['medenddate17'] ; ?></td>
<td> <?php echo $row['medname18'] ; ?></td>
<td> <?php echo $row['medindication18'] ; ?></td>
<td> <?php echo $row['meddose18'] ; ?></td>
<td> <?php echo $row['medroute18'] ; ?></td>
<td> <?php echo $row['medstartdate18'] ; ?></td>
<td> <?php echo $row['medenddate18'] ; ?></td>
<td> <?php echo $row['medname19'] ; ?></td>
<td> <?php echo $row['medindication19'] ; ?></td>
<td> <?php echo $row['meddose19'] ; ?></td>
<td> <?php echo $row['medroute19'] ; ?></td>
<td> <?php echo $row['medstartdate19'] ; ?></td>
<td> <?php echo $row['medenddate19'] ; ?></td>
<td> <?php echo $row['medname20'] ; ?></td>
<td> <?php echo $row['medindication20'] ; ?></td>
<td> <?php echo $row['meddose20'] ; ?></td>
<td> <?php echo $row['medroute20'] ; ?></td>
<td> <?php echo $row['medstartdate20'] ; ?></td>
<td> <?php echo $row['medenddate20'] ; ?></td>
<td> <?php echo $row['medname21'] ; ?></td>
<td> <?php echo $row['medindication21'] ; ?></td>
<td> <?php echo $row['meddose21'] ; ?></td>
<td> <?php echo $row['medroute21'] ; ?></td>
<td> <?php echo $row['medstartdate21'] ; ?></td>
<td> <?php echo $row['medenddate21'] ; ?></td>
<td> <?php echo $row['medname22'] ; ?></td>
<td> <?php echo $row['medindication22'] ; ?></td>
<td> <?php echo $row['meddose22'] ; ?></td>
<td> <?php echo $row['medroute22'] ; ?></td>
<td> <?php echo $row['medstartdate22'] ; ?></td>
<td> <?php echo $row['medenddate22'] ; ?></td>
<td> <?php echo $row['medname23'] ; ?></td>
<td> <?php echo $row['medindication23'] ; ?></td>
<td> <?php echo $row['meddose23'] ; ?></td>
<td> <?php echo $row['medroute23'] ; ?></td>
<td> <?php echo $row['medstartdate23'] ; ?></td>
<td> <?php echo $row['medenddate23'] ; ?></td>
<td> <?php echo $row['medname24'] ; ?></td>
<td> <?php echo $row['medindication24'] ; ?></td>
<td> <?php echo $row['meddose24'] ; ?></td>
<td> <?php echo $row['medroute24'] ; ?></td>
<td> <?php echo $row['medstartdate24'] ; ?></td>
<td> <?php echo $row['medenddate24'] ; ?></td>
<td> <?php echo $row['medname25'] ; ?></td>
<td> <?php echo $row['medindication25'] ; ?></td>
<td> <?php echo $row['meddose25'] ; ?></td>
<td> <?php echo $row['medroute25'] ; ?></td>
<td> <?php echo $row['medstartdate25'] ; ?></td>
<td> <?php echo $row['medenddate25'] ; ?></td>
<td> <?php echo $row['medname26'] ; ?></td>
<td> <?php echo $row['medindication26'] ; ?></td>
<td> <?php echo $row['meddose26'] ; ?></td>
<td> <?php echo $row['medroute26'] ; ?></td>
<td> <?php echo $row['medstartdate26'] ; ?></td>
<td> <?php echo $row['medenddate26'] ; ?></td>
<td> <?php echo $row['medname27'] ; ?></td>
<td> <?php echo $row['medindication27'] ; ?></td>
<td> <?php echo $row['meddose27'] ; ?></td>
<td> <?php echo $row['medroute27'] ; ?></td>
<td> <?php echo $row['medstartdate27'] ; ?></td>
<td> <?php echo $row['medenddate27'] ; ?></td>
<td> <?php echo $row['medname28'] ; ?></td>
<td> <?php echo $row['medindication28'] ; ?></td>
<td> <?php echo $row['meddose28'] ; ?></td>
<td> <?php echo $row['medroute28'] ; ?></td>
<td> <?php echo $row['medstartdate28'] ; ?></td>
<td> <?php echo $row['medenddate28'] ; ?></td>
<td> <?php echo $row['medname29'] ; ?></td>
<td> <?php echo $row['medindication29'] ; ?></td>
<td> <?php echo $row['meddose29'] ; ?></td>
<td> <?php echo $row['medroute29'] ; ?></td>
<td> <?php echo $row['medstartdate29'] ; ?></td>
<td> <?php echo $row['medenddate29'] ; ?></td>
<td> <?php echo $row['medname30'] ; ?></td>
<td> <?php echo $row['medindication30'] ; ?></td>
<td> <?php echo $row['meddose30'] ; ?></td>
<td> <?php echo $row['medroute30'] ; ?></td>
<td> <?php echo $row['medstartdate30'] ; ?></td>
<td> <?php echo $row['medenddate30'] ; ?></td>
<td> <?php echo $row['pname'] ; ?></td>
<td> <?php echo $row['mname'] ; ?></td>
<td> <?php echo $row['lmark'] ; ?></td>
<td> <?php echo $row['tel'] ; ?></td>
<td> <?php echo $row['group_'] ; ?></td>
<td> <?php echo $row['district'] ; ?></td>
<td> <?php echo $row['cluster'] ; ?></td>
<td> <?php echo $row['vname'] ; ?></td>
<td> <?php echo $row['compno'] ; ?></td>
<td> <?php echo $row['rown'] ; ?></td>



                        
                       
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