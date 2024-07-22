
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
	$News=$_POST['txtNews'];
	$Date=$_POST['txtDate'];
	// Establish Connection with MYSQL
	$conn = new mysqli($servername, $username, $password, $database, $port);
    

	$sql = "insert into News_Master	(News,NewsDate) 	values('".$News."','".$Date."')";
	// execute query
	$conn->query($sql);
	// Close The Connection
	$conn->close();
	echo '<script type="text/javascript">alert("news Inserted Succesfully");window.location=\'News.php\';</script>';
	
?>
</body>
</html>
