<!DOCTYPE html>
<?php
    session_start();
    ?>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <title> Insert Result</title>
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body> 
<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
<main>
    <h1> Upload a Result </h1>
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
        <form action="insertresultprocess.php" method=post>
        <label for ="date" > <b> Date </b> </label>
            <input type="text" placeholder= "DD/MM/YY" name="date" required must>
        <label for="opposition"> <b>Opposition </b> </label> 
            <input type ="text" name="opposition"> 
            <br>
            <br>
            <input type="text" placeholder="0-0" name="score">
        <label for="score"> <b> Scoreline </b></label>
        
        <input type="submit" id="submit" name= "submit" text ="submit"></input>   
        </form>
    <footer>
        <p> Matthew Max-Lino 2021 CMM007</p>
    </footer>
</body>
</html>
