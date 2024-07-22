<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<?php
function getSQLValueString($mysqli, $theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
    $theValue = $mysqli->real_escape_string($theValue);

    switch ($theType) {
        case "text":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;    
        case "long":
        case "int":
            $theValue = ($theValue != "") ? intval($theValue) : "NULL";
            break;
        case "double":
            $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
            break;
        case "date":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;
        case "defined":
            $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
            break;
    }
    return $theValue;
}


$currentPage = $_SERVER["PHP_SELF"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);

$query_Recordset1 = "SELECT distinct MinQualification FROM job_master";
$Recordset1 = $conn->query($query_Recordset1);
$row_Recordset1 = $Recordset1->fetch_assoc();
$totalRows_Recordset1 =  $Recordset1->num_rows;


$query_Recordset3 = "SELECT job_master.JobId, job_master.CompanyName, job_master.JobTitle, application_master.Status, application_master.JobSeekId, application_master.Description FROM application_master, job_master WHERE application_master.JobId=job_master.JobId";
$Recordset3 = $conn->query($query_Recordset3);
$row_Recordset3 = $Recordset3->fetch_assoc();
$totalRows_Recordset3 = $Recordset3->num_rows;



$query_Recordset4 = "SELECT distinct CompanyName FROM job_master";
$Recordset4 = $conn->query($query_Recordset4);
$row_Recordset4 = $Recordset4->fetch_assoc();
$totalRows_Recordset4 = $Recordset4->num_rows;


$query_Recordset5 = "SELECT distinct JobTitle FROM job_master";
$Recordset5 = $conn->query($query_Recordset5);
$row_Recordset5 = $Recordset5->fetch_assoc();
$totalRows_Recordset5 = $Recordset5->num_rows;

$colname_Recordset2 = "-1";
if (isset($_POST['cmbQual'])) {
  $colname_Recordset2 = $_POST['cmbQual'];
}
$colname2_Recordset2 = "-1";
if (isset($_POST['cmbCompany'])) {
  $colname2_Recordset2 = $_POST['cmbCompany'];
}
$colname3_Recordset2 = "-1";
if (isset($_POST['cmbArea'])) {
  $colname3_Recordset2 = $_POST['cmbArea'];
}

$whereclause="MinQualification='$colname_Recordset2' and CompanyName='$colname2_Recordset2' and JobTitle='$colname3_Recordset2'";

if($colname_Recordset2=="")
{
  $whereclause="CompanyName='$colname2_Recordset2' and JobTitle='$colname3_Recordset2'";
}
if($colname2_Recordset2=="")
{
  $whereclause="MinQualification='$colname_Recordset2' and JobTitle='$colname3_Recordset2'";
}
if($colname3_Recordset2=="")
{
  $whereclause="MinQualification='$colname_Recordset2' and CompanyName='$colname2_Recordset2'";
}

if (!empty($colname_Recordset2) && empty($colname2_Recordset2) && empty($colname3_Recordset2)) {
  $whereclause = " MinQualification='$colname_Recordset2'";
} elseif (empty($colname_Recordset2) && !empty($colname2_Recordset2) && empty($colname3_Recordset2)) {
  $whereclause = " CompanyName='$colname2_Recordset2'";
} elseif (empty($colname_Recordset2) && empty($colname2_Recordset2) && !empty($colname3_Recordset2)) {
  $whereclause = "JobTitle='$colname3_Recordset2'";
}

$query_Recordset2 = sprintf("SELECT * FROM job_master WHERE $whereclause");
$Recordset2 = $conn->query($query_Recordset2);
$row_Recordset2 = $Recordset2->fetch_assoc();
$totalRows_Recordset2 = $Recordset2->num_rows;


