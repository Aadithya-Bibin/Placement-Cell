<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
   
    
    <title>Admin Panel </title>
    
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
              <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

               <?php
$ID=$_GET['EmpId'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306";
// Establish Connection with Database
$conn = new mysqli($servername, $username, $password, $database, $port);
// Specify the query to execute
$sql = "select * from Employer_Reg where EmployerId ='".$ID."'  ";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
$row = $result->fetch_assoc();
?>
                <table width="100%" border="1" cellspacing="4" cellpadding="4">
                  <tr>
                    <td>ID:</td>
                    <td><?php echo $row['EmployerId'];?></td>
                  </tr>
                  <tr>
                    <td>Company Name:</td>
                    <td><?php echo $row['CompanyName'];?></td>
                  </tr>
                  <tr>
                    <td>Contact Person:</td>
                    <td><?php echo $row['ContactPerson'];?></td>
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
                    <td>Area of Work:</td>
                    <td><?php echo $row['Area_Work'];?></td>
                  </tr>
                  <tr>
                    <td><strong><a href="ApprovEmp.php?EmpId=<?php echo $row['EmployerId'];?>">Approv Employer</a></strong></td>
                    <td><strong><a href="DenyEmp.php?EmpId=<?php echo $row['EmployerId'];?>">Deny Employer</a></strong></td>
                  </tr>
                </table>


            
        </div> <!-- /content -->



</body>
</html>
