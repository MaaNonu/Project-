<?php

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
<html>
<body>
<nav>
        <ul>
            <li><a href="homepageAdmin.php">Home</a></li>
            <li><a href="teamnews.php">Team News</a></li>
            <li><a href="fixtureslist.php">Fixtures List</a></li>
            <li><a href="teamsheetAdmin.php">Administrative Team News</a></li>
            <li><a href="insertFixture.php">Administrative Fixtures</a></li>
            <li><a href="teamsheetBuilder.php"> Check Player Avalability</a></li>
            <li><a href=insertTeamnews.php > Upload a Team Sheet</a></li>
        </ul>
    </nav>
</body>
</html>

