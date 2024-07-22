<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>

    
<title>Student Portal</title>

    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
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

            <div class="content-box">
                <h2><span>Feedback</span></h2>
               

                <table width="100%" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Give Your Feedback</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="InsertFeedback.php">
                      <br>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td>Feedback:</td>
                          <td><span id="sprytextarea1">
                            <label>
                            <textarea name="txtFeedback" id="txtFeedback" cols="35" rows="5"></textarea>
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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
