<?php 
include 'mainheader.php';
//include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';
include 'model/dashboard_summary_dtp_sqlsrv.php';

?>
    

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <!-- Content -->


 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 

    <div class="page-wrapper bg-wrapper">
            <div class="content">
                <p style="color:black; font-size:20px;"><strong>EXPOSE CLUSTER</strong></p>
                <div class="row">
                    <div class="col-sm-12">
                    <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row1['exp_clust1'];?></h3>
                                <span class="widget-title2"> <a href="dtp_sqlsrv.php" style="color:white";> DTP Enrolled </a> <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
 
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3> <?php echo $row3['exp_clust3'];?></h3>
                                <span class="widget-title2"><a href="" style="color:white";>CatchUps Enrolled </a><i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                           <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i  aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3> <?php echo $row2['exp_clust2'];?></h3>
                                <span class="widget-title2"><a href="enhance.php" style="color:white";>Enhance Enrolled </a> <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row4['exp_clust4'];?></h3>
                                <span class="widget-title2">Grand Enrol. Total  <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4" text align="centre">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3> <?php echo $row5['active'];?></h3>
                                <span class="widget-title4"><a href="" style="color:white";>TOTAL ACTIVE ENROLLED </a><i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <br/>


                 <div class="row">
                    <div class="col-md-15">
                        <div class="buy-form">
                        <h4 class="page-title">SUMMARY BY GENDER FOR EXPOSE</h4>
                            <div class="table">
                                <table class="table table-striped custom-table mb-0  cstable ">
                                    <thead>
                                        <tr>
                                            <th>Group</th>
                                            <th style="min-width:110px;align-items: center;">Male</th>
                                            <th style="min-width:110px;align-items: center;">Female</th>
                                            <th style="min-width:110px;align-items: center;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tg-0lax">DTP</td>
                                            <td class="tg-0lax"><?php echo $w1['dtp_male'];?></td>
                                            <td class="tg-0lax"><?php echo $w2['dtp_female'];?></td>
                                            <td class="tg-0lax"><?php echo $w3['dtp_total'];?></td>
                                            
                                        </tr>
                                            <tr>
                                            <td class="tg-0lax">Catch Up</td>
                                            <td class="tg-0lax"><?php echo $w7['catchup_male'];?></td>
                                            <td class="tg-0lax"><?php echo $w8['catchup_female'];?></td>
                                            <td class="tg-0lax"><?php echo $w9['catchup_total'];?></td>                         
                                        </tr>
                                        <tr>
                                            <td class="tg-0lax">Enhance</td>
                                            <td class="tg-0lax"><?php echo $w4['enhance_male'];?></td>
                                            <td class="tg-0lax"><?php echo $w5['enhance_female'];?></td>
                                            <td class="tg-0lax"><?php echo $w6['enhance_total'];?></td> 
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                <p style="color:black; font-size:20px;"><strong>UNEXPOSE CLUSTER</strong></p>
                <div class="row">
                    <div class="col-sm-12">
                    <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $unexp_row1['unexp_clust1'];?></h3>
                                <span class="widget-title3"> <a href="" style="color:white";> DTP Enrolled  </a><i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">   
                                <h3><?php echo $unexp_row2['unexp_clust2'];?></h3>                         
                                <span class="widget-title3"> <a href="" style="color:white";> Enhance Enrolled </a> <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">                  
                                <h3><?php echo $unexp_row3['unexp_clust3'];?></h3>
                                <span class="widget-title3"> <a href="" style="color:white";> Grand Enrol. Total </a> <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
              <br>

                 <div class="row">   
                    <div class="col-md-15">
                        <div class="buy-form">
                          <h4 class="page-title">SUMMARY BY GENDER FOR UNEXPOSE</h4>
                            <div class="table">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Group</th>
                                            <th style="min-width:20px;align-items: center;">Male</th>
                                            <th style="min-width:20px;align-items: center;">Female</th>
                                            <th style="min-width:20px;align-items: center;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tg-0lax">DTP</td>
                                            <td class="tg-0lax"><?php echo $b1['NumberOfMale'];?></td>
                                            <td class="tg-0lax"><?php echo $b2['NumberOfFeMale'];?></td>
                                            <td class="tg-0lax"><?php echo $b3['total'];?></td>
                                            
                                        </tr>
                                            <tr>
                                            <td class="tg-0lax">Enhance</td>
                                            <td class="tg-0lax"><?php echo $b4['NumberOfMale'];?></td>
                                            <td class="tg-0lax"><?php echo $b5['NumberOfFeMale'];?></td>
                                            <td class="tg-0lax"><?php echo $b6['total'];?></td>
                                            
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                  
             

                    <div class="row">
                    <div class="col-md-15">
                        <div class="buy-form">
                        <h4 class="page-title">SUMMARY BY GENDER FOR ACTIVE AND ENHANCE GROUPS</h4>
                            <div class="table">
                                <table class="table table-striped custom-table mb-0  cstable ">
                                        <tr>
                                            <th>Group</th>
                                            <th>Male</th>
                                            <th>Female</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tg-0lax">Active</td>
                                            <td class="tg-0lax"><?php echo $a1['activemale'];?></td>
                                            <td class="tg-0lax"><?php echo $a2['activefemale'];?></td>
                                            <td class="tg-0lax"><?php echo $a3['active_total'];?></td>
                                            
                                        </tr>
                                            <tr>
                                            <td class="tg-0lax">Enhance</td>
                                            <td class="tg-0lax"><?php echo $g1['inactive_male'];?></td>
                                            <td class="tg-0lax"><?php echo $g2['inactive_female'];?></td>
                                            <td class="tg-0lax"><?php echo $g3['inactive_total'];?></td>   
                                        </tr>

                                     </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                        </div>
                    </div>
                     </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
</form>

    <!-- Content End -->

                        
