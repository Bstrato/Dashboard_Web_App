<?php
$serverName = "(local)"; //serverName\instanceName
$connectionInfo = array( "Database"=>"teach", "UID"=>"", "PWD"=>"");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if( $conn ) {
     echo "Strato.";
}else{
     echo 
     "Connection could not be established.";
    die( print_r( sqlsrv_errors(), true));
}

?>


