<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    

<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];

include "sqldb.php";

if($UserType=="Admin"||$UserType=="admin")
{
 $conn = new mysqli($servername, $username, $password, $database, $port);
 $sql = "SELECT * FROM user_master WHERE UserName='$UserName' AND Password='$Password'";
 $result = $conn->query($sql);
 $records = $result->num_rows;
 $row = $result->fetch_assoc();
if ($records==0)
{
    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'chi.php\';</script>';
}
else
{
header("location:Admin/index.php");
} 
$conn->close();
}
else if($UserType=="Student"||$UserType=="student" )
{
    $conn = new mysqli($servername, $username, $password, $database, $port);
    $sql = "SELECT * FROM jobseeker_reg WHERE UserName='$UserName' AND Password='$Password'";
    $result = $conn->query($sql);
    $records = $result->num_rows;
    $row = $result->fetch_assoc();
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'chi.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
header("location:JobSeeker/index.php");
} 
mysql_close($con);
}
else if($UserType=="Company"||$UserType=="company")
{
$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from employer_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
$result = $conn->query($sql);
$records = $result->num_rows;
$row = $result->fetch_assoc();
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'chi.php\';</script>';
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
    echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'chi.php\';</script>'; 
}
mysql_close($con);

?>

</body>
</html>
