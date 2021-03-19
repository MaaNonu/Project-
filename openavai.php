<?php
include ("dbavai.php");
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "avai";
    

    $date= $_POST['date'];

$sql = "CREATE TABLE `$date`(
    uid int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    
    
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

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