<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
 
    
    <title>Admin Panel</title>
 
    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}

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
                <h2><span>Control Panel</span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                        <tr>
                          <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Company Name</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Contact Person</div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Detail</strong></div></th>
                        </tr>
                        <?php
// Establish Connection with Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from Employer_Reg where Status='Pending'";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row = $result->fetch_assoc())
{
$Id=$row['EmployerId'];
$Name=$row['CompanyName'];
$City=$row['City'];
$CP=$row['ContactPerson'];

?>
                        <tr>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CP;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><a href="DetailEmp.php?EmpId=<?php echo $Id;?>">Detail</a></strong></div></td>
                        </tr>
                        <?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>
                        <tr>
                          <td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                        </tr>
                        <?php
// Close the connection
$conn->close();
?>
                    </table></td>
                  </tr>
                </table>
               
          </div> <!-- /article -->

          

</body>
</html>
