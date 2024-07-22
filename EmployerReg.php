<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
 
    
<title>Placement Cell</title>
   
    
    
    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/style.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
select
    {
      width: 200px;
      height: 30px;
      margin-top: 30px;
    }
   
    </style>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Please Enter Company Name"
						  ]
					
                     ],
                   [//Contact Person
						  ["minlen=1",
		"Please Enter Contact Person"
						  ]
						  
                   ],
				   [//Address
						["minlen=1",
		"Please Enter Address"
						  ] 					  				
                   ],
                   [//City
						["minlen=1",
		"Please Enter City"
						  ] 					  				
                   ],
				   [//Email
						  
						["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]  
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ] 	  
                   ],
				   [//Area
						  
					  ["minlen=1",
		"Please Enter Area of Work"
						  ] 	
								 
						  
                   ],
				
				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]
						 
						  
                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],
				    [//Que
						  
						
                   ],
				    [//Answer
						  
						  ["minlen=1",
		"Please Enter Answer "
						  ]
						  
                   ]
				   
            ];
</SCRIPT>
<!-- Main -->

<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
   
<div class="containe">
    <div class="title">Registration</div>
    <div class="content">
      <form action="EmployeInsert.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Company Name</span>
            <input type="text" placeholder="Enter Company Name" name="txtName" id="txtName" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Person</span>
            <input type="text" placeholder="Enter your name" name="txtPerson" id="txtPerson" required>
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
            <input type="text" placeholder="Enter your number" name="txtMobile" id="txtMobile" required>
          </div>
          <div class="input-box">
            <span class="details">Area of Work</span>
            <input type="text" placeholder="Work Area" name="txtAreaWork" id="txtAreaWork" required>
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
            <input type="password" placeholder="Confirm Password" name="CPassword" id="CPassword" required>
          </div>
          <select name="cmbQue" id="cmbQue">
            <option>What is Your Pet Name?</option>
            <option selected="selected">Who is Your Favourite Person?</option>
            <option>What is the Name of Your First School?</option>
          </select>
            <div class="input-box">
               <span class="details">Answer</span>
              <input type="text" placeholder="Answer" name="txtAnswer" id="txtAnswer"  required>
               </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>



   
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
//-->
</script>
<?php
include "right.php"
?>
</body>
</html>
