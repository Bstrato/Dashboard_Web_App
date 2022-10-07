<?php
include 'mainheader.php';
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';

$table_name="enrol_list_datab";

if(isset($_POST['listings']) && isset($_POST['SEARCH'])){

    $table_name=$_POST['enrol_list_datab'];
   
   if(!empty($_POST['enrol_list_datab'])){
       
   }  
}

$dpt_list= "SELECT * from enrol_list_datab where cluster = 'exposed' AND groupings='DTP'";
$dtp_list_query=sqlsrv_query($conn, $dpt_list);

//$dov= new DateTime($row['dov']); $dov=$dov->format('Y-m-d H: i: s');
//echo $dov;

/*
$query_rep=''; 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

if (isset($_POST['remarks_type'],$_POST['filter_type']) && (!empty(trim($_POST['remarks_type'])) && !empty(trim($_POST['filter_type']))))
{
$query_init .="WHERE remarks='".$_POST['remarks_type']."' AND com='".$_POST['filter_type']."'";

}else{

  $query_all="SELECT * FROM report_exposed_datab";

}
$query_all =$query_all.$query_rep;

}

$statement_query2=sqlsrv_query($conn,$query_all);
*/
?>


<!-- Content -->
        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title">LIST OF ALL ENROLLED STUDY PARTICIPANTS UNDER THE DTP GROUP</h4></br>
    

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
          <div class="row">
           

                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">FIELD WORK CODE</label>
                    <select class="select" name="filter_type" id="filter_type">
                    <option value="">Select Code</option>
                    <?php echo $type;?>
                    </select>     
                  </div>

                  <div class="col-sm-6 col-md-3" style="margin-top:-1.0rem;">
                    <label class="focus-label">DISTRICT</label>
                    <select class="select" name="remarks_type" id="remarks_type">
                    <option value="">Select District</option>
                    <?php echo $remarks;?>
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
                <table class="table table-striped custom-table mb-0 cstable">
                  <thead>
                    <tr>
                      <th>No.</th> 
                      <th> Date of Visit</th>    
                      <th >Participant ID</th>      
                      <th >Date of Birth</th>
                      <th >Participant Name</th>
                      <th >Sex</th>
                      <th >Mothers Name</th>
                      <th >Compound Number</th>
                      <th>Village Name</th>
                      <th >Land Mark</th>
                      <th >Telephone</th>
                      <th >Distex</th>
                      <th>Distunex</th>     
                      <th >District</th>      
                      <th >Cluster</th>
                      <th >Grouping</th>
                      <th >Status ID</th>
                      <th >Mothers PermID</th>
                      <th >Child PermID</th>
                      <th >Mc Number</th>
                      <th >Mc Date</th>
                      <th >Date Entered 1</th>
                      <th >Date Entered 2</th>
                      <th >Field Woker Area</th>     
                      <th >Form</th>      
                      <th >Current Status</th>
                      <th >Cause of Death</th>
                      <th >Form Status</th>
                      <th >Site ID</th>
                      <th >Exit Date</th>
                      <th >Exit Age</th>
                      <th >Child Age</th>
                      <th >Gender</th>
                      <th >Place Enrolled</th>
                      <th >Field Worker Code</th>     
                      <th >Village</th>      
                      <th >Village Name</th>
                      <th >Round</th>
                  </thead>


                  <tbody>

                  <?php
                    $counter=0;
                    while($row=sqlsrv_fetch_array($dtp_list_query,SQLSRV_FETCH_ASSOC))
                      {

                      $counter=$counter+1;
                    ?>    

                        <tr>  
                        <td> <?php echo $counter; ?></td>


                        <td> <?php echo date_format($row['dov'],"Y-m-d H: i: s");?></td>

                        <td> <?php echo $row['pid'] ; ?></td>

                        <td> <?php echo date_format($row['dob'],"Y-m-d H: i: s"); ?></td>
                        <td> <?php echo $row['pname'] ; ?></td>
                        <td> <?php echo $row['sex'] ; ?></td>
                        <td> <?php echo $row['mname'] ; ?></td>
                        <td> <?php echo $row['compno'] ; ?></td>
                        <td> <?php echo $row['vname'] ; ?></td>
                        <td> <?php echo $row['lmark'] ; ?></td>
                        <td> <?php echo $row['tel'] ; ?></td>
                        <td> <?php echo $row['distex'] ; ?></td>
                        <td> <?php echo $row['distunex'] ; ?></td>
                        <td> <?php echo $row['district'] ; ?></td>
                        <td> <?php echo $row['cluster'] ; ?></td>
                        <td> <?php echo $row['groupings'] ; ?></td>
                        <td> <?php echo $row['statusid'] ; ?></td>
                        <td> <?php echo $row['mpermid'] ; ?></td>
                        <td> <?php echo $row['cpermid'] ; ?></td>
                        <td> <?php echo $row['mcnum'] ; ?></td>
                        <td> <?php echo $row['mcdate'] ; ?></td>
                        <td> <?php echo $row['ccnum'] ; ?></td>
                        <td> <?php echo $row['ccdate'] ; ?></td>
                        <td> <?php echo date_format($row['dateentered'],"Y-m-d H: i: s"); ?></td>
                        <td> <?php echo date_format($row['dateenteredb'],"Y-m-d H: i: s"); ?></td>
                        <td> <?php echo $row['fwa'] ; ?></td>
                        <td> <?php echo $row['form'] ; ?></td>
                        <td> <?php echo $row['current_status'] ; ?></td>
                        <td> <?php echo $row['cause_of_death'] ; ?></td>
                        <td> <?php echo $row['Form_status'] ; ?></td>
                        <td> <?php echo $row['siteid'] ; ?></td>
                        <td> <?php echo $row['exit_date'] ; ?></td>
                        <td> <?php echo $row['exit_age_yrs'] ; ?></td>
                        <td> <?php echo $row['child_age'] ; ?></td>
                        <td> <?php echo $row['gender'] ; ?></td>
                        <td> <?php echo $row['place_enrol'] ; ?></td>
                        <td> <?php echo $row['fwcode'] ; ?></td>
                        <td> <?php echo $row['villCode'] ; ?></td>
                        <td> <?php echo $row['village_name'] ; ?></td>
                        <td> <?php echo $row['r'] ; ?></td>
                        
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
$(document). ready(function(){

 var table = $('.cstable').DataTable();

});


</script>
