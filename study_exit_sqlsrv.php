<?php
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/study_exit_query.php';
?>

<!-- Content -->


        <div class="page-wrapper bg-wrapper">
        <div class="content">
        <div class="buy-form">
        <h4 class="page-title" align="center">SUBJECTS WHO HAVE EXITED THE STUDY</h4></br>
    

       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">        
  

<p style="color:black; font-size:20px;"><strong>Exposed</strong> </p>
<div>
      <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
          <thead>                
              <tr>
              <td class="tg-0lax">Cause of Exit</td>
              <td class="tg-0lax">Male</td>
              <td class="tg-0lax">Female</td>
              <td class="tg-0lax">Total</td>
          </tr>
          

          <tr>
              <td class="tg-0lax">Death</td>
              <td class="tg-0lax"><?php echo $r1['Male Deaths1'];?></td>
              <td class="tg-0lax"><?php echo $r2['FeMale Deaths1'];?></td>
              <td class="tg-0lax"><?php echo $r3['Total_for_Death1'];?></td>
          </tr>

  <tr>
    <td class="tg-0lax">5 years of age</td>
    <td class="tg-0lax"><?php echo $r4['Male 5 year1'];?></td>
    <td class="tg-0lax"><?php echo $r5['FeMale 5 year1'];?></td>
    <td class="tg-0lax"><?php echo $r6['Total_for_5_yrs'];?></td>
  </tr>

  <tr>
    <td class="tg-0lax">Summary</td>
    <td class="tg-0lax"><?php echo $r7['exp_male_sum'];?></td>
    <td class="tg-0lax"><?php echo $r8['exp_female_sum'];?></td>
    <td class="tg-0lax"><?php echo $r9['exp_sum_total'];?></td>
  </tr>

  </tbody>
</table>


<br>
<br>
  <p style="color:black; font-size:20px;"><strong>Unexposed</strong> </p>
<div>

      <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped custom-table mb-0  cstable">
          </thead>
            <tbody>
               <tr>
              <td class="tg-0lax">Cause of Exit</td>
              <td class="tg-0lax">Male</td>
              <td class="tg-0lax">Female</td>
              <td class="tg-0lax">Total</td>
          </tr>
          

          <tr>
              <td class="tg-0lax">Death</td>
              <td class="tg-0lax"><?php echo $r10['Male Deaths2'];?></td>
              <td class="tg-0lax"><?php echo $r12['FeMale Deaths2'];?></td>
              <td class="tg-0lax"><?php echo $r13['Total_for_Death2'];?></td>
          </tr>

  <tr>
    <td class="tg-0lax">5 years of age</td>
    <td class="tg-0lax"><?php echo $r14['Male 5 year2'];?></td>
    <td class="tg-0lax"><?php echo $r15['FeMale 5 year2'];?></td>
    <td class="tg-0lax"><?php echo $r16['Total_for_5_yrs2'];?></td>
  </tr>

  <tr>
    <td class="tg-0lax">Summary</td>
    <td class="tg-0lax"><?php echo $r17['unexp_male_sum'];?></td>
    <td class="tg-0lax"><?php echo $r18['unexp_female_sum'];?></td>
    <td class="tg-0lax"><?php echo $r19['unexp_sum_total'];?></td>
  </tr>

  </tbody>
  </table>
