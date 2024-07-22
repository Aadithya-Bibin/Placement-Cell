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
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #192666;
}
.style4 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #FFFFFF;
}
.style7 {font-size: small}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; }

    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

.style10 {color: #192666}

    </style>
    <style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} 

</style>
</head>
<body>

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>




</script>
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
                <h2><span>Control Panel</span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="27" bgcolor="#A0B9F3"><span class="style4 style10">Create News</span></td>
                  </tr>
                  <tr>
                    <td height="26"><form id="form1" method="post" action="InsertNews.php">
                        <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="36"><span class="style9">News:</span></td>
                            <td><span id="sprytextfield1">
                              <label>
                              <input type="textarea" name="txtNews" id="txtNews" />
                              </label>
                              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td height="35"><span class="style9">News Date:</span></td>
                            <td><span id="sprytextfield2">
                              <label>
                              <input type="date" placeholder="Date"   name="txtDate" id="txtDate" />
                              </label>
                              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><label>
                              <input type="submit" name="button" id="button" value="Submit" />
                            </label></td>
                          </tr>
</table>
                    </form></td>
                  </tr>
                  <tr>
                    <td height="25" bgcolor="#A0B9F3"><span class="style3">News List</span></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                        <tr>
                          <th height="32" bgcolor="#1CB5F1"><div align="left" class="style12 style13 style7 style8">Id</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">News</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Date</div></th>
                          <th height="32" bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Edit</div></th>
                          <th bgcolor="#1CB5F1"><div align="left" class="style11 style7 style8">Delete</div></th>
                        </tr>
                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
// Establish Connection with Database
$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from News_Master order by NewsDate";
// Execute query
$result = $conn->query($sql);
// Loop through each records 
while($row = $result->fetch_assoc())
{
$Id=$row['NewsId'];
$News=$row['News'];
$NewsDate=$row['NewsDate'];
?>
                        <tr>
                          <td><div align="left" class="style11 style7 style8"><?php echo $Id;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><?php echo $News;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><?php echo $NewsDate;?></div></td>
                          <td><div align="left" class="style11 style7 style8"><a href="EditNews.php?NewsId=<?php echo $Id;?>">Edit</a></div></td>
                          <td><div align="left" class="style11 style7 style8"><a href="DeleteNews.php?NewsId=<?php echo $Id;?>">Delete</a></div></td>
                        </tr>
                        <?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>
                        <tr>
                          <td colspan="5"><div align="left" class="style11 style7 style8"><?php echo "Total ".$records." Records"; ?> </div></td>
                        </tr>
                        <?php
// Close the connection
$conn->close();
?>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="26"><form method="post" action="InsertNews.php">
                      <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
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
