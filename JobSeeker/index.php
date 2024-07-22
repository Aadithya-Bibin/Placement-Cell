<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>

    
    <title>Student Portal</title>
  
    <link rel="stylesheet" type="text/css" href="./css/bs.css" />
    <style>
      .enlargeable {
            transition: transform 0.5s;
        }

        .enlargeable:hover {
            transform: scale(1.2);
        }
        .style1 {
	font-size: 18px;
    font-family:"Times New Roman", serif;
}
.style2 {
	font-size: medium;
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
                <span class ="style1">Congratulations on taking the first step towards a successful career. We're here to support and guide you on your journey to exciting job opportunities. Our dedicated team is committed to helping you explore and secure positions that align with your skills and aspirations.</span></p>
                <p> <span class ="style1">As you step into our Placement Cell Dashboard, you're embarking on a journey filled with endless possibilities and opportunities. Designed with your success in mind, this platform serves as your gateway to a world of career advancement and professional growth.</span></p>
                <p> <span class ="style1">Engage with personalized career guidance, access exclusive job listings from top recruiters, and participate in industry-specific workshops and events. Seamlessly connect with alumni networks and industry experts, gaining valuable insights and mentorship along the way.</span></p>
                <p> <span class ="style1">As you navigate through this platform, remember that your journey is unique, and every step you take brings you closer to realizing your dreams. Embrace the opportunities that await you, seize the moment, and let your potential soar.</span></p>
                <p> <span class ="style1">Welcome to your Placement Cell —where your future begins today.</span></p>
              
            
        </div> <!-- /content -->


</body>
</html>
