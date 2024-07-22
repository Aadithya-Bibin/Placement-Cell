<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placement Cell</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$FeedBack=$_POST['txtFeedback'];
	$FDate= date('y/m/d');
	$Id=$_SESSION['ID'];
	
	
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
	
	// Establish Connection with MYSQL
	$conn = new mysqli($servername, $username, $password, $database, $port);
	// Specify the query to Insert Record
	$sql = "insert into Feedback(JobSeekId,Feedback,FeedbakDate) values('".$Id."','".$FeedBack."','".$FDate."')";
	// execute query
	$conn->query($sql);
	// Close The Connection
	$conn->close();

	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Feedback.php\';</script>';

?>
</body>
</html>
