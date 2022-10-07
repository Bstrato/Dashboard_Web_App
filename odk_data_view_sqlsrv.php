<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';



$table_name="odk_data_view_datab";

if(isset($_POST['listings']) && isset($_POST['SEARCH'])){

    $table_name=$_POST['odk_data_view_datab'];
   
   if(!empty($_POST['odk_data_view_datab'])){
       
   }  
}

$cluster = '';

$cluster_query = "SELECT cluster, count(cluster) as cnt2 FROM odk_data_view_datab GROUP BY cluster ORDER BY cluster";

$cquery= sqlsrv_query($conn, $cluster_query);


while ($row = sqlsrv_fetch_array($cquery,SQLSRV_FETCH_ASSOC))
{
  
  $cluster.='<option value="'.$row['cluster'].'">'.$row['cluster'].'</option>';
}

$grouping = '';
$grouping_query = "SELECT groupings, count(groupings) as cnt2 FROM odk_data_view_datab GROUP BY groupings ORDER BY groupings";
$gquery = sqlsrv_query($conn, $grouping_query);

while ($row = sqlsrv_fetch_array($gquery, SQLSRV_FETCH_ASSOC))
{
  $grouping .='<option value="'.$row['groupings'].'">'.$row['groupings'].'</option>';
}

$district = '';
$district_query ="SELECT district, count(district) as cnt3 FROM odk_data_view_datab GROUP BY district ORDER BY district";
$dquery=sqlsrv_query($conn, $district_query);

while ($row = sqlsrv_fetch_array($dquery, SQLSRV_FETCH_ASSOC))
{
  $district .='<option value="'.$row['district'].'">'.$row['district'].'</option>';
}


$query_all="SELECT * FROM odk_data_view_datab";

$query_init=''; 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

if (isset($_POST['filter_cluster'],$_POST['filter_grouping'], $_POST['filter_district']) && (!empty(trim($_POST['filter_cluster'])) && !empty(trim($_POST['filter_grouping'])) && !empty(trim($_POST['filter_district']))))
{
  $query_init .=" WHERE cluster='".$_POST['filter_cluster']."' AND groupings='".$_POST['filter_grouping']."' AND district='".$_POST['filter_district']."'";

}else{


  $query_all="SELECT * FROM odk_data_view_datab";
}


$query_all =$query_all.$query_init;

}

$statement_query2=sqlsrv_query($conn,$query_all);

?>



