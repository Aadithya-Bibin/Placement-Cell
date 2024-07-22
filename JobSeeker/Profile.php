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

    
    <title>Student Portal</title>

    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style type="text/css">
<!--
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
    
            <div class="content-box">
                <h2><span>Welcome <?php echo $_SESSION['Name'];?></span></h2>
               
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306";
$ID=$_SESSION['ID'];
// Establish Connection with Database
$conn = new mysqli($servername, $username, $password, $database, $port);
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
$row = $result->fetch_assoc();
?>
                <table width="100%" border="1" cellspacing="4" cellpadding="4">
                  <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $row['JobSeekerName'];?></td>
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
                    <td><strong>Course:</strong></td>
                    <td><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td><strong>No.of Arriers:</strong></td>
                    <td><?php echo $row['Supply'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Gender:</strong></td>
                    <td><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Birth Date:</strong></td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Resume:</strong></td>
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank"><strong>View</strong></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="Editprofile.php?JobSeekId=<?php echo $row['JobSeekId']; ?>"><strong>Edit Profile</strong></a></td>
                  </tr>
                 
                </table>
              
            
        </div> <!-- /content -->


 


</body>
</html>