$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>

    
<title>Student Portal</title>

    <link rel="stylesheet" type="text/css" href="./css/bs.css">
    <style>
      select{
        height: 25px;
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
           
            <!-- /article -->


            <!-- Article -->
            <div class="srch-box">
                <h2><span>Search Job</span></h2>
               

                <form id="form1" method="post" action="SearchJob.php">
                  <table width="100%" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                      <td><strong>Select Qualification:</strong></td>
                      <td><label>
                      <select name="cmbQual" id="cmbQual">
                      <option value="">Qualification </option>
                        <?php
                        $ch=1;
do {  
 
?>
                        <option value="<?php echo $row_Recordset1['MinQualification']?>"><?php echo $row_Recordset1['MinQualification']?></option>
                        <?php
} while ($row_Recordset1 = $Recordset1->fetch_assoc());
  $rows =$Recordset1->num_rows;
  if($rows > 0) {
      mysqli_data_seek($Recordset1, 0);
	  $row_Recordset1 = $Recordset1->fetch_assoc();
  }
?>
                      </select>
                      </label></td>
                      <td><label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Select Compnay Name:</strong></td>
                      <td><label>
                        <select name="cmbCompany" id="cmbCompany">
                        <option value="">Company </option>
                          <?php
do {  
  
?>
                          <option value="<?php echo $row_Recordset4['CompanyName']?>"><?php echo $row_Recordset4['CompanyName']?></option>
                          <?php
} while ($row_Recordset4 = $Recordset4->fetch_assoc());
  $rows = $Recordset4->num_rows;
  if($rows > 0) {
      mysqli_data_seek($Recordset4, 0);
	  $row_Recordset4 = $Recordset4->fetch_assoc();
  }
?>
                        </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td><strong>Select Area of Work:</strong></td>
                      <td><label>
                        <select name="cmbArea" id="cmbArea">
                        <option value="">Designation </option>
                          <?php
do {  
  
?>
                          <option value="<?php echo $row_Recordset5['JobTitle']?>"><?php echo $row_Recordset5['JobTitle']?></option>
                          <?php
} while ($row_Recordset5 = $Recordset5->fetch_assoc());
  $rows = $Recordset5->num_rows;
  if($rows > 0) {
      mysqli_data_seek($Recordset5, 0);
	  $row_Recordset5 = $Recordset5->fetch_assoc();
  }
?>
                      </select>
                      </label></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="button" id="button" value="Search" /></td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
              </form>
                
                     
                        <?php
                        $sql = sprintf("SELECT * FROM job_master WHERE $whereclause");
                        $RS = $conn->query($sql);
                        
						if ($totalRows_Recordset2!=0) 
						{
              
              
              while ($row_Recordset2 = $RS->fetch_assoc()) { 
                $vacancy=$row_Recordset2['Vacancy'];
              if($vacancy==0)
              {
                continue;
              }
               ?>
                          <table width="100%" border="1" cellpadding="4" cellspacing="4">
                          <tr>
                          <td><strong>JobId</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobId']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>CompanyName</strong></td>
                          <td><strong><?php echo $row_Recordset2['CompanyName']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>JobTitle</strong></td>
                          <td><strong><?php echo $row_Recordset2['JobTitle']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>Vacancy</strong></td>
                          <td><strong><?php echo $row_Recordset2['Vacancy']; ?></strong></td>
                          </tr>
                          <tr>
                          <td><strong>MinQualification</strong></td>
                           <td><strong><?php echo $row_Recordset2['MinQualification']; ?></strong></td>
                           </tr>
                           <tr>
                          <td><strong>Description</strong></td>
                          <td><strong><?php echo $row_Recordset2['Description']; ?></strong></td>
                        </tr>
                           <tr>
                             <td>&nbsp;</td>
                             <td><a href="Apply.php?JobId=<?php echo $row_Recordset2['JobId'];?>"><strong>Apply For Job</strong></a></td>
                           </tr>
                        </table>
                        <br>
                        <?php  
              }while ($row_Recordset2 = $Recordset2->fetch_assoc())
						  
						  ?>
              <div class="error">
                      
                      <?php
					  }
            else
           {
           $message="Record not found";
           echo $message;
           }
                      ?>
                
          </div>     
            
        </div> <!-- /content -->



</body>
</html>

