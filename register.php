<?php

include 'reglog_sqlsrv.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\logo.png">
    <title>KHRC-EPIMAL</title>
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    
    <script src="assets\js\jquery-3.5.1.js"></script>
    <script src="assets\js\jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id= "login" class="main-wrapper account-wrapper bg-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form  method="POST" action="register.php" class="form-signin">
						<div class="account-logo">
                            <a href="index.html"><img src="assets\img\logo.png" alt="Logo"></a>
                        </div>
                         <div id="username" class="form-group"> 
                            <span class="<?php echo $class; ?>"><?php echo $error ;?></span>
                         </div>
                        <div id="username" class="form-group">
                            <label>Enter KHRC Email</label>
                            <input type="text" autofocus="" class="form-control" name="fname" id="username2" required="required">
                        </div>

                         <div id="username" class="form-group">
                            <label>Enter KHRC Code</label>
                            <input type="text" autofocus="" class="form-control" name="lname" id="username2"  required="required">
                        </div>

                        <div id="password" class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password2"  required="required">
                        </div>
                         <div id="password" class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" id="password2"  required="required">
                        </div>
                        <div id= "login_btn" class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name="signup_btn" Value="Login">Register</button>
                        </div>

                         <div class="form-group text-center">
                            <a href="index.php">LOG IN</a>
                        </div>
                       
                    </form>
                </div>
			</div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>