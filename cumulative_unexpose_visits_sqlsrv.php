<?php
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/cumulative_query_for_unexpose_visits.php';

?>

<!-- Content -->


        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">EPIMAL003 REPORT - CUMULATIVE FOR UNEXPOSE </h4></br>
    

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
     

<p style="color:black; font-size:20px;"><strong>Enrolment and Facility Visits Summary</strong></p>
<div>
        <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">


<tbody>
  <tr>
    <td class="tg-0lax">Subject</td>
    <td class="tg-0lax">DTP</td>
    <td class="tg-0lax">Ehance</td>
    <td class="tg-0lax">OPD</td>
    <td class="tg-0lax">Hospital</td>
    
  </tr>
  <tr>
    <td class="tg-0lax">Field Report</td>
    <td class="tg-0pky"><?php echo $r1['completed'];?></td>
    <td class="tg-0pky"><?php echo $r2['completed'];?></td>
    <td class="tg-0pky"><?php echo $r3['completed'];?></td>
    <td class="tg-0pky"><?php echo $r4['completed'];?></td>
  </tr>
  <tr>
    <td class="tg-0lax">C.C Forms Received</td>
    <td class="tg-0pky"><?php echo $r1['completed'];?></td>
    <td class="tg-0pky"><?php echo $r2['completed'];?></td>
    <td class="tg-0pky"><?php echo $r3['completed'];?></td>
    <td class="tg-0pky"><?php echo $r4['completed'];?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Local Data</td>
    <td class="tg-0pky"><?php echo $r1['completed'];?></td>
    <td class="tg-0pky"><?php echo $r2['completed'];?></td>
    <td class="tg-0pky"><?php echo $r3['completed'];?></td>
    <td class="tg-0pky"><?php echo $r4['completed'];?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Infom Data</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>

</tbody>


  </tr>
</tbody>
</table>


</div>
<br>

<br>




<p style="color:black; font-size:20px;"><strong>DTP Group</strong></p>

<div>
  		<div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
					</thead>
						<tbody>
  						<tr>
							<td class="tg-0lax">Subject</td>
							<td class="tg-0lax">Visit1</td>
							<td class="tg-0lax">Visit2</td>
							<td class="tg-0lax">Visit3</td>
							<td class="tg-0lax">Visit4</td>
							<td class="tg-0lax">Visit5</td>
							<td class="tg-0lax">Visit6</td>
							<td class="tg-0lax">Visit7</td>
							<td class="tg-0lax">Visit8</td>
							<td class="tg-0lax">Visit9</td>
					</tr>
					
					<tr>
    					<td class="tg-0lax">Expected</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
                        <td class="tg-0lax">6000</td>
    					
  					</tr>
  
  <tr>
    <td class="tg-0lax">Completed</td>
    <td class="tg-0lax"><?php echo $row_a['visit1'];?></td>
    <td class="tg-0lax"><?php echo $row_b['visit2'];?></td>
    <td class="tg-0lax"><?php echo $row_c['visit3'];?></td>
    <td class="tg-0lax"><?php echo $row_d['visit4'];?></td>
    <td class="tg-0lax"><?php echo $row_e['visit5'];?></td>
    <td class="tg-0lax"><?php echo $row_f['visit6'];?></td>
    <td class="tg-0lax"><?php echo $row_g['visit7'];?></td>
    <td class="tg-0lax"><?php echo $row_h['visit8'];?></td>
    <td class="tg-0lax"><?php echo $row_i['visit9'];?></td>
    
  </tr>
  
 
  <tr>
    <td class="tg-0lax">Difference</td>
    <td class="tg-0lax"><?php echo $w1['visit1_diff'];?></td>
    <td class="tg-0lax"><?php echo $w2['visit2_diff'];?></td>
    <td class="tg-0lax"><?php echo $w3['visit3_diff'];?></td>
    <td class="tg-0lax"><?php echo $w4['visit4_diff'];?></td>
    <td class="tg-0lax"><?php echo $w5['visit5_diff'];?></td>
    <td class="tg-0lax"><?php echo $w6['visit6_diff'];?></td>
    <td class="tg-0lax"><?php echo $w7['visit7_diff'];?></td>
    <td class="tg-0lax"><?php echo $w8['visit8_diff'];?></td>
    <td class="tg-0lax"><?php echo $w9['visit9_diff'];?></td>

  </tr>
</tbody>
</table>


</div>