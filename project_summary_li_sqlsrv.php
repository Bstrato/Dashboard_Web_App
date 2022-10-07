<?php
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/project_summary_for_li_query.php';
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
              <td class="tg-0lax">Exposed Male</td>
              <td class="tg-0lax">Exposed FeMale</td>
              <td class="tg-0lax">Unexposed Male</td>
              <td class="tg-0lax">Unexposed FeMale</td>
              <td class="tg-0lax">Total Male</td>
              <td class="tg-0lax">Total Female</td>
              <td class="tg-0lax">Grand Total</td>
          </tr>
        </thead> 
          

 <tbody>
          <tr>
              <td class="tg-0lax">Enrolment (Catch up)</td>
              <td class="tg-0lax"><?php echo $w7['catchup_male'];?></td>
              <td class="tg-0lax"><?php echo $w8['catchup_female'];?></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"></td>
              <td class="tg-0lax"><?php echo $w7['catchup_male'];?></td>
              <td class="tg-0lax"><?php echo $w8['catchup_female'];?></td>
              <td class="tg-0lax"><?php echo $w9['catchup_total'];?></td>
          </tr>

  <tr>
    <td class="tg-0lax">Enrolment (DTP)</td>
    <td class="tg-0lax"><?php echo $w1['dtp_male'];?></td>
    <td class="tg-0lax"><?php echo $w2['dtp_female'];?></td>
    <td class="tg-0lax"><?php echo $b1['NumberOfMale'];?></td>
    <td class="tg-0lax"><?php echo $b2['NumberOfFeMale'];?></td>
    <td class="tg-0lax"><?php echo $s1['dtp_male_totals'];?></td>
    <td class="tg-0lax"><?php echo $s2['dtp_female_totals'];?></td>
    <td class="tg-0lax"><?php echo $s3['grand_totals'];?></td>
  </tr>

  <tr>
    <td class="tg-0lax">Enrolment (EHS)</td>
    <td class="tg-0lax"><?php echo $w4['enhance_male'];?></td>
    <td class="tg-0lax"><?php echo $w5['enhance_female'];?></td>
    <td class="tg-0lax"><?php echo $b4['NumberOfMale'];?></td>
    <td class="tg-0lax"><?php echo $b5['NumberOfFeMale'];?></td>
    <td class="tg-0lax"><?php echo $s4['ehs_male_total'];?></td>
    <td class="tg-0lax"><?php echo $s5['ehs_female_total'];?></td>
    <td class="tg-0lax"><?php echo $s6['ehs_grand_total'];?></td>
  </tr>

 <tr>
    <td class="tg-0lax">AESI DTP</td>
    <td class="tg-0lax"><?php echo $j1['aesi_dtp_exposed_male'];?></td>
    <td class="tg-0lax"><?php echo $j2['aesi_dtp_exposed_female'];?></td>
    <td class="tg-0lax"><?php echo $j3['aesi_dtp_unexposed_male'];?></td>
    <td class="tg-0lax"><?php echo $j4['aesi_dtp_unexposed_female'];?></td>
    <td class="tg-0lax"><?php echo $j5['aesi_dtp_male_total'];?></td>
    <td class="tg-0lax"><?php echo $j6['aesi_dtp_female_total'];?></td>
    <td class="tg-0lax"><?php echo $j7['aesi_dtp_grand_total'];?></td>    
  </tr>

    <tr>
    <td class="tg-0lax">AESI (EHS)</td>
    <td class="tg-0lax"><?php echo $x1['aesi_Hospital_exposed_male'];?></td>
    <td class="tg-0lax"><?php echo $x2['aesi_Hospital_exposed_female'];?></td>
    <td class="tg-0lax"><?php echo $x3['aesi_Hospital_unexposed_male'];?></td>
    <td class="tg-0lax"><?php echo $x4['aesi_Hospital_unexposed_female'];?></td>
    <td class="tg-0lax"><?php echo $x5['aesi_Hospital_male_total'];?></td>
    <td class="tg-0lax"><?php echo $x6['aesi_Hospital_female_total'];?></td>
    <td class="tg-0lax"><?php echo $x7['aesi_Hospital_grand_total'];?></td>
  </tr>

    <tr>
    <td class="tg-0lax">Deaths (catch-up)</td>
    <td class="tg-0lax"><?php echo $i1['exposed_death_catchup_male'];?></td>
    <td class="tg-0lax"><?php echo $i2['exposed_death_catchup_female'];?></td>
    <td class="tg-0lax"><?php echo $i3['unexposed_death_catchup_male'];?></td>
    <td class="tg-0lax"><?php echo $i4['unexposed_death_catchup_female'];?></td>
    <td class="tg-0lax"><?php echo $i5['catchup_male_total'];?></td>
    <td class="tg-0lax"><?php echo $i6['catchup_female_total'];?></td>
    <td class="tg-0lax"><?php echo $i7['catchup_grand_total'];?></td>
  </tr>

    <tr>
    <td class="tg-0lax">Death (DTP)</td>
    <td class="tg-0lax"><?php echo $g1['exposed_death_dtp_male'];?></td>
    <td class="tg-0lax"><?php echo $g2['exposed_death_dtp_female'];?></td>
    <td class="tg-0lax"><?php echo $g3['unexposed_death_dtp_male'];?></td>
    <td class="tg-0lax"><?php echo $g4['unexposed_death_dtp_female'];?></td>
    <td class="tg-0lax"><?php echo $g5['dtp_death_male_total'];?></td>
    <td class="tg-0lax"><?php echo $g6['dtp_death_female_total'];?></td>
    <td class="tg-0lax"><?php echo $g7['dtp_grand_total'];?></td>
  </tr>


    <tr>
    <td class="tg-0lax">Deaths (EHS)</td>
    <td class="tg-0lax"><?php echo $l1['exposed_death_enh_male'];?></td>
    <td class="tg-0lax"><?php echo $l2['exposed_death_enh_female'];?></td>
    <td class="tg-0lax"><?php echo $l3['unexposed_death_enh_male'];?></td>
    <td class="tg-0lax"><?php echo $l4['unexposed_death_enh_female'];?></td>
    <td class="tg-0lax"><?php echo $l5['dtp_death_male_total'];?></td>
    <td class="tg-0lax"><?php echo $l6['dtp_death_female_total'];?></td>
    <td class="tg-0lax"><?php echo $l7['dtp_grand_total'];?></td>
  </tr>



  </tbody>



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
