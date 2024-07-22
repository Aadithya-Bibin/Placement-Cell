<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Placement Cell</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./style.css">


  <link rel="stylesheet" type="text/css" href="./css/log.css" />

</head>



<body>
  <?php
  session_start();
  $role=$_POST['rolename'];
  ?>
<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>PLACEMENT CELL</h1>
  </div>
  <p class='msg'>Welcome to <?php echo $role ?> login</p>
  <div class='form'>
    <form method="post" action="login.php">
  <input type="text" placeholder='Username' class='text' id="txtUser" name="txtUser" required><br>
  <input type="password" placeholder='Password' class='password' id="txtPass" name="txtPass" required><br>
  <input type="text" class='text' id="cmbUser" name="cmbUser" value='<?php echo $role?>' readonly><br><br>
  <input type="submit" name="button" class='btn-login'id="do-login" value="Login">
  <a href="Forget.php" class='forgot'>Forgot?</a>
    </form>
  </div>
</section>
<?php
// Display JavaScript alert if error is set
if (!empty($error)) {
    echo '<script type="text/javascript">alert("Wrong UserName or Password");</script>';
}
?>




<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
