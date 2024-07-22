<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUserName'];
$Question=$_POST['cmbQue'];
$Answer=$_POST['txtAnswer'];
$UserType=$_POST['rdUser'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
$conn = new mysqli($servername, $username, $password, $database, $port);

if($UserType=="Company")
{

$sql = "select * from employer_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = $conn->query($sql);
$records = $result->num_rows;
$row = $result->fetch_assoc();

if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
header("location:Employer/index.php");
} 
}
else
{
$sql = "select * from jobseeker_reg  where UserName='".$UserName."' and Question='".$Question."' and Answer='".$Answer."'";
$result = $conn->query($sql);
$records = $result->num_rows;
$row = $result->fetch_assoc();
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
header("location:JobSeeker/index.php");
} 

}
$conn->close();

?>
</body>
</html>