<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title">ENROLMENT LIST</h4>
      


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
<th>date_enrol</th>
<th>pname</th>
<th>dob</th>
<th>mname</th>
<th>mpermid</th>
<th>cpermid</th>
<th>mcnum</th>
<th>mcdate</th>
<th>ccnum</th>
<th>ccdate</th>
<th>sex</th>
<th>pref</th>
<th>lang</th>
<th>district</th>
<th>vname</th>
<th>compno</th>
<th>cluster</th>
<th>groupings</th>
<th>lmark</th>
<th>tel</th>
<th>fwcode</th>
<th>exit_date</th>
<th>exit_age_yrs</th>
<th>villCode</th>
<th>village_name</th>
<th>penta1</th>
<th>penta2</th>
<th>penta3</th>
<th>rtss1</th>
<th>rtss2</th>
<th>rtss3</th>
<th>rtss4</th>
<th>bcg</th>
<th>hepab0</th>
<th>polio0</th>
<th>polio1</th>
<th>polio2</th>
<th>polio3</th>
<th>pnuemo1</th>
<th>pnuemo2</th>
<th>pnuemo3</th>
<th>rotav1</th>
<th>rotav2</th>
<th>rotav3</th>
<th>measles1</th>
<th>measles2</th>
<th>mena1</th>
<th>vitamina1</th>
<th>vitamina2</th>
<th>vitamina3</th>
<th>yellow1</th>
<th>yellow2</th>
<th>visit1</th>
<th>visit2</th>
<th>visit3</th>
<th>visit4</th>
<th>visit5</th>
<th>visit6</th>
<th>visit7</th>
<th>visit8</th>
<th>visit9</th>
<th>reason</th>
<th>dove</th>
<th>last_visits</th>
<th>freq_</th>
<th>no_use_bednet_</th>
<th>netnew_less1yr_</th>
<th>impregnated_</th>
<th>net_torn_</th>
<th>net_comment_</th>
<th>check_</th>
<th>opd1</th>
<th>opd2</th>
<th>opd3</th>
<th>opd4</th>
<th>opd5</th>
<th>opd6</th>
<th>opd7</th>
<th>opd8</th>
<th>opd9</th>
<th>opd10</th>
<th>opd11</th>
<th>opd12</th>
<th>opd13</th>
<th>opd14</th>
<th>opd15</th>
<th>opd16</th>
<th>opd17</th>
<th>opd18</th>
<th>opd19</th>
<th>opd20</th>
<th>opd21</th>
<th>opd22</th>
<th>opd23</th>
<th>opd24</th>
<th>opd25</th>
<th>opd26</th>
<th>opd27</th>
<th>opd28</th>
<th>opd29</th>
<th>opd30</th>
<th>opd31</th>
<th>opd32</th>
<th>opd33</th>
<th>opd34</th>
<th>opd35</th>
<th>opd36</th>
<th>opd37</th>
<th>opd38</th>
<th>opd39</th>
<th>opd40</th>
<th>opd41</th>
<th>opd42</th>
<th>opd43</th>
<th>opd44</th>
<th>opd45</th>
<th>opd46</th>
<th>opd47</th>
<th>opd48</th>
<th>opd49</th>
<th>opd50</th>
<th>hosp1</th>
<th>hosp2</th>
<th>hosp3</th>
<th>hosp4</th>
<th>hosp5</th>
<th>hosp6</th>
<th>hosp7</th>
<th>hosp8</th>
<th>hosp9</th>
<th>hosp10</th>
<th>hosp11</th>
<th>hosp12</th>
<th>hosp13</th>
<th>hosp14</th>
<th>hosp15</th>
<th>hosp16</th>
<th>hosp17</th>
<th>hosp18</th>
<th>hosp19</th>
<th>hosp20</th>
<th>hosp21</th>
<th>hosp22</th>
<th>hosp23</th>
<th>hosp24</th>
<th>hosp25</th>
<th>hosp26</th>
<th>hosp27</th>
<th>hosp28</th>
<th>hosp29</th>
<th>hosp30</th>


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
<td> <?php echo $row['date_enrol'] ; ?></td>
<td> <?php echo $row['pname'] ; ?></td>
<td> <?php echo $row['dob'] ; ?></td>
<td> <?php echo $row['mname'] ; ?></td>
<td> <?php echo $row['mpermid'] ; ?></td>
<td> <?php echo $row['cpermid'] ; ?></td>
<td> <?php echo $row['mcnum'] ; ?></td>
<td> <?php echo $row['mcdate'] ; ?></td>
<td> <?php echo $row['ccnum'] ; ?></td>
<td> <?php echo $row['ccdate'] ; ?></td>
<td> <?php echo $row['sex'] ; ?></td>
<td> <?php echo $row['pref'] ; ?></td>
<td> <?php echo $row['lang'] ; ?></td>
<td> <?php echo $row['district'] ; ?></td>
<td> <?php echo $row['vname'] ; ?></td>
<td> <?php echo $row['compno'] ; ?></td>
<td> <?php echo $row['cluster'] ; ?></td>
<td> <?php echo $row['groupings'] ; ?></td>
<td> <?php echo $row['lmark'] ; ?></td>
<td> <?php echo $row['tel'] ; ?></td>
<td> <?php echo $row['fwcode'] ; ?></td>
<td> <?php echo $row['exit_date'] ; ?></td>
<td> <?php echo $row['exit_age_yrs'] ; ?></td>
<td> <?php echo $row['villCode'] ; ?></td>
<td> <?php echo $row['village_name'] ; ?></td>
<td> <?php echo $row['penta1'] ; ?></td>
<td> <?php echo $row['penta2'] ; ?></td>
<td> <?php echo $row['penta3'] ; ?></td>
<td> <?php echo $row['rtss1'] ; ?></td>
<td> <?php echo $row['rtss2'] ; ?></td>
<td> <?php echo $row['rtss3'] ; ?></td>
<td> <?php echo $row['rtss4'] ; ?></td>
<td> <?php echo $row['bcg'] ; ?></td>
<td> <?php echo $row['hepab0'] ; ?></td>
<td> <?php echo $row['polio0'] ; ?></td>
<td> <?php echo $row['polio1'] ; ?></td>
<td> <?php echo $row['polio2'] ; ?></td>
<td> <?php echo $row['polio3'] ; ?></td>
<td> <?php echo $row['pnuemo1'] ; ?></td>
<td> <?php echo $row['pnuemo2'] ; ?></td>
<td> <?php echo $row['pnuemo3'] ; ?></td>
<td> <?php echo $row['rotav1'] ; ?></td>
<td> <?php echo $row['rotav2'] ; ?></td>
<td> <?php echo $row['rotav3'] ; ?></td>
<td> <?php echo $row['measles1'] ; ?></td>
<td> <?php echo $row['measles2'] ; ?></td>
<td> <?php echo $row['mena1'] ; ?></td>
<td> <?php echo $row['vitamina1'] ; ?></td>
<td> <?php echo $row['vitamina2'] ; ?></td>
<td> <?php echo $row['vitamina3'] ; ?></td>
<td> <?php echo $row['yellow1'] ; ?></td>
<td> <?php echo $row['yellow2'] ; ?></td>
<td> <?php echo $row['visit1'] ; ?></td>
<td> <?php echo $row['visit2'] ; ?></td>
<td> <?php echo $row['visit3'] ; ?></td>
<td> <?php echo $row['visit4'] ; ?></td>
<td> <?php echo $row['visit5'] ; ?></td>
<td> <?php echo $row['visit6'] ; ?></td>
<td> <?php echo $row['visit7'] ; ?></td>
<td> <?php echo $row['visit8'] ; ?></td>
<td> <?php echo $row['visit9'] ; ?></td>
<td> <?php echo $row['reason'] ; ?></td>
<td> <?php echo $row['dove'] ; ?></td>
<td> <?php echo $row['last_visits'] ; ?></td>
<td> <?php echo $row['freq_'] ; ?></td>
<td> <?php echo $row['no_use_bednet_'] ; ?></td>
<td> <?php echo $row['netnew_less1yr_'] ; ?></td>
<td> <?php echo $row['impregnated_'] ; ?></td>
<td> <?php echo $row['net_torn_'] ; ?></td>
<td> <?php echo $row['net_comment_'] ; ?></td>
<td> <?php echo $row['check_'] ; ?></td>
<td> <?php echo $row['opd1'] ; ?></td>
<td> <?php echo $row['opd2'] ; ?></td>
<td> <?php echo $row['opd3'] ; ?></td>
<td> <?php echo $row['opd4'] ; ?></td>
<td> <?php echo $row['opd5'] ; ?></td>
<td> <?php echo $row['opd6'] ; ?></td>
<td> <?php echo $row['opd7'] ; ?></td>
<td> <?php echo $row['opd8'] ; ?></td>
<td> <?php echo $row['opd9'] ; ?></td>
<td> <?php echo $row['opd10'] ; ?></td>
<td> <?php echo $row['opd11'] ; ?></td>
<td> <?php echo $row['opd12'] ; ?></td>
<td> <?php echo $row['opd13'] ; ?></td>
<td> <?php echo $row['opd14'] ; ?></td>
<td> <?php echo $row['opd15'] ; ?></td>
<td> <?php echo $row['opd16'] ; ?></td>
<td> <?php echo $row['opd17'] ; ?></td>
<td> <?php echo $row['opd18'] ; ?></td>
<td> <?php echo $row['opd19'] ; ?></td>
<td> <?php echo $row['opd20'] ; ?></td>
<td> <?php echo $row['opd21'] ; ?></td>
<td> <?php echo $row['opd22'] ; ?></td>
<td> <?php echo $row['opd23'] ; ?></td>
<td> <?php echo $row['opd24'] ; ?></td>
<td> <?php echo $row['opd25'] ; ?></td>
<td> <?php echo $row['opd26'] ; ?></td>
<td> <?php echo $row['opd27'] ; ?></td>
<td> <?php echo $row['opd28'] ; ?></td>
<td> <?php echo $row['opd29'] ; ?></td>
<td> <?php echo $row['opd30'] ; ?></td>
<td> <?php echo $row['opd31'] ; ?></td>
<td> <?php echo $row['opd32'] ; ?></td>
<td> <?php echo $row['opd33'] ; ?></td>
<td> <?php echo $row['opd34'] ; ?></td>
<td> <?php echo $row['opd35'] ; ?></td>
<td> <?php echo $row['opd36'] ; ?></td>
<td> <?php echo $row['opd37'] ; ?></td>
<td> <?php echo $row['opd38'] ; ?></td>
<td> <?php echo $row['opd39'] ; ?></td>
<td> <?php echo $row['opd40'] ; ?></td>
<td> <?php echo $row['opd41'] ; ?></td>
<td> <?php echo $row['opd42'] ; ?></td>
<td> <?php echo $row['opd43'] ; ?></td>
<td> <?php echo $row['opd44'] ; ?></td>
<td> <?php echo $row['opd45'] ; ?></td>
<td> <?php echo $row['opd46'] ; ?></td>
<td> <?php echo $row['opd47'] ; ?></td>
<td> <?php echo $row['opd48'] ; ?></td>
<td> <?php echo $row['opd49'] ; ?></td>
<td> <?php echo $row['opd50'] ; ?></td>
<td> <?php echo $row['hosp1'] ; ?></td>
<td> <?php echo $row['hosp2'] ; ?></td>
<td> <?php echo $row['hosp3'] ; ?></td>
<td> <?php echo $row['hosp4'] ; ?></td>
<td> <?php echo $row['hosp5'] ; ?></td>
<td> <?php echo $row['hosp6'] ; ?></td>
<td> <?php echo $row['hosp7'] ; ?></td>
<td> <?php echo $row['hosp8'] ; ?></td>
<td> <?php echo $row['hosp9'] ; ?></td>
<td> <?php echo $row['hosp10'] ; ?></td>
<td> <?php echo $row['hosp11'] ; ?></td>
<td> <?php echo $row['hosp12'] ; ?></td>
<td> <?php echo $row['hosp13'] ; ?></td>
<td> <?php echo $row['hosp14'] ; ?></td>
<td> <?php echo $row['hosp15'] ; ?></td>
<td> <?php echo $row['hosp16'] ; ?></td>
<td> <?php echo $row['hosp17'] ; ?></td>
<td> <?php echo $row['hosp18'] ; ?></td>
<td> <?php echo $row['hosp19'] ; ?></td>
<td> <?php echo $row['hosp20'] ; ?></td>
<td> <?php echo $row['hosp21'] ; ?></td>
<td> <?php echo $row['hosp22'] ; ?></td>
<td> <?php echo $row['hosp23'] ; ?></td>
<td> <?php echo $row['hosp24'] ; ?></td>
<td> <?php echo $row['hosp25'] ; ?></td>
<td> <?php echo $row['hosp26'] ; ?></td>
<td> <?php echo $row['hosp27'] ; ?></td>
<td> <?php echo $row['hosp28'] ; ?></td>
<td> <?php echo $row['hosp29'] ; ?></td>
<td> <?php echo $row['hosp30'] ; ?></td>


                        
                       
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