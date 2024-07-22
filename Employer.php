<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    
    
    <title>Placement Cell</title>
   
    
   
    <link rel="stylesheet" type="text/css" href="./css/bs.css" />
    <style type="text/css">

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
    

            <!-- Article -->
            <div class="content-box">
                <h2><span>Companies</span></h2>
               

                <p>
                
              <table width="100%" border="1" cellpadding="4" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Area of Work</strong></div></th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

/*include "sqldb.php";*/

$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from Employer_Reg where Status='Confirm'";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row = $result->fetch_assoc())
{
$CompanyName=$row['CompanyName'];
$ContactPerson=$row['Area_Work'];
$Email=$row['Email'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $CompanyName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $ContactPerson;?></strong></div></td>
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
<!--
                <div align="center"><a href="EmployerReg.php"><strong>New Company? Register Here</strong></a>    
                  </div>   -->
             
          </div> <!-- /article -->

          

<?php
include "right.php"
?>

    

</body>
</html>
