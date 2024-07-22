<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

	$JobId=$_GET['JobId'];
	$JobSeekId=$_SESSION['ID'];
	$Status="Apply";
	$Desc="No Message";
	
	$conn = new mysqli($servername, $username, $password, $database, $port);
	// Specify the query to Insert Record
	$sql1 = "select * from application_master where JobSeekId='".$JobSeekId."' and JobId='".$JobId."'";
	// execute query
	$result1 = $conn->query($sql1);
	$records1 = $result1->num_rows;
	// Close The Connection
	if($records1==0)
	{
	
	$sql = "insert into application_master (JobSeekId,JobId,Status,Description) values('".$JobSeekId."','".$JobId."','".$Status."','".$Desc."')";
	// execute query
	$conn->query($sql);
	// Close The Connection
	$conn->close();
	
	echo '<script type="text/javascript">alert("Succesfully Applied For Job");window.location=\'SearchJob.php\';</script>';
}
else
{
echo '<script type="text/javascript">alert("You have already Applied For Job");window.location=\'SearchJob.php\';</script>';
}
?>
</body>
</html>
