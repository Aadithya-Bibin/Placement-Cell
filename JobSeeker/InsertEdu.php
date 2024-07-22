<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$Degree=$_POST['cmbQual'];
$Uni=$_POST['txtBoard'];
$Passing=$_POST['cmbYear'];
$Per=$_POST['txtPer'];
$Id=$_SESSION['ID'];

if($Degree=="Other")
	{
		$Degree=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$conn = new mysqli($servername, $username, $password, $database, $port);
	// Specify the query to Insert Record
	$sql = "insert into JobSeeker_Education(JobSeekId,Degree,University,PassingYear,Percentage) values('".$Id."','".$Degree."','".$Uni."','".$Passing."','".$Per."')";
	// execute query
	$conn->query($sql);
	// Close The Connection
	$conn->close();
	
	echo '<script type="text/javascript">alert("Record Inserted Succesfully");window.location=\'Education.php\';</script>';

?>
</body>
</html>
