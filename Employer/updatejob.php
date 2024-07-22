<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placement Cell</title>
</head>

<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

	$txtTitle=$_POST['txtTitle'];
	$txtTotal=$_POST['txtTotal'];
	$cmbQual=$_POST['cmbQual'];
	$txtDesc=$_POST['txtDesc'];
	$Name=$_SESSION['Name'];
	if($cmbQual=="Other")
	{
	$cmbQual=$_POST['txtOther'];
	}
    $id=$_POST['jobd'];
	$conn = new mysqli($servername, $username, $password, $database, $port);
	// Specify the query to Insert Record
    $sql="update job_master set CompanyName='".$Name."',JobTitle='".$txtTitle."',Vacancy=".$txtTotal.", MinQualification='".$cmbQual."',Description='".$txtDesc."' where JobId=".$id;
	//$sql = "insert into job_master (CompanyName,JobTitle,Vacancy,MinQualification,Description) values('".$Name."','".$txtTitle."','".$txtTotal."','".$cmbQual."','".$txtDesc."')";
	// execute query
	$conn->query($sql);
	// Close The Connection
	$conn->close();
	echo '<script type="text/javascript">alert("Record Updated Succesfully");window.location=\'PostJob.php\';</script>';

?>
</body>
</html>
