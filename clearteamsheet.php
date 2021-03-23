<?php
    session_start();
$conn=new mysqli("localhost", "root", "", "teamsheet");

$sql="DELETE FROM teamsheet";
if ($conn->query($sql) === TRUE) {
    echo "Team Sheet cleared successfully";
   } else {
    echo "Error clearing teamsheet: " . $conn->error;
   }
   
   $conn -> close();
?>

<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <title> Clear Team Sheet </title>
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body> 
<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
    <h1> Clear Old Team Sheet</h1>
    <br>
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
<footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
</footer>
</body>
</html>
        


