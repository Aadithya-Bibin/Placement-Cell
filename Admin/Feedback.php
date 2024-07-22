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
                <h2><span>Welcome To Control Panel</span></h2>
               

                <table width="100%" border="1" bordercolor="#1CB5F1" >
                  <tr>
                    <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Seeker Name</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Feedback</strong></div></th>
                    <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Date</div></th>
                  </tr>
                  <?php
// Establish Connection with Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);

$sql = "select FeedbackId,Feedback,FeedbakDate,JobSeekerName from Feedback,JobSeeker_Reg where Feedback.JobSeekId=JobSeeker_Reg.JobSeekId order by FeedbakDate desc";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row = $result->fetch_assoc())
{
$Id=$row['FeedbackId'];
$Name=$row['JobSeekerName'];
$Feedback=$row['Feedback'];
$FeedbakDate=$row['FeedbakDate'];

?>
                  <tr>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Feedback;?></strong></div></td>
                    <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $FeedbakDate;?></strong></div></td>
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
                </table>
                
            
        </div> <!-- /content -->



</body>
</html>
