<?php
session_start();
session_unset();
session_destroy();
//include 'log_sqlsrv.php';
include 'local_sqlsrv_conn.php';
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
                    <form  method="POST" action="index.php" class="form-signin">
						<div class="account-logo">
                            <a href="index.html"><img src="assets\img\logo.png" alt="Logo"></a>
                        </div>
                        <div id="username" class="form-group">
                            <label>Username (KHRC Code)</label>
                            <input type="text" autofocus="" class="form-control" name="username" id="username2">
                        </div>
                        <div id="password" class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password2">
                        </div>

                        <div id= "login_btn" class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name="signin_btn" Value="Login">Login</button>
                        </div>
                        <div class="text-center register-link">
                         <a href="register.php">Create Account</a>
                        </div>
                        <br></br>
                            <div class="text-center register-link">
                         <!--<a style="font-size:18px" font-c>**PORTAL STILL UNDER DEVELOPMENT**</a>-->
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
</body>
</html>