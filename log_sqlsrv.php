<?php
session_start();
//include 'conn_sqlsrv.php';
include 'local_sqlsrv_conn.php';

$error=''; //Variable to Store error message;
if(isset($_POST['signin_btn'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $username=trim($_POST['username']);
 $password=md5(trim($_POST['password']));
 
 //sql query to fetch information of registerd user and finds user match.
$sql = "SELECT L.id as user_id,L.group_id,L.username as user_name,U.label as groupy FROM login L INNER JOIN user_groups U ON L.group_id = U.id WHERE pw='$password' AND username='$username' AND approve_status=1";
 
 $query= sqlsrv_query($conn, $sql);

 
 $rows = sqlsrv_has_rows($query);

 if($rows === true){

   $row   = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC);
   $user_id =$row["user_id"]; 
   $group_id=$row["group_id"]; 
   $group =$row["groupy"]; 
   $user_name=$row["user_name"]; 

   $_SESSION["user_id"] = $user_id ;
   $_SESSION["group_id"] =  $group_id ;
   $_SESSION["groupy"] = $group ;
   $_SESSION["user_name"] =  $user_name ;


   if ($_SESSION["groupy"]=="basic_user" or $_SESSION["groupy"]=="advance_user"){
                        
              header("Location: cumulative_expose_visits_sqlsrv.php"); // Redirecting to other page
}
              elseif($_SESSION["groupy"]=="special_user" or $_SESSION["groupy"]=="principal_user"){

                header("Location: dashboard_admin.php");
              
     }else{

       header("Location: dashboard.php"); // Redirecting to other page
     }                    

  
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 sqlsrv_close($conn); // Closing connection
 }
}
 
?>