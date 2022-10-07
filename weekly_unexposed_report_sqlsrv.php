<?php
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/weekly_unexposed_report_query.php';
?>

<!-- Content -->


        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">WEEKLY CUMULATIVE VISITS PERFORMED FOR UNEXPOSED </h4></br>
    

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
  


<div>
      <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
          </thead>
            

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
              <td class="tg-0lax">DTP</td>
              <td class="tg-0lax"><?php echo $r1['wk_v1'];?></td>
              <td class="tg-0lax"><?php echo $r2['wk_v2'];?></td>
              <td class="tg-0lax"><?php echo $r3['wk_v3'];?></td>
              <td class="tg-0lax"><?php echo $r4['wk_v4'];?></td>
              <td class="tg-0lax"><?php echo $r5['wk_v5'];?></td>
              <td class="tg-0lax"><?php echo $r6['wk_v6'];?></td>
              <td class="tg-0lax"><?php echo $r7['wk_v7'];?></td>
              <td class="tg-0lax"><?php echo $r8['wk_v8'];?></td>
              <td class="tg-0lax"><?php echo $r9['wk_v9'];?></td>
              <td class="tg-0lax"><?php echo $r10['wk_std_con_dtp'];?></td>    
          </tr>
</tbody>
</table>


<br>
<br>
  <p align = "center" style="color:black; font-size:20px;"><strong>Hospital</strong> </p>
<div>

      <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
          </thead>
            <tbody>
              <tr>
              <td class="tg-0lax">Subject</td>
              <td class="tg-0lax">Weekly</td>
              <td class="tg-0lax">OPD Done</td>
              <td class="tg-0lax">Visits Done</td>
              <td class="tg-0lax">AESI Report</td>
              <td class="tg-0lax">Study Conclusion</td>
          </tr>
          
          <tr>
              <td class="tg-0lax">Completed</td>
              <td class="tg-0lax"><?php echo $d1['wk_hos'];?></td>
              <td class="tg-0lax"><?php echo $d2['wk_opd'];?></td>
              <td class="tg-0lax"><?php echo $d3['wk_hos_visit'];?></td>
              <td class="tg-0lax"><?php echo $d4['wk_aesi'];?></td>
              <td class="tg-0lax"><?php echo $d5['wk_std_con'];?></td>
            </tr>
  </tbody>


</div>
