<html>
<head>
</title> Availability Processed</title>
<link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body>
<nav>
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
    session_start();
    
include ("dbavai.php");

$playername = $_POST['playername'];;
$when=$_POST['when'];
$sql = "INSERT INTO `$when` (username)
VALUE ('$playername')";
if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
  } else {
    echo "Error creating record: " . $conn->error;
  }
$conn -> close();
?>
<footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
    </footer>S
</body>
</html>

