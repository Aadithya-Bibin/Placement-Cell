<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>

    
    <title>Placement Cell</title>

    <link rel="stylesheet" media="aural" type="text/css" href="./css/bs.css" />
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {font-weight: bold}

    </style>
</head>

<body id="www-url-cz">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						  ["minlen=1",
		"Please Enter Name "
						  ] 
					
                     ],
                   [//Address
						   ["minlen=1",
		"Please Enter Address "
						  ] 
						  
                   ],
                   [//Country
						 
						 
					  
						  				
                   ],
				   [//State
						  
						  
                   ],
				   [//City
						  
						  
                   ],
				   [//Mobile
						  
						  ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
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
				   [//ID
						  
						  
                   ],
				   [//TDType
						  
						  ["minlen=1",
		"Please Select File "
						  ]
						  
                   ],
				   [//UserName
						  
					 ["minlen=1",
		"Please Enter UserName "
						  ]	
                   ],
				   [//Password
						  
						 ["minlen=1",
		"Please Enter Password "
						  ] 
						  
                   ],
				   [//Confirm
						  
						   ["minlen=1",
		"Please Enter Confirm Password "
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
   
            <div class="content-box">
                <h2><span>Placed Students</span></h2>
               

                <p>
                <table width="100%" border="1" cellpadding="4" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Name</strong></div></th>
<th bgcolor="#006699" class="style3"><div align="left" class="style9 style5 style2"><strong>Company</strong></div></th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "job";
$port = "3306"; 

$conn = new mysqli($servername, $username, $password, $database, $port);
$sql="Select JobSeekId,JobId from application_master where Status='Confirm'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
$Eid=$row['JobSeekId'];
$Jid=$row['JobId'];

$sql1="select JobSeekerName from JobSeeker_Reg where JobSeekId=".$Eid;
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$Name=$row1['JobSeekerName'];

$sql2="select CompanyName from job_master where JobId=".$Jid;
$result2 = $conn->query($sql2);
$row1 = $result2->fetch_assoc();
$Company=$row1['CompanyName'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Company;?></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = $result->num_rows;
?>

<?php
// Close the connection
$conn->close();
?>
</table>
    </td>
  </tr>
</table>
                
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

   

</body>
</html>
