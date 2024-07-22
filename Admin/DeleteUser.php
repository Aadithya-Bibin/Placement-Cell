
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['UserId'];
	$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
	// Establish Connection with MYSQL
	$conn = new mysqli($servername, $username, $password, $database, $port);
    
	$sql = "delete from User_Master where UserId='".$Id."'";
	// execute query
	$conn->query($sql);
	// Close The Connection
	$conn->close();

	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';

?>
</body>
</html>
