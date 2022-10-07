<?php
session_start();
include 'conn_sqlsrv.php';
//include 'local_sqlsrv_conn.php';

$error=''; //Variable to Store error message;
$class='text-danger';
if(isset($_POST['signup_btn'])){
 if(empty($_POST['fname']) || empty($_POST['password']) || empty($_POST['cpassword']) || empty($_POST['lname'])  ){
 $error = "Username or Password is Invalid";
 }
 else
 {

 //Define $user and $pass
 $lname=trim($_POST['lname']);
 $fname=trim($_POST['fname']);
 $password=md5(trim($_POST['password']));
 $cpassword=md5(trim($_POST['cpassword']));

 if ($password!==$cpassword){

  $error = "Passwords should be the same";
 }else{

 $level_query="SELECT id from approval_level where stage_weight=1";
 $query= sqlsrv_query($conn, $level_query);
  $row   = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC);
  $level_id=$row['id'];

 //sql query to fetch information of registerd user and finds user match.
 $insert_query = "INSERT INTO login (username,fname,lname,pw,level_id,approve_status) 
 VALUES(?, ?, ?, ?, ?, ?)";
 $params = array($lname,$fname,$lname,$password,$level_id,"0");
 $insert = sqlsrv_query ($conn, $insert_query, $params);

 
 if($insert=== FALSE){
    
     $error = "Account creation failed, try again";   
            	
 }
 else
 {
 $error = "Account created succesfully , wait for approval";
 $class="text-success";

 }
 sqlsrv_close($conn); // Closing connection
 }



}

}
 
?>