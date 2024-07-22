<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
 
    
    <title>Company Panel</title>
  
    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
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
   

            <!-- Article -->
            <div class="content-box">
                <h2><span>Welcome <?php echo $_SESSION['Name'];?></span></h2>
               <?php
$ID=$_SESSION['ID'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from Employer_Reg where EmployerId ='".$ID."'  ";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
$row = $result->fetch_assoc();
?>
                <table width="100%" border="1" cellspacing="4" cellpadding="4">
                  <tr>
                    <td><strong>Company ID:</strong></td>
                    <td><?php echo $row['EmployerId'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Company Name:</strong></td>
                    <td><?php echo $row['CompanyName'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Contact Person:</strong></td>
                    <td><?php echo $row['ContactPerson'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Address:</strong></td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td><strong>City:</strong></td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email:</strong></td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Mobile:</strong></td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Area of Work:</strong></td>
                    <td><?php echo $row['Area_Work'];?></td>
                  </tr>
                  <tr>
                    <td><strong>User Name:</strong></td>
                    <td><?php echo $row['UserName'];?></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditProfile.php?EmployerId=<?php echo $row['EmployerId']; ?>">Edit Profile</a></td>
                  </tr>
                </table>

             
            
        </div> <!-- /content -->



</body>
</html>
