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
$txtAddress = $_POST['txtContact'];
$txtCity=$_POST['txtCity'];
$txtEmail=$_POST['txtEmail'];
$txtMobile = $_POST['txtMobile'];
$txtQual=$_POST['txtArea'];
$txtSup=$_POST['txtSupply'];
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
$sql = "Update jobseeker_reg  set JobSeekerName='".$txtName."',Supply='".$txtSup."',Address='".$txtAddress."',City='".$txtCity."',Email='".$txtEmail."',Mobile='".$txtMobile."',Qualification='".$txtQual."',UserName='".$txtUser."',Password='".$txtPassword."' where JobSeekId=".$txtId."";
// Execute query
$conn->query($sql);
// Close The Connection
$conn->close();
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>
