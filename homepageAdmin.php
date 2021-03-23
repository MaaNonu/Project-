<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Admin homepage</title>
<link rel="stylesheet" href="CSS\stylsheet.css">
<link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="3F93V1Pd"></script>
<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
<main>
    <h1> Welcome to the Sports Organsier</h1>
    <?php
    echo $_SESSION['username'];
    ?>
    <nav>
        <ul>
	        <li><a href="homepageAdmin.php"> Admin Home</a></li>
            <li><a href="homepage.php"> Home</a></li>
            <li><a href="insertFixture.php"> Insert a Fixture</a></li>
            <li><a href="fixtureslist.php"> Fixtures List</a></li>
            <li><a href="insertresult.php"> Insert a Result</a></li>
            <li><a href="avaiselector.php"> Mark Your Availability</a></li>
            <li><a href="newavai.php"> Open a New Availability Page</a></li>
            <li><a href="teamsheetAdmin.php"> Player Availability</a></li>
            <li><a href="teamsheetclear.php"> Clear Old Team Sheet</a></li>
            <li><a href="insertteamsheet.php"> New Team Sheet</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="file">
        <input type="submit" value="Upload Image" name="submit">
        </form>

    </main>
    <footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
    </footer>
</body>
</html>