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
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }

    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

.style11 {color: #192666}

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
                <h2><span>Control Panel</a></span></h2>
               

                <table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="33" bgcolor="#A0B9F3"><span class="style10 style11">Edit Record</span></td>
                  </tr>
                  <tr>
                    <td><?php
$Id=$_GET['UserId'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

// Establish Connection with Database
$conn = new mysqli($servername, $username, $password, $database, $port);
   
$sql = "select * from User_Master where UserId=".$Id."";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row = $result->fetch_assoc())
{
$Id=$row['UserId'];
$Name=$row['UserName'];
$Password=$row['Password'];
}
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                            <tr>
                              <td height="32"><span class="style8">User Id</span></td>
                              <td><span id="sprytextfield1">
                                <label>
                                <input name="txtUserId" type="text" id="txtUserId" value="<?php echo $Id;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">User Name:</span></td>
                              <td><span id="sprytextfield2">
                                <label>
                                <input name="txtUserName" type="text" id="txtUserName" value="<?php echo $Name;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td height="36"><span class="style8">Password:</span></td>
                              <td><span id="sprytextfield3">
                                <label>
                                <input name="txtPass" type="password" id="txtPass" value="<?php echo $Password;?>" />
                                </label>
                                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="submit" value="Update Record" /></td>
                            </tr>
</table>
                        </form>
                        <?php
// Close the connection
$conn->close();
?>
                        <form method="post" action="UpdateUser.php">
                          <table width="100%" border="0">
                          </table>
                        </form></td>
                  </tr>
                </table>
                
            
        </div> <!-- /content -->



<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
