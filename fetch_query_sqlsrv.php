<?php

//include 'conn_sqlsrv.php';
include 'local_sqlsrv_conn.php';
#SQLSRV_CURSOR_KEYSET 


//$connect = new PDO("sqlsrv:Server=127.0.0.1\\DESKTOP-85V6FMQ;Database=STRA_KHRC", "sa", '');


$column=array('No.','pid','pname','mname','compno','sex','dov','dob','Lower_Limit','Duedate','Upper_Limit','village_name','remarks','lmark','tel','district','cluster','visits_','groupings','villCode','vname', 'status_x','cpermid','mpermid');

$query="SELECT * FROM Weekly_Listings_current_datab";

if (isset($_POST['filter_cluster'],$_POST['filter_grouping'], $_POST['filter_district']) && (!empty(trim($_POST['filter_cluster'])) && !empty(trim($_POST['filter_grouping'])) && !empty(trim($_POST['filter_district']))))
{
	$query .=" WHERE cluster='".$_POST['filter_cluster']."' AND groupings='".$_POST['filter_grouping']."' AND district='".$_POST['filter_district']."'";

}

if(isset($_POST['order']))
{

	$query .= ' ORDER BY '.$column[$_POST['order']['0']['column']].''.$_POST['order']['0']['dir'].'';
}
else
{
	$query .= ' ORDER BY pid DESC';
}

$query1 = '';

if($_POST['length'] != -1)
{
	$start_s=0;
	if ($_POST['start']==0) {

       $start_s=$_POST['start'];
	}else{

	   $start_s=$_POST['start']-1;

	}

	$query1 =' OFFSET '.$start_s.' ROWS FETCH NEXT '.$_POST['length'].' ROWS ONLY'; 
}


$statement= sqlsrv_query($conn,$query,array(), array( "Scrollable" =>SQLSRV_CURSOR_KEYSET));
$number_filter_row=sqlsrv_num_rows($statement);


$statement_query2=sqlsrv_query($conn,$query.$query1);

$data=array();

$counter=0;

while($row=sqlsrv_fetch_array($statement_query2,SQLSRV_FETCH_ASSOC))
{
	 $counter=$counter+1;
	 $sub_array = array($_POST['start']+$counter, $row['pid'],$row['pname'],
	 $row['mname'],
	 $row['compno'],
	 $row['sex'],
	 $row['dov'],
	 $row['dob'],
	 $row['Lower_Limit'],
	 $row['Duedate'],
	 $row['Upper_Limit'],
	 $row['village_name'],
	 $row['remarks'],
	 $row['lmark'],
	 $row['tel'],
	 $row['district'],
	 $row['cluster'],
	 $row['visits_'],
	 $row['groupings'],
	 $row['villCode'],
	 $row['vname'],
	 $row['status_x'],
	 $row['cpermid'],
     $row['mpermid']);
	
	array_push($data, $sub_array);
}

function count_all_data($conn)
{
	$query_func ="SELECT * FROM Weekly_Listings_current_datab";
	$stm = sqlsrv_query($conn,$query_func,array(), array( "Scrollable" =>SQLSRV_CURSOR_KEYSET));
	return  sqlsrv_num_rows($stm);
}

$output= array(
	'draw'	=> intval($_POST['draw']),
	'recordsTotal'=> count_all_data($conn ),
	'recordsFiltered'=> $number_filter_row,
	'data'=> $data,
	'starts'=>$_POST['start'],
	'lengths' =>$_POST['length'],
	'query_info'=>$query.$query1,
	'data_info'=>$_POST['filter_grouping'].$_POST['filter_cluster'].$_POST['filter_district']
);

 echo json_encode($output);


?>