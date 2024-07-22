<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placement Cell</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$txtName=$_POST['txtName'];
$txtContact=$_POST['txtContact'];
$txtAddress = $_POST['txtAddress'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtArea=$_POST['txtArea'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

// Establish Connection with MYSQL
$conn = new mysqli($servername, $username, $password, $database, $port);
// Specify the query to Update Record
$sql = "Update employer_reg  set CompanyName='".$txtName."',ContactPerson='".$txtContact."',Address='".$txtAddress."',City='".$txtCity."',Email='".$txtEmail."',Mobile='".$txtMobile."',Area_Work='".$txtArea."',UserName='".$txtUser."',Password='".$txtPassword."' where EmployerId=".$txtId."";
// Execute query
$conn->query($sql);
// Close The Connection
$conn->close();
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>
