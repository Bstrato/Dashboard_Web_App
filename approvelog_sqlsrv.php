<?php


$error=''; //Variable to Store error message;
$class='text-danger';
if(isset($_POST['approve_btn'])){
 if(empty($_GET['id']) || empty($_POST['approve']) || empty($_POST['levelg']) || empty($_POST['approve1'])) {
 $error = "Please fill all forms";
 }
 else
 {


 //Define $user and $pass
 $ids=trim($_GET['id']);
 $decision=trim($_POST['approve']);
 $user_g=trim($_POST['levelg']);
 $current_level=trim($_POST['clevel']);
 $grant=trim($_POST['approve1']);


 $level_info = "SELECT * from approval_level where terminate=1 AND id=$current_level";

	$query = sqlsrv_query($conn, $level_info);

    $query_d = sqlsrv_has_rows($query);

  $status=1;


 if ($decision==1 AND $grant==1){

	 if($query_d === true){

	   $status=0;

	 }else{

	 	$current_level=$current_level+1;
	 }

}

 //sql query to fetch information of registerd user and finds user match.
 $update ="UPDATE login SET group_id=(?),level_id=(?),approve_status=(?) WHERE id=(?)";

 $params = array($user_g, $current_level, $status, $ids);

 $update_query = sqlsrv_query($conn, $update, $params);


 
 if($update_query=== FALSE){

 	  $error = "Approval failed, try again";
    
  
     
 }else
 {
     
        echo "<script>location.href = 'list_approvals.php';</script>";  

 }

 sqlsrv_close($conn); // Closing connection
 

}

}
 
?>