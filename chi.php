<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Placement Cell</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./style.css">


  <link rel="stylesheet" type="text/css" href="./css/log.css" />
</head>

<body>
<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>PLACEMENT CELL</h1>
  </div>
  <p class='msg'>Who Are You!</p>
  <div class='form'>
    <form name ="form1" method="post" action="log.php">
  <input type="text" placeholder='Admin || Student || Company' class='text' id="rolename" name="rolename" required>
  <br>
  <br>
  <input type="submit" name="button" class='btn-login'id="do-login" value="Login">
  <a href="Register.php" class='forgot'>New User?</a>
    </form>
  </div>
</section>

<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
