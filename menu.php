<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Strip</title>
    <link rel="stylesheet"  type="text/css" href="./css/bs.css" />
    

</head>
<body>

<div class="menu">
    <?php
    // Define your menu items as an associative array
    $menuItems = array(
        "Home" => "index.php",
        "About Us" => "AboutUs.php",
        "Companies" => "Employer.php",
        "Students" => "JobSeeker.php",
        "Latest News"=>"News.php",
        "Login"=>"chi.php"
    );

    // Iterate through the array and generate HTML markup for each menu item
    foreach ($menuItems as $itemName => $itemLink) {
        echo "<a href=\"$itemLink\">$itemName</a>";
    }
    ?>
</div>

</body>
</html>
