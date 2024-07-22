
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    
    
<title>Placement Cell</title>
  
    <link rel="stylesheet" type="text/css" href="./css/bs.css" />
    <style>

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
    
            <div class="containe">
                <h2><span><a href="#">Forgot Password</a></span></h2>
               

                <form id="form2" method="post" action="ForPass.php">
                <div class="user-details">
                 
                        <label>Select User:
                          <input type="radio" name="rdUser" value="Student" id="rdUser_0" />
                          Student</label>
                       
                        <label>
                          <input type="radio" name="rdUser" value="Company" id="rdUser_1" />
                          Company</label>
                          <br>
                          <br>
                        
                          <div class="input-box">
            
            <input type="text" placeholder="Enter User Name" name="txtUserName" id="txtUserName" required>
          </div>
          
<br>

          <select name="cmbQue" id="cmbQue">
            <option>What is Your Pet Name?</option>
            <option selected="selected">Who is Your Favourite Person?</option>
            <option>What is the Name of Your First School?</option>
          </select>
          <br>
          
            <div class="input-box">
               
              <input type="text" placeholder="Answer" name="txtAnswer" id="txtAnswer"  required>
               </div>
               <div class="button">
          <input type="submit" value="Submit">
        </div>      
</div>
              </form>

                
          </div> <!-- /article -->



   


</body>
</html>
