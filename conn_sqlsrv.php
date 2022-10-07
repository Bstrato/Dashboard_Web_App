<?php
$serverName = "192.168.10.90"; //serverName\instanceName
$connectionInfo = array( "Database"=>"EPIMAL003_Master", "UID"=>"strato", "PWD"=>"admin@123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br/>";
}else{
     echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}


