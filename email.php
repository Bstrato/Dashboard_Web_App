<?php
//include 'approvelog_sqlsrv.php';

/*
$fetch="SELECT login.*,approval_level.* from login JOIN approval_level ON(login.level_id=approval_level.id) 
    where login.id=$user_select;";

$query1 = sqlsrv_query($conn, $fetch);    
$query1 = sqlsrv_fetch_array($query1 , SQLSRV_FETCH_ASSOC);

$email echo $query1['fname'];

*/

$to = 'strato.bayitaa@kintampo-hrc.org';
$subject = 'Web Portal Access Granted';
$message = 'Access has been granted, you can now access the portal with your code and password'; 

$from = 'oscar.agyei@kintampo-hrc.org';

//if(isset($_POST['approve_btn'])){

mail($to, $subject, $message);

/*
//	echo 'Email has been sent successfully.';
//}

//else
{

	echo 'Unable to send email. Please try again.';
}
*/
?>