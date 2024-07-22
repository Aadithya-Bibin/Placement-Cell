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
                <h2><span><a href="#">Control Panel</a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobId'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
// Establish Connection with Database
$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
$row = $result->fetch_assoc();
?>
                <table width="100%" border="1" cellspacing="4" cellpadding="4">
                 <tr>
                    <td>Id:</td>
                    <td><?php echo $row['JobSeekId'];?></td>
                  </tr>
                  <tr>
                    <td>Name:</td>
                    <td><?php echo $row['JobSeekerName'];?></td>
                  </tr>
                  <tr>
                    <td>Address:</td>
                    <td><?php echo $row['Address'];?></td>
                  </tr>
                  <tr>
                    <td>City:</td>
                    <td><?php echo $row['City'];?></td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td><?php echo $row['Email'];?></td>
                  </tr>
                  <tr>
                    <td>Mobile:</td>
                    <td><?php echo $row['Mobile'];?></td>
                  </tr>
                  <tr>
                    <td>Highest Qualification:</td>
                    <td><?php echo $row['Qualification'];?></td>
                  </tr>
                  <tr>
                    <td>No.of Arriers:</td>
                    <td><?php echo $row['Supply'];?></td>
                  </tr>
                  <tr>
                    <td>Gender:</td>
                    <td><?php echo $row['Gender'];?></td>
                  </tr>
                  <tr>
                    <td>Birth Date:</td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr>
                  <tr>
                    <td>Resume:</td>
                    <td><a href="../upload/<?php echo $row['Resume'];?>" target="_blank">View</a></td>
                  </tr>
                  <tr>
                    <td><strong><a href="ApprovJob.php?JobId=<?php echo $row['JobSeekId'];?>">Approv Student</a></strong></td>
                    <td><strong><a href="DenyJob.php?JobId=<?php echo $row['JobSeekId'];?>">Delete Student</a></strong></td>
                  </tr>
                </table>
                    </td>
                  </tr>
                </table>
                
            
        </div> <!-- /content -->


</body>
</html>
