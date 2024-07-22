<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>

<title>Company Panel</title>

    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style type="text/css">



.view-box {
  background: linear-gradient(to bottom, #ffffff, #87CEEB);
  background-repeat: no-repeat;
  padding-left: 100px;
  padding-right: 100px;
  border: 1px solid #ccc;
  margin:auto;
  width: 1100px;
  height: auto;
}
    </style>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
            <div class="view-box">
                <h2><span>Welcome To Control Panel</span></h2>
               

              <table width="100%" border="0" cellspacing="4" cellpadding="4">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Personal Information</strong></td>
                  </tr>
                  <tr>
                    <td>
                    <?php
$ID=$_GET['JobSeekId'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306";
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
                    <td><strong>Highest Qualification:</strong></td>
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
                 
                </table>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Educational Qualification</strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
                      <tr>
                        <th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Degree</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>University</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Passing Year</strong></div></th>
                        <th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Percentage</strong></div></th>
                      </tr>
                      <?php
					  $ID=$_GET['JobSeekId'];
// Establish Connection with Database

$sql = "select * from JobSeeker_Education where JobSeekId='".$ID."'";
// Execute query
$result = $conn->query($sql);
$records = $result->num_rows;
// Loop through each records 
while($row = $result->fetch_assoc())
{
$Degree=$row['Degree'];
$Univ=$row['University'];
$Passing=$row['PassingYear'];
$Per=$row['Percentage'];
?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Degree;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Univ;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Passing;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Per;?></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned

?>
                      
                      <?php
// Close the connection
$conn->close();
?>
                    </table></td>
                  </tr>
                </table>
                <br>
                <br>
                <?php
				$Status=$_GET['Status'];
				if($Status!="Confirm")
				{
				?>
                <form id="form1" method="post" action="CallLatter.php?JobId=<?php echo $_GET['JobId'] ;?>&JobSeekId=<?php echo $_GET['JobSeekId'] ;?>&AppId=<?php echo $_GET['AppId'] ;?>">
                  <table width="100%" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                    <td><strong>Application Status</strong></td>
                       <td>
                        <select id="status" name="status">
                          <option value="Round 1">Round 1</option>
                          <option value="Round 2">Round 2</option>
                          <option value="Interview Call">Interview Call</option>
                          <option value="Confirm">Confirm</option>
                        </select>
                        <br>
                       </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>Call Latter Description:</strong></td>
                       <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtDesc" id="txtDesc" cols="35" rows="3"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">A value is required.</span></span></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button" id="button" value="Submit" />
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
              <?php
			  }
			  ?>
                <p align="center"><a href="Application.php"><strong>Back</strong></a></p>

            
            
        </div> <!-- /content -->


<script type="text/javascript">
<!--
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
