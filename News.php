<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    
    
    <title>Placement Cell</title>
    
    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style>

.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {font-weight: bold}

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
                <h2><span>Latest News</span></h2>
               

                <p>
                <table width="100%" border="1" cellpadding="4" cellspacing="2" bordercolor="#006699" >
<tr>
  <th bgcolor="#006699" class="style3">&nbsp;</th>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>News Date</strong></div></th>
</tr>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306";
$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from News_Master order by NewsDate desc";
$result = $conn->query($sql);
// Execute query

// Loop through each records 
while($row = $result->fetch_assoc())
{
$News=$row['News'];
$NewsDate=$row['NewsDate'];

?>
<tr>
  <td class="style3"><img src="design/ico_archive2.gif" alt="" width="9" height="11" /></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $News;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $NewsDate;?></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>

<?php
// Close the connection
$conn->close();
?>
</table>
    </td>
  </tr>
</table>
                </p>
                
          </div> <!-- /article -->

           
<?php
include "right.php"
?>

   
</body>
</html>
