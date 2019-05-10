<?php 
if(!checkFromSession())
{
	header("location:exceldownload.php");
}
function checkFromSession()
{
	session_start();
	$username=$_SESSION["session_user"];
//	print_r($_SESSION);	
	if (!$username) 
		return false;	
	else
		return true;
}
$id=$_SESSION["id"];
include "dbc9.php";
$sql="SELECT tblname,password,colnm,rephead,id,whrcond,ordby FROM users WHERE id='$id'";
$rsCat_query=mysql_query($sql);
$rsCat = mysql_fetch_array($rsCat_query);
$password=$rsCat["password"];
$tblname=$rsCat["tblname"];
$colnm=$rsCat["colnm"];
$rephead=$rsCat["rephead"];
$whrcond=$rsCat["whrcond"];
$ordby=$rsCat["ordby"];
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment;filename=table.xls");
header("Pragma: no-cache");
header("Expires: 0");
$logindate	= 		date("Y-m-d H:i:s"); 
$loginip	= 		$_SERVER['REMOTE_ADDR'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
session_start();
$username=$_SESSION["session_user"];
$event_name=$_SESSION["event_name"];

mysql_query("INSERT INTO users_logs(login_dttime,loginip,user_url,user_name,event_name)
VALUES ('$logindate','$loginip','$actual_link','$username','$event_name')");	

function display_db_table($tblname, $rephead,$colnm,$whrcond,$ordby)
{
	if ($ordby=='')
	{
		if ($whrcond=='')
		{
			$query_string = "SELECT ".$colnm." FROM ".$tblname." order by id"; 
		}
		else
		{
			$query_string = "SELECT ".$colnm." FROM ".$tblname. " where ".$whrcond." order by id"; 
		}
	}
	else
	{
		if ($whrcond=='')
		{
			$query_string = "SELECT ".$colnm." FROM ".$tblname." order by ".$ordby; 
		}
		else
		{
			$query_string = "SELECT ".$colnm." FROM ".$tblname. " where ".$whrcond." order by ".$ordby; 
		}
		
	}
	$result_id = mysql_query($query_string);
	$fields = mysql_num_fields($result_id);
	echo $rephead . "\n";
	for ($i = 0; $i < $fields; $i++) 
	{
		$data .= mysql_field_name($result_id, $i) . "\t"; 
	} 
	$data .= "\n";	
	while($row = mysql_fetch_row($result_id)) 
	{
		$line = ''; 
		foreach($row as $value) 
		{ 
		if ((!isset($value)) OR ($value == "")) 
		{ 
			$value = "\t"; 
		}
		else
		{ 
			$value = str_replace('"', '""', $value); 
			$value = '"' . $value . '"' . "\t"; 
		} 
		$line .= $value; 
	} 
	$data .= trim($line)."\n"; 
	} 
	echo $data;	
	
}
display_db_table($tblname, $rephead,$colnm,$whrcond,$ordby); 
?>