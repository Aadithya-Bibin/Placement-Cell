<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['txtCity'];
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Qualification=$_POST['cmbQual'];
	$Gender=$_POST['cmbGender'];	
	$BirthDate=$_POST['txtBirthDate'];
	$path1 = $_FILES["txtFile"]["name"];
	$Status="Pending";
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Cpassword=$_POST['CPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$Supply=$_POST['txtsupply'];
	$UserType="JobSeeker";
	if ($Qualification=="Other")
	{
		$Qualification=$_POST['txtOther'];
	}
	  move_uploaded_file($_FILES["txtFile"]["tmp_name"],"upload/"  .$_FILES["txtFile"]["name"]);
	// Establish Connection with MYSQL
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "job";
	$port = "3306"; 

	$conn = new mysqli($servername, $username, $password, $database, $port);

	$test="select UserName from jobseeker_reg ";
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
	
		if($Cpassword==$Password)
		{
	$sql = "insert into JobSeeker_Reg(JobSeekerName,Address,City,Email,Mobile,Qualification,Supply,Gender,BirthDate,Resume,Status,UserName,Password,Question,Answer) values('".$Name."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Qualification."','".$Supply."','".$Gender."','".$BirthDate."','".$path1."','".$Status."','".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
	
	$conn->query($sql);
	// Close The Connection
	$conn->close();
		
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Password Mismatch");window.location=\'JobSeekerReg.php\';</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("Username Already Exists");window.location=\'JobSeekerReg.php\';</script>';
	}

?>
</body>
</html>
