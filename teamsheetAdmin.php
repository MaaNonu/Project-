<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <title> Pick Date of upciming fixture</title>
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body> 
<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
<main>
       <h1>  Build a Team Sheet </h1>
        <nav>
        <nav>
        <ul>
	        <li><a href="homepageAdmin.php"> Admin Home</a></li>
            <li><a href="homepage.php"> Home</a></li>
            <li><a href="insertFixture.php"> Insert a Fixture</a></li>
            <li><a href="fixtureslist.php"> Fixtures List</a></li>
            <li><a href="insertresult.php"> Insert a Result</a></li>
            <li><a href="avaiselector.php"> Mark Your Availability</a></li>
            <li><a href="newavai.php"> Open a New Availabilityy Page</a></li>
            <li><a href="teamsheetAdmin.php"> Player Availability</a></li>
            <li><a href="teamsheetclear.php"> Clear Old Team Sheet</a></li>
            <li><a href="insertteamsheet.php"> New Team Sheet</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </nav>
    <br>
        <h2> What date is your game?<h2>

        <h3> click check to see the avalability of your players<h3>
        <br>
        <br>
        <form action="" method="post">
        <label for ="date" > <b> Date </b> </label>
            <input type="text" placeholder= "DD/MM/YY" name="date" required must>
            <br>
            <input type="submit" name="submit" value="Check">
    
        <?php
        
    
        include ("dbavai.php");
        $date= $_POST['date'];
        
        $sql_query="SELECT username FROM `$date`";
        $result = $conn -> query($sql_query);
        while($row=$result->fetch_array())
        {
            $player=$row['username'];
            echo "<article> 
            <h3> $player</h3>
            </article>";
        }
        ?>
        </select> 
        
        
        
        </form>
        </main>
        <footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
    </footer>
        </body>
        </html>