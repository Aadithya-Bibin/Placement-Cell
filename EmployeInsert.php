<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placement Cell</title>
</head>

<body>
<?php

	$CompnayName=$_POST['txtName'];
	$ContactPerson=$_POST['txtPerson'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Area=$_POST['txtAreaWork'];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$CPassword=$_POST['CPassword'];
	$UserType="Employer";
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];

	$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
$conn = new mysqli($servername, $username, $password, $database, $port);

$test="select UserName from Employer_reg ";
$result=$conn->query($test);
	$count=0;
	while($row=$result->fetch_assoc())
	{
		if($row['UserName']==$UserName)
		{
			$count=1;
		}
	}
	if($count==0)
	{
	if ($Password==$CPassword)
	{
	$sql = "insert into Employer_Reg(CompanyName,ContactPerson,Address,City,Email,Mobile,Area_Work,Status,UserName,Password,Question,Answer) values('".$CompnayName."','".$ContactPerson."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Area."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
	$conn->query($sql);
	// Close The Connection
	$conn->close();
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
	}
	else{
		echo '<script type="text/javascript">alert("Password Mismatched");window.location=\'EmployerReg.php\';</script>';
	}
}
	else{
		echo '<script type="text/javascript">alert("Username Already Exists");window.location=\'EmployerReg.php\';</script>';
	}
?>
</body>
</html>
