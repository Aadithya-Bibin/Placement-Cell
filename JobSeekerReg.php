<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    
    
    <title>Welcome To Job Portal</title>
    
    <style>
select
    {
      width: 250px;
      height: 40px;
      margin-top: 10px;
    }

	.ans
	{
		
	}
</style>
</head>
<body>
<
<!-- Main -->

<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    
            <div class="containe">
                <h2><span>Student Registration Form</span></h2>
               
<div class="content">
                   
				
                <form action="JobSeekerInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                <div class="user-details">
				<div class="input-box">
            <span class="details">Student Name</span>
            <input type="text" placeholder="Enter Student Name" name="txtName" id="txtName" required>
          </div>  
		  <div class="input-box">
            <span class="details">Address</span>
            <input type="textarea" placeholder="Enter your address" name="txtAddress" id="txtAddress" required>
          </div>
		 
		  <div class="input-box">
            <span class="details">City</span>
            <input type="text" placeholder="Enter your city" name="txtCity" id="txtCity" required>
          </div>
				
		  <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email"  name="txtEmail" id="txtEmail" required>
          </div>

		  <div class="input-box">
            <span class="details">Mobile</span>
            <input type="text" placeholder="Enter your number"  name="txtMobile" id="txtMobile" maxlegth="10" required >
          </div>
		  <div class="input-box">
					<label>Gender:
						<br>
                        <select name="cmbGender" id="cmbGender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </label>
					  <br>
					  <br>
		</div>

		  <div class="input-box">
            <span class="details">Course</span>
           
          
		  <select name="cmbQual" id="cmbQual">
                          <option value="B.C.A">B.C.A</option>
                          <option value="M.C.A">M.C.A</option>
                          <option value="B.Sc.I.T">B.Sc.I.T</option>
                          <option value="B.Sc.C.S">B.Sc.C.S</option>
                          <option value="M.Sc.I.T">M.Sc.I.T</option>
                          <option value="M.Sc.C.S">M.Sc.C.S</option>
                          <option value="M.B.A">M.B.A</option>
                          <option value="B.B.A">B.B.A</option>
                          <option value="Other">Other</option>
                        </select>
<br>
<br>
						<div class="input-box">
           
            <input type="text" placeholder="Other" name="txtOther" id="txtOther">
          </div>
						</div>
				<div class="input-box">
					
					
					
						<span id="sprytextfield7">
                        <label>Birth Date
                        <input type="date" name="txtBirthDate"  id="txtBirthDate" placeholder="Enter Birthdate" required>
                        </label>
                      <span class="textfieldRequiredMsg"></span></span>
					  
						
		</div>

		<div class="input-box">
            <span class="details">No.of SupplyMentary</span>
            <input type="text" placeholder="Arriers"  name="txtsupply" id="txtsupply" required>
          </div>

		<div class="input-box">
            <span class="details">User Name</span>
            <input type="text" placeholder="Enter your username"  name="txtUserName" id="txtUserName" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="txtPassword" id="txtPassword" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm Password" name="CPassword" id="CPassword" required >
          </div>
		  
          <select name="cmbQue" id="cmbQue">
            <option>What is Your Pet Name?</option>
            <option selected="selected">Who is Your Favourite Person?</option>
            <option>What is the Name of Your First School?</option>
          </select>
            <div class="input-box">
              
              <input type="text" placeholder="Answer" class="ans" name="txtAnswer" id="txtAnswer"  required>
               </div>
        </div>
		<label>Upload Resume:
                        <input type="file" name="txtFile" id="txtFile" required/>
                      </label></td>
        
        <div class="button">
          <input type="submit" value="Register">
        </div>


		</div>
                 </form>
              

		</div>
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

   


</body>
</html>
