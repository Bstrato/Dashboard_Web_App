<?php
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/cumulative_query_for_expose_visits.php';


?>

<!-- Content -->


        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">EPIMAL003 REPORT - CUMULATIVE FOR EXPOSE </h4></br>
    

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
  


<div>
  		<div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
					</thead>
						
<p style="color:black; font-size:20px;"><strong>Enrolment and Facility Visits Summary</strong></p>
<tr>
    <td class="tg-0pky"><b>Lables</b></td>
    <td class="tg-0pky">DTP</td>
    <td class="tg-0pky">Catcu Ups</td>
    <td class="tg-0pky">Enhance</td>
    <td class="tg-0pky">OPD</td>
    <td class="tg-0pky">Hospital</td>
  </tr>
  
  <tr>
    <td class="tg-0pky">Field Report</td>
    <td class="tg-0pky"><?php echo $r1['completed'];?></td>
    <td class="tg-0pky"><?php echo $r2['completed'];?></td>
    <td class="tg-0pky"><?php echo $r3['completed'];?></td>
    <td class="tg-0pky"><?php echo $r4['completed'];?></td>
    <td class="tg-0pky"><?php echo $r5['completed'];?></td>
  </tr>
  <tr>
    <td class="tg-0pky">C.C Forms Received</td>
    <td class="tg-0pky"><?php echo $r1['completed'];?></td>
    <td class="tg-0pky"><?php echo $r2['completed'];?></td>
    <td class="tg-0pky"><?php echo $r3['completed'];?></td>
    <td class="tg-0pky"><?php echo $r4['completed'];?></td>
    <td class="tg-0pky"><?php echo $r5['completed'];?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Local Data</td>
    <td class="tg-0pky"><?php echo $r1['completed'];?></td>
    <td class="tg-0pky"><?php echo $r2['completed'];?></td>
    <td class="tg-0pky"><?php echo $r3['completed'];?></td>
    <td class="tg-0pky"><?php echo $r4['completed'];?></td>
    <td class="tg-0pky"><?php echo $r5['completed'];?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Inform Data</td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
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
              <td class="tg-0lax">Study Conclusion</td>
					</tr>
					




					<tr>
    					<td class="tg-0lax">Expected</td>
   					 	<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
    					<td class="tg-0lax">4801</td>
              <td class="tg-0lax">4801</td>
    					
  					</tr>
  <tr>
    <td class="tg-0lax">Completed</td>
    <td class="tg-0lax"><?php echo $row_a['DTP_visit1'];?></td>
    <td class="tg-0lax"><?php echo $row_b['DTP_visit2'];?></td>
    <td class="tg-0lax"><?php echo $row_c['DTP_visit3'];?></td>
    <td class="tg-0lax"><?php echo $row_d['DTP_visit4'];?></td>
    <td class="tg-0lax"><?php echo $row_e['DTP_visit5'];?></td>
    <td class="tg-0lax"><?php echo $row_f['DTP_visit6'];?></td>
    <td class="tg-0lax"><?php echo $row_g['DTP_visit7'];?></td>
    <td class="tg-0lax"><?php echo $row_h['DTP_visit8'];?></td>
    <td class="tg-0lax"><?php echo $row_i['DTP_visit9'];?></td>
    <td class="tg-0lax"><?php echo $row_j['DTP_visit10'];?></td>
  </tr>
  <tr>

  <tr>
    <td class="tg-0lax">Difference</td>
    <td class="tg-0lax"><?php echo $w1['r'];?></td>
    <td class="tg-0lax"><?php echo $w2['r'];?></td>
    <td class="tg-0lax"><?php echo $w3['r'];?></td>
    <td class="tg-0lax"><?php echo $w4['r'];?></td>
    <td class="tg-0lax"><?php echo $w5['r'];?></td>
    <td class="tg-0lax"><?php echo $w6['r'];?></td>
    <td class="tg-0lax"><?php echo $w7['r'];?></td>
    <td class="tg-0lax"><?php echo $w8['r'];?></td>
    <td class="tg-0lax"><?php echo $w9['r'];?></td>
    <td class="tg-0lax"><?php echo $w9['r'];?></td>
  </tr>
</tbody>
</table>


</div>
<br>
<br>
	<p style="color:black; font-size:20px;"><strong>Catch Ups Group</strong> </p>
 

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
              <td class="tg-0lax">Study Conclusion</td>
					</tr>
					
					<tr>
    					<td class="tg-0lax">Expected</td>
   					 	<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
    					<td class="tg-0lax">1197</td>
  					</tr>
  <tr>
    <td class="tg-0lax">Completed</td>
    <td class="tg-0lax"><?php echo $crow_a['Catch_ups_visit1'];?></td>
    <td class="tg-0lax"><?php echo $crow_b['Catch_ups_visit2'];?></td>
    <td class="tg-0lax"><?php echo $crow_c['Catch_ups_visit3'];?></td>
    <td class="tg-0lax"><?php echo $crow_d['Catch_ups_visit4'];?></td>
    <td class="tg-0lax"><?php echo $crow_e['Catch_ups_visit5'];?></td>
    <td class="tg-0lax"><?php echo $crow_f['Catch_ups_visit6'];?></td>
    <td class="tg-0lax"><?php echo $crow_g['Catch_ups_visit7'];?></td>
    <td class="tg-0lax"><?php echo $crow_h['Catch_ups_visit8'];?></td>
    <td class="tg-0lax"><?php echo $crow_i['Catch_ups_visit9'];?></td>
    <td class="tg-0lax"><?php echo $crow_j['Catch_ups_visit10'];?></td>
  </tr>
 
  <tr>
    <td class="tg-0lax">Difference</td>
    <td class="tg-0lax"><?php echo $w10['s'];?></td>
    <td class="tg-0lax"><?php echo $w20['s'];?></td>
    <td class="tg-0lax"><?php echo $w30['s'];?></td>
    <td class="tg-0lax"><?php echo $w40['s'];?></td>
    <td class="tg-0lax"><?php echo $w50['s'];?></td>
    <td class="tg-0lax"><?php echo $w60['s'];?></td>
    <td class="tg-0lax"><?php echo $w70['s'];?></td>
    <td class="tg-0lax"><?php echo $w80['s'];?></td>
    <td class="tg-0lax"><?php echo $w90['s'];?></td>
    <td class="tg-0lax"><?php echo $w90['s'];?></td>
  </tr>
</tbody>
</table>
</div>