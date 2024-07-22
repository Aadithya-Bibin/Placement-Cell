<!DOCTYPE html>
<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<head>
    <title>
        
    </title>
    <link rel="stylesheet"  type="text/css" href="./css/bs.css" />
   
    </head>
    <body>
    <div class="container">
    <p class="heading">
                    <?php 
					echo "Welcome ". $_SESSION['Name'];
					?>
                    </p>
    <img src="design/h2.jpg" alt="" width="850px" height="160px" />
    
</div>




    </body>
