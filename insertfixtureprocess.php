<?php
    session_start();
    ?>
<html>
  <head>
  <title> Insert Fixture Process</title>
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
    <br>
    <br>
    <br>
    <?php
include ("connect.php");
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectfixtures";
    


    $date= $_POST['date'];
    $location=$_POST['Home/Away'];
    $opposition = $_POST['opposition'];

$sql = "INSERT INTO matches (date, opposition, location)
VALUES ('$date', '$opposition', '$location')";

if ($conn->query($sql) === TRUE) {
  echo "New fixture created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  <footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
  </footer>
  </body>
</html>