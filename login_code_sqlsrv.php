<?php
session_start();
include 'log_sqlsrv.php';


#Login script is begin here
#If user given credential matches successfully with the data available in database then we will echo string login_success
#login_success string will go back to called Anonymous funtion $("#login").click() 
if (isset($_POST['signin_btn'])) {


    $username = sqlsrv_fectch($conn, ($_POST["username"]));
    $password = $_POST["password"];
    
    if (empty($username)) {
        array_push($errors, "Username is required");
  }
  if (empty($password)) {
        array_push($errors, " Password is required");
  }
    
    //echo $username;exit();
    if (count($errors) == 0) {
    $password = md5($password);
    $name = $username;
     // OR email='$u_name'

    $query1="SELECT * FROM login WHERE name='$name' AND pw='$password'";

     $query= sqlsrv_query($conn, $query1);
    $results = $query or die(sqlsrv_error($conn));
    $n_rows = sqlsrv_num_rows($results);
   
    //array_push($errors, $n_rows);
    if($n_rows == 1) {
      $n_rows = sqlsrv_fetch_array($results);
      $uid= $n_rows["id"];
            $status=$n_rows["status"];
      
      if ($status==0) {
        array_push($errors, "Your Account is Inactive!!");
        array_push($errors, "Contact the Administrator.");
      }else{
        $_SESSION["name"] = $n_rows["name"];
        $_SESSION["id"] = $uid;
        

        //Update last Login date
        $run_query = "UPDATE users SET lastLogin='$currentDate' WHERE id='$uid' ";

        $query= sqlsrv_query($conn, $run_query);
        
      }
    }elseif($n_rows <= 0) {
      array_push($errors, "Wrong username & password combination....!!");
    }
  }
}

?>