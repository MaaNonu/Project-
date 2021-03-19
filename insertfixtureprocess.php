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

<html>
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

</html>