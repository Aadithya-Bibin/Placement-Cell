
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id = $_POST['txtUserId'];
$Name=$_POST['txtUserName'];
$Password=$_POST['txtPass'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
// Establish Connection with MYSQL
$conn = new mysqli($servername, $username, $password, $database, $port);
     
$sql = "Update User_Master set UserName='".$Name."',Password='".$Password."' where UserId=".$Id."";
// Execute query
$conn->query($sql);
// Close The Connection
$conn->close();
echo '<script type="text/javascript">alert("User Updated Succesfully");window.location=\'User.php\';</script>';
?>
</body>
</html>
