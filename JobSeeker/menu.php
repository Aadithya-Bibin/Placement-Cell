


     <!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu Strip</title>
    <link rel="stylesheet"  type="text/css" href="css/bs.css" />
    

</head>
<body>

<div class="menu">
    <?php
    // Define your menu items as an associative array
    $menuItems = array(
        "Home" => "index.php",
        "Profile" => "Profile.php",
        "Education" => "Education.php",
        "Searchjob"=>"SearchJob.php",
        "Status" => "Statusjob.php",
        "Feedback" => "Feedback.php",
        "Notifications"=>"News.php",
        "Logout"=>"Logout.php"
    );

    // Iterate through the array and generate HTML markup for each menu item
    foreach ($menuItems as $itemName => $itemLink) {
        echo "<a href=\"$itemLink\">$itemName</a>";
    }
    ?>
</div>

</body>
</html>
