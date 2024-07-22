
<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?><?xml version="1.0"?>
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
.tab{
  font-size:18px;
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
    
            <!-- Article -->
            <div class="content-box">
                <h2><span>Welcome <?php echo $_SESSION['Name'];?></span></h2>
               

                <table class="tab" width="100%" border="0" cellspacing="6" cellpadding="6">
                 
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Posted Job </strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Job Title</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Vacancy</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Qualification</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Description</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Update</div></th>

                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from job_Master where CompanyName='".$_SESSION['Name']."'";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row = $result->fetch_assoc())
{
$Id=$row['JobId'];
$JobTitle=$row['JobTitle'];
$Vacancy=$row['Vacancy'];
$MinQualification=$row['MinQualification'];
$Description =$row['Description'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $JobTitle;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Vacancy;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $MinQualification;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Description;?></strong></div></td>
                      
                            <td class="style3"><div align="left" class="style9 style5"><strong><a href="testmanage.php?JobId=<?php echo $Id;?>">Update</a></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteJob.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
$conn->close();
?>
                    </table></td>
                  </tr>
                </table>
                
            
        </div> <!-- /content -->




</body>
</html>
