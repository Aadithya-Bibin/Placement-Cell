<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
 
    
    <title>Student Portal</title>

    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
table {
      border-collapse: collapse;
      border: none;
    }
    .lab{
      font-size: 18px;
      font-family:'Arial black';
    }
    select{
        height: 25px;
    }
    </style>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<body>
<!-- Main -->
<?php 
include "Header.php"
?>
<?php 
include "Rmenu.php"
?>   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);
?>
<!-- Page (2 columns) -->
   
            <div class="content-box">
              <br>
              <br>
              <form method="post">
            <select name="qual" id="qual">
                <option value="">Select Company </option>
                <?php
                $sql="select distinct CompanyName from job_master";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                ?>
                <option value="<?php echo $row['CompanyName']?>"><?php echo $row['CompanyName']?></option>
                <?php
                }
                ?>
                <br>
                <br>
                <input type="submit" id="s1" name="s1">
                <br>
                <br>

                <select name="cor" id="cor">
                <option value="">Select Course </option>
                <?php
                $sql="select distinct j.Qualification from jobseeker_reg as j,application_master as a where a.JobSeekId=j.JobSeekId";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                ?>
                <option value="<?php echo $row['Qualification']?>"><?php echo $row['Qualification']?></option>
                <?php
                }
                ?>
                <br>
                <br>
                <input type="submit" id="s2" name="s2">
                <br>
                <br>

                <select name="name" id="name">
                <option value="">Select Name </option>
                <?php
                $sql="select distinct j.JobSeekerName from jobseeker_reg as j,application_master as a where a.JobSeekId=j.JobSeekId";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                ?>
                <option value="<?php echo $row['JobSeekerName']?>"><?php echo $row['JobSeekerName']?></option>
                <?php
                }
                ?>
                <br>
                <br>
                <input type="submit" id="s3" name="s3">
            </form>
            <table width="100%" border="0" cellspacing="4" cellpadding="4">
                  
                  <tr>
                    <td><table width="100%" border="1" cellpadding="4" cellspacing="4" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Name</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Post</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Course</strong></div></th>
                      </tr>
                      <?php

// Specify the query to execute
if(isset($_POST['s1']))
{
    $qual=$_POST['qual'];
    $sql = "SELECT s.jobSeekerName,s.Qualification, j.CompanyName,j.JobTitle from jobseeker_reg as s, job_master as j,application_master as a where a.JobSeekId=s.JobSeekId and a.JobId=j.JobId and a.Status='Confirm' and j.CompanyName='".$qual."' ORDER BY JobSeekerName";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row =  $result->fetch_assoc())
{
    $Name=$row['jobSeekerName'];
    $Email=$row['CompanyName'];
    $Mobile=$row['JobTitle'];
    $Qual=$row['Qualification'];
?>
                      <tr>
                      <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qual;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>
                      <?php
// Close the connection
$conn->close();

}
else if(isset($_POST['s2']))
{
    $qual=$_POST['cor'];
    $sql = "SELECT s.jobSeekerName,s.Qualification, j.CompanyName,j.JobTitle from jobseeker_reg as s, job_master as j,application_master as a where a.JobSeekId=s.JobSeekId and a.JobId=j.JobId and a.Status='Confirm'and s.Qualification='".$qual."' ORDER BY JobSeekerName";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row =  $result->fetch_assoc())
{
    $Name=$row['jobSeekerName'];
    $Email=$row['CompanyName'];
    $Mobile=$row['JobTitle'];
    $Qual=$row['Qualification'];
?>
                      <tr>
                      <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qual;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>
                      <?php
// Close the connection
$conn->close();
}
else if(isset($_POST['s3']))
{
    $qual=$_POST['name'];
    $sql = "SELECT s.jobSeekerName,s.Qualification, j.CompanyName,j.JobTitle from jobseeker_reg as s, job_master as j,application_master as a where a.JobSeekId=s.JobSeekId and a.JobId=j.JobId and a.Status='Confirm'and s.JobSeekerName='".$qual."' ORDER BY JobSeekerName";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row =  $result->fetch_assoc())
{
    $Name=$row['jobSeekerName'];
    $Email=$row['CompanyName'];
    $Mobile=$row['JobTitle'];
    $Qual=$row['Qualification'];
?>
                      <tr>
                      <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qual;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>
                      <?php
// Close the connection
$conn->close();
}

else
{
$sql = "SELECT s.jobSeekerName,s.Qualification, j.CompanyName,j.JobTitle from jobseeker_reg as s, job_master as j,application_master as a where a.JobSeekId=s.JobSeekId and a.JobId=j.JobId and a.Status='Confirm' ORDER BY JobSeekerName";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row =  $result->fetch_assoc())
{
$Name=$row['jobSeekerName'];
$Email=$row['CompanyName'];
$Mobile=$row['JobTitle'];
$Qual=$row['Qualification'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qual;?></strong></div></td>
                         
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>
                      <?php
// Close the connection
$conn->close();
}
?>
                    </table></td>
                  </tr>
                </table>
               
            
        </div> <!-- /content -->




</body>
</html>
