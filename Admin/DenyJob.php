<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require './vendor/autoload.php';



$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 
$Id = $_GET['JobId'];
// Establish Connection with MYSQL
$conn = new mysqli($servername, $username, $password, $database, $port);
// Specify the query to Update Record
$sql = "Select Email,UserName,Password from JobSeeker_Reg where JobSeekId=".$Id."";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$recipient_email = $row['Email'];
$uname=$row['UserName'];
$upass=$row['Password'];

$sql1 = "Delete from JobSeeker_Reg where JobSeekId=".$Id."";
// Execute query
$conn->query($sql1);

$sender_name="PlacementCell";
$sender_email="aadithyabibin@gmail.com";
$subject="Registration for placement cell";
$body="Your application for placement cell has been declined. \nContact the registration office for more details";

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
    $mail->addAddress($recipient_email);

    // Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();
    
} catch (Exception $e) {
    echo "Something went wrong. Mailer Error: {$mail->ErrorInfo}";
}

// Close The Connection
$conn->close();
echo '<script type="text/javascript">alert("Student Request Declined");window.location=\'ManageJob.php\';</script>';
?>
</body>
</html>
