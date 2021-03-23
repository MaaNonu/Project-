<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>New Availability </title>
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body>
    <header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
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
<h1>Open a new Availabilityy selector</h1>
<div class="loginBox">
    <h3> What date do you want the new match to be?</h3>
    <br>
    <form method="post" action="openavai.php"> <!--the information posted here will be used to open a table with the date of the game that the manager wants players to mark availability for-->
        <input type="text" id ="date" name="date" placeholder="DD/MM/YY"> <br>
        <br>
        <input type="submit" text="submit">
    </form>
</div>
<footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
    </footer>
</body>
</html>
