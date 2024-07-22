
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
 
    <link rel="stylesheet" type="text/css" href="./css/bs.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}

    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

.style3 {font-weight: bold}

.tab{
  font-size:18px;
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
               $id=$_GET['JobId'];
               
               $conn = new mysqli($servername, $username, $password, $database, $port);
               $sql = "select * from job_Master where JobId='".$id."'";
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
               }
               ?>

                <table class="tab" width="100%" border="0" cellspacing="5" cellpadding="5">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Manage Job</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="updatejob.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                          <td><strong>Job ID:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="jobd" id="jobd" readonly value='<?php echo $id?>'/>
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>  
                      <tr>
                          <td><strong>Job Title:</strong></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input type="text" name="txtTitle" id="txtTitle" value='<?php echo $JobTitle?>'/>
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Total Vacancy:</strong></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input type="text" name="txtTotal" id="txtTotal" value='<?php echo $Vacancy ?>'  />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td><strong>Qualification:</strong></td>
                          <td><select name="cmbQual" id="cmbQual">
                          <option value="<?php echo $MinQualification ?>"><?php echo $MinQualification ?></option>
                            <option value="B.C.A">B.C.A</option>
                            <option value="M.C.A">M.C.A</option>
                            <option value="B.Sc.I.T">B.Sc.I.T</option>
                            <option value="B.Sc.C.S">B.Sc.C.S</option>
                            <option value="M.Sc.I.T">M.Sc.I.T</option>
                            <option value="M.Sc.C.S">M.Sc.C.S</option>
                            <option value="M.B.A">M.B.A</option>
                            <option value="B.B.A">B.B.A</option>
                            <option value="Other">Other</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td><strong>Other:</strong></td>
                          <td><label>
                            <input type="text" name="txtOther" id="txtOther" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><strong>Description:</strong></td>
                          <td><span id="sprytextarea1">
                            <label>
                            <textarea name="txtDesc" id="txtDesc" value='<?php echo $Description ?>' cols="25" rows="3"></textarea>
                            </label>
                          <span class="textareaRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Submit" />
                          </label></td>
                        </tr>
                      </table>
                                        </form>
                    </td>
                  </tr>
                 
                </table>
                
            
        </div> <!-- /content -->



<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
