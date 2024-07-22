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
    </style>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
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
                <option value="">Select course </option>
                <?php
                $sql="select distinct Qualification from jobseeker_reg where Status='Confirm'";
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
                <input type="submit" id="s1" name="s1">
            </form>
            <table width="100%" border="0" cellspacing="4" cellpadding="4">
                  
                  <tr>
                    <td><table width="100%" border="1" cellpadding="4" cellspacing="4" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Name</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Email</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Mobile</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Course</strong></div></th>
                         <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Arriers</strong></div></th>
                      </tr>
                      <?php

// Specify the query to execute
if(isset($_POST['s1']))
{
    $qual=$_POST['qual'];
    $sql = "select * from jobseeker_reg where Qualification='".$qual."' and Status='Confirm'";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row =  $result->fetch_assoc())
{
$Name=$row['JobSeekerName'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$Qual=$row['Qualification'];
$Arriers=$row['Supply'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qual;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Arriers;?></strong></div></td>
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
$sql = " select * from jobseeker_reg where Status='Confirm'";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row =  $result->fetch_assoc())
{
$Name=$row['JobSeekerName'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$Qual=$row['Qualification'];
$Arriers=$row['Supply'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Email;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Qual;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Arriers;?></strong></div></td>
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
