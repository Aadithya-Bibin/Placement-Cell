<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
 
    
    <title>Company Login</title>
 
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
                <h2><span>Welcome To Control Panel</span></h2>
               
<?php
$JobId=$_GET['JobId'];
$JobSeekId=$_GET['JobSeekId'];
$AppId=$_GET['AppId'];
$Status=$_POST['status'];
$Description=$_POST['txtDesc'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);
$sql = "Update Application_Master set Status='".$Status."' ,Description='".$Description."' where ApplicationId=".$AppId." and JobId='".$JobId."' and JobSeekId='".$JobSeekId."'";
// Execute query
$conn->query($sql);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require './vendor/autoload.php';

$sql="select Email from jobseeker_reg where JobSeekId=(select JobSeekId from Application_Master where ApplicationId=".$AppId.")";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$recipient_email = $row['Email'];

$sql="select CompanyName from job_master where JobId=(select JobId from Application_Master where ApplicationId=".$AppId.")";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sender_name=$row['CompanyName'];
$sender_email="aadithyabibin@gmail.com";
$subject="Information on your placement application";
$body="You have been selcted for ".$Status." further details is given below\n".$Description;

$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->SMTPDebug = 0; // Set to 2 for debugging information
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aadithyabibin@gmail.com'; // Replace with your SMTP username
    $mail->Password = 'mdym yano hdie qoyf'; // Replace with your SMTP password
    $mail->SMTPSecure = 'Tls';
    $mail->Port = 587;

    // Recipients
    $mail->setFrom($sender_email, $sender_name);
    $mail->addAddress($recipient_email,'appu');

    // Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();
    
} catch (Exception $e) {
    echo "Something went wrong. Mailer Error: {$mail->ErrorInfo}";
}
$sql="select Vacancy from job_master where JobId=".$JobId;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$vacancy=$row['Vacancy'];
if($Status=='Confirm' and $vacancy!=0)
{
    $sql="select Vacancy from job_master where JobId=".$JobId;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $vacancy=$row['Vacancy'];
    $vacancy=$vacancy-1;
    $sql2 = "UPDATE job_master SET Vacancy = " . $vacancy . " WHERE JobId = '" . $JobId . "'";
$conn->query($sql2);

    echo '<script type="text/javascript">alert("Send Succesfully");window.location=\'Application.php\';</script>';
   

}
else if($vacancy==0)
{
    echo '<script type="text/javascript">alert("Vacancy is full");window.location=\'Application.php\';</script>';
}
else
{
    echo '<script type="text/javascript">alert("Send Succesfully");window.location=\'Application.php\';</script>';
}
$conn->close();
?>
                
              
            
        </div> <!-- /content -->



</body>
</html>
