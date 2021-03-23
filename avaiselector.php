<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Availability Selector</title>
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
<body>
<h1>Availability Selector</h1>
    <nav>
        <ul>
            <li><a href="homepage.php"> Home</a></li>
            <li><a href="fixtureslist.php"> Fixtures List</a></li>
            <li><a href="avaiselector.php"> Mark Your Availability</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </nav>
<div class="loginBox">
    <h3> <b>Cofirm your Availability for the Upcoming Match</b></h3>
    <br>
    <br>
    <h4> What is the date of the match that you want to mark your avalability for?</h4>
    <br>
    <form method="post" action="processavai.php">
    <input type="text" id="when" name="when" placeholder="DD/MM/YY">
    <br>  
    <br>
    <form method="post" action="processavai.php">
        <input type="text" id ="playername" name="playername" placeholder="Player name"> <br>
        <input type="radio" id="available" name="available" value="available">
        <label for="available">Available</label><br>
        <br>

        <input type="submit" text="submit">
    </form>

</div>
<footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
</footer>
</body>
</html>
