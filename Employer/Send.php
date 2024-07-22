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
$port = "3307"; 

$conn = new mysqli($servername, $username, $password, $database, $port);
$Id = $_GET['Id'];
$Email = $_GET['Email'];

$sql = "Update Application_Master set Status='Call Latter Send' where ApplicationId=".$Id."";
// Execute query
$conn->query($sql);
// Close The Connection
$conn->close();
echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'Application.php\';</script>';
?>
</body>
</html>
