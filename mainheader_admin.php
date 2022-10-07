<?php 

session_cache_expire(1);
$cache_expire = session_cache_expire();

session_start();
if (!isset($_SESSION["user_id"])){
    header("Location: index.php"); 
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\logo.png">
    <title>KHRC-EPIMAL003</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\fullcalendar.min.css">

    <link rel="stylesheet" type="text/css" href="assets\css\dataTables.dataTables.css">

    <link rel="stylesheet" type="text/css" href="assets\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets\plugins\morris\morris.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\5cols.css">
  

      <script src="assets\js\jquery-3.5.1.js"></script>
      <script src="assets\js\jquery.dataTables.min.js"></script>
      <script src="assets\js\dataTables.buttons.min.js"></script>
      <script src="assets\js\buttons.flash.min.js"></script>
      <script src="assets\js\jszip.min.js"></script>
      <script src="assets\js\pdfmake.min.js"></script>
      <script src="assets\js\vfs_fonts.js"></script>
      <script src="assets\js\buttons.html5.min.js"></script>
      <script src="assets\js\buttons.print.min.js"></script>


      <script type="text/javascript">
    

   
</script>

    

</head>

<body>
     <!-- Header start -->
        <div class="header">
            
            <div class="page-title-box float-left">
            </div>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                  
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="assets\img\user.jpg" class="img-fluid rounded-circle">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">T</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">L</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">G</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                       
                    </div>
                </li>
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets\img\user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span><?php echo $_SESSION["user_name"]; ?></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="index.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        

         <!-- sidebar -->
        <div class="sidebar" id="sidebar"> 

            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                         

                       <?php  if ( $_SESSION["groupy"]=="special_user"  or $_SESSION["groupy"]=="principal_user"  or $_SESSION["groupy"]=="administrative_user" 
                        ){?>
                        <li class="active">
                                <a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> DASHBOARD</a>
                        </li>
                        <p></p>  

                  <?php } ?>

                      
                      <?php  if ($_SESSION["groupy"]=="advance_user" or $_SESSION["groupy"]=="special_user"  or $_SESSION["groupy"]=="principal_user"  or $_SESSION["groupy"]=="administrative_user" 
                        ){?>
                        <ul>
                            <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span>REPORTS</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="">

                        <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span>EXPOSED</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="cumulative_expose_visits_sqlsrv.php">cumulative expected</a></li>
                                <li><a href="weekly_report_sqlsrv.php">weekly visits</a></li>
                                <li><a href="weekly_sqlsrv_expose.php">status of prt.</a></li>
                            </ul>
                        </li>

                            <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span>UNEXPOSED</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="cumulative_unexpose_visits_sqlsrv.php">cumulative expected</a></li>
                                <li><a href="weekly_unexposed_report_sqlsrv.php">weekly visits</a></li>          
                                <li><a href="weekly_sqlsrv_unexpose.php">status of prt.</a></li>                          
                            </li>                              
                            </ul>

                            <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span>OTHER</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="events_and_cases_sqlsrv.php">events & cases</a></li>
                                <li><a href="inform_query_age_sqlsrv.php">inform query age</a></li> 
                                <li><a href="inform_query_description.php">inform query list</a></li>
                                <li><a href="inform_query_trend.php">inform query trend</a></li>
                                <li><a href="inform_query_and_facilities_sqlsrv.php">inform query facilities</a></li>  
                            </li>                              
                            </ul>
                    </ul> 
                    <?php } ?>


                            
                       <?php  if ($_SESSION["groupy"]=="basic_user" or $_SESSION["groupy"]=="advance_user" or $_SESSION["groupy"]=="special_user"  or $_SESSION["groupy"]=="principal_user"  or $_SESSION["groupy"]=="administrative_user" 
                        ){?>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span> LISTINGS</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="weekly_listings_sqlsrv.php">CURRENT WEEK LISTINGS</a></li>
                                <li><a href="next_week_listings_sqlsrv.php">NEXT WEEK LISTINGS</a></li>
                                <li><a href="overdue_sqlsrv.php">OVERDUE LISTINGS</a></li>
                                <li><a href="aesi_report.php">AESI REPORT LIST</a></li>
                                <li><a href="aefi_sqlsrv.php">AEFI RTS,S OPD LIST</a></li>
                                <li><a href="rtss_hos_sqlsrv.php">AEFI RTS,S HSP</a></li>
                                <li><a href="expedited_events_sqlsrv.php">EXPEDITED EVENTS</a></li>
                                <li><a href="blank_compno_sqlsrv.php">MISSING COMP. NUMBERS</a></li>
                                <li><a href="missing_hdss_permid_sqlsrv.php">MISSING HDSS-ID</a></li>
                                <li><a href="blank_hospitalisation_sqlsrv.php">MISSING HOSPITAL FORMS</a></li>
                                <li><a href="missing_rtss_data_sqlsrv.php">MISSING RTS,S FORMS</a></li>
                                <li><a href="missing_vaccine_data_sqlsrv.php">MISSING VACCINATION DATA</a></li>
                                <li><a href="medication_enddate_odk_sqlsrv.php">MED. END DATE</a></li>
                                <li><a href="study_conclusion_needed_sqlsrv.php">STUDY CONCLUSION NEEDED</a></li>
                                <li><a href="severe_malaria_sqlsrv.php">SEVERE MALARIA LIST</a></li>
                                <li><a href="death_and_causes_sqlsrv.php">CAUSE OF DEATH LIST</a></li>
                                <li><a href="cause_of_death_unknown_sqlsrv.php">UNKNOWN CAUSE OF DEATH</a></li>
                                <li><a href="vacc_log_duplicate_sqlsrv.php">DUPLICATE VAC. LOG</a></li>
                                <li><a href="facility_visit_completed_sqlsrv.php">EXPECTED FACILITY VISIT</a></li>
                                <li><a href="odk_data_view_sqlsrv.php">ENROLMENT LIST</a></li>
                                <li><a href="study_conclusion_list_sqlsrv.php">CONCLUSION LIST</a></li>
                                <li><a href="cause_of_death_list_sqlsrv.php">LIST OF DEATHS</a></li>
                            </ul> 
                         </li>
                     <?php } ?>


                      
                       <?php  if ($_SESSION["groupy"]=="principal_user"  or $_SESSION["groupy"]=="administrative_user" 
                        ){?>
                        <li class="submenu">
                             <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span>SPECIAL REPORTS</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="lshtm_final_sqlsrv.php">LSHTM REPORT</a></li>
                                <li><a href="expected_done_lshtm_sqlsrv.php">LSHTM VISIT REPORT</a></li>
                                <li><a href="monthly_lshtm_sqlsrv.php">LSHTM RTS,S REPORT</a></li>
                                <li><a href="weekly_enrolment_sqlsrv.php">WEEKLY ENROLMENT</a>
                                <li><a href="study_exit_sqlsrv.php">STUDY EXIT REPORT</a>
                                <li><a href="project_summary_2li_sqlsrv.php">STUDY REPORT SUMMARY</a>
                                <li><a href="health_seeeking1_sqlsrv.php">HEALTH SEEKING < 6</a>
                                <li><a href="health_seeeking2_sqlsrv.php">HEALTH SEEKING > 6</a>
                                </li> 
                            </ul> 
                         </li>
                        <?php } ?>

                          <?php  if ($_SESSION["groupy"]=="principal_user"  or $_SESSION["groupy"]=="administrative_user" 
                        ){?>
                        <li class="submenu">
                             <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i> <span>APPROVALS</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="list_approvals.php">Pending Approvals</a></li>                                
                            </ul> 
                         </li>
                        <?php } ?>


                     <p></p>                   
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    <script type="text/javascript" src="assets\js\popper.min.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="assets\js\jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets\js\select2.min.js"></script>
    <script type="text/javascript" src="assets\js\moment.min.js"></script>
    <script type="text/javascript" src="assets\js\bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets\plugins\morris\morris.min.js"></script>
    <script type="text/javascript" src="assets\plugins\raphael\raphael-min.js"></script>
    <script type="text/javascript" src="assets\js\fullcalendar.min.js"></script>
    <script type="text/javascript" src="assets\js\jquery.fullcalendar.js"></script>
    <script type="text/javascript" src="assets\js\app.js"></script>


</body>

</html>