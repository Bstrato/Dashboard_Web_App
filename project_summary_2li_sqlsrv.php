<?php
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/report_query_li.php';
?>

<!-- Content -->


        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">PROJECT SUMMARY REPORT</h4></br>
    

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
  


<div>
      <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
          <thead>                
              <tr>
              <td class="tg-0lax">Event Type</td>
              <td class="tg-0lax">Exposed</td>
              <td class="tg-0lax">Unexposed</td>
              <td class="tg-0lax">Total</td>
          </tr>
        </thead> 
          

 <tbody>
          <tr>
              <td class="tg-0lax">Enrolment (Catch up)</td>
              <td class="tg-0lax"><?php echo $z1['catchup_total'];?></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"><?php echo $z1['catchup_total'];?></td>
          </tr>

  <tr>
    <td class="tg-0lax">Enrolment (DTP)</td>
    <td class="tg-0lax"><?php echo $z2['dtp_exposed'];?></td>
    <td class="tg-0lax"><?php echo $z3['dtp_unexposed'];?></td>
    <td class="tg-0lax"><?php echo $z4['dtp_total'];?></td>
  </tr>

  <tr>
    <td class="tg-0lax">Enrolment (EHS)</td>
    <td class="tg-0lax"><?php echo $z5['enhance_total'];?></td>
    <td class="tg-0lax"><?php echo $z6['total'];?></td>
    <td class="tg-0lax"><?php echo $z7['grand_total'];?></td>
  </tr>



 <tr>
    <td class="tg-0lax">AESI DTP</td>
    <td class="tg-0lax"><?php echo $c1['aesi_dtp_exposed'];?></td>
    <td class="tg-0lax"><?php echo $c2['aesi_dtp_unexposed'];?></td>
    <td class="tg-0lax"><?php echo $c3['aesi_total'];?></td>
  </tr>

    <tr>
    <td class="tg-0lax">AESI (EHS)</td>
    <td class="tg-0lax"><?php echo $c4['aesi_hos_exposed'];?></td>
    <td class="tg-0lax"><?php echo $c5['aesi_hos_unexposed'];?></td>
    <td class="tg-0lax"><?php echo $c6['aesi_hos_total'];?></td>
  </tr>

    <tr>
    <td class="tg-0lax">Deaths (catch-up)</td>
    <td class="tg-0lax"><?php echo $c7['death_exposed'];?></td>
    <td class="tg-0lax"><?php echo $c8['death_unexposed'];?></td>
    <td class="tg-0lax"><?php echo $c9['total_catcchup_deaths'];?></td>
  </tr>

    <tr>
    <td class="tg-0lax">Death (DTP)</td>
    <td class="tg-0lax"><?php echo $c10['death_dtp_exposed'];?></td>
    <td class="tg-0lax"><?php echo $c11['death_dtp_unexposed'];?></td>
    <td class="tg-0lax"><?php echo $c12['total_dtp_deaths'];?></td>
  </tr>


    <tr>
    <td class="tg-0lax">Deaths (EHS)</td>
    <td class="tg-0lax"><?php echo $c13['death_hos_exposed'];?></td>
    <td class="tg-0lax"><?php echo $c14['death_hos_unexposed'];?></td>
    <td class="tg-0lax"><?php echo $c15['total_hos_deaths'];?></td>
  </tr>



  </tbody>



 <div class="sidebar-overlay" data-reff=""></div>
