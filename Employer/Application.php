<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<?php
function getSQLValueString($mysqli, $theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
    $theValue = $mysqli->real_escape_string($theValue);

    switch ($theType) {
        case "text":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;    
        case "long":
        case "int":
            $theValue = ($theValue != "") ? intval($theValue) : "NULL";
            break;
        case "double":
            $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
            break;
        case "date":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;
        case "defined":
            $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
            break;
    }
    return $theValue;
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);

$colname_Recordset1 = "-1";
if (isset($_SESSION['Name'])) {
  $colname_Recordset1 = $_SESSION['Name'];
}

$query_Recordset1 = sprintf("SELECT JobId, JobTitle FROM job_master WHERE CompanyName = %s", GetSQLValueString($conn,$colname_Recordset1, "text"));
$Recordset1 = $conn->query($query_Recordset1);
$row_Recordset1 = $Recordset1->fetch_assoc();
$totalRows_Recordset1 =  $Recordset1->num_rows;


$query_Recordset2 = "SELECT application_master.ApplicationId, application_master.Status, jobseeker_reg.JobSeekerName, jobseeker_reg.City, jobseeker_reg.Email, application_master.JobId FROM application_master, jobseeker_reg WHERE jobseeker_reg.JobSeekId=application_master.JobSeekId";
$Recordset2 = $conn->query($query_Recordset2);
$row_Recordset2 = $Recordset2->fetch_assoc();
$totalRows_Recordset2 = $Recordset2->num_rows;
?><?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
 
    
<title>Company Login</title>

    <link rel="stylesheet" media="aural" type="text/css" href="./css/abs.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}

.siz{
  font-size:18px;
}
.push{
  margin-left:80px;
}

.sizes
{
  font-size:15px;
}
    </style>
</head>

<body>
<!-- Main -->
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    
            <div class="content-box">
                <h2><span>Welcome To Control Panel</span></h2>
               <br>

                <form class="siz" id="form1" method="post" action="Application.php">
                 
                      <strong>Select Job Title:</strong>
                      <label>
                        <select class="sizes" name="cmbTitle" id="cmbTitle">
                          <?php
do {  
?>
                          <option value="<?php echo $row_Recordset1['JobId']?>"><?php echo $row_Recordset1['JobTitle']?></option>
                          <?php
} while ($row_Recordset1 = $Recordset1->fetch_assoc());
  $rows = $Recordset1->num_rows;
  if($rows > 0) {
      mysqli_data_seek($Recordset1, 0);
	  $row_Recordset1 = $Recordset1->fetch_assoc();
  }
?>
                        </select>
                      </label>
                      <br>
                      
                      <label>
                        <input class="push" type="submit" name="button" id="button" value="View " />
                      </label>
                    
                
              </form>
           <?php 
		   if (isset($_POST['cmbTitle']))
		   {
		   $Title=$_POST['cmbTitle'];
       $sql = "SELECT application_master.ApplicationId, application_master.Status, jobseeker_reg.JobSeekerName, jobseeker_reg.Qualification, jobseeker_reg.Email, jobseeker_reg.JobSeekId,application_master.JobId FROM application_master, jobseeker_reg WHERE jobseeker_reg.JobSeekId=application_master.JobSeekId and application_master.JobId='".$Title."'";
       // Execute query
       $result = $conn->query($sql);
       $stat=1;
       // Loop through each records 
       $records = $result->num_rows;
       if($records>0)
       {
		   ?>
       <br>
       <br>
                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Course</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Email</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                     <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>View & Send</strong></div></th>
                  </tr>
                  <?php


while($row = $result->fetch_assoc())
{
$Id=$row['ApplicationId'];
$Status=$row['Status'];
$JobSeekerName=$row['JobSeekerName'];
$City=$row['Qualification'];
$Email =$row['Email'];
$JobSeekId=$row['JobSeekId'];
?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobSeekerName;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Status;?></strong></div></td>
                     <td class="style3"><div align="left" class="style9 style5"><strong></strong><a href="ViewBiodata.php?JobSeekId=<?php echo $JobSeekId; ?>&AppId=<?php echo $Id;?>&JobId=<?php echo $Title;?>&Status=<?php echo $Status;?>">View</a></div></td>
                  </tr>
                  <?php
}
       }
else{
  ?><br>
  <?php
  echo "No records found";
}
// Retrieve Number of records returned

?>
                </table>
                <?php
			
// Close the connection
$conn->close();
	}
?>
              
            
        </div> <!-- /content -->


</body>
</html>

