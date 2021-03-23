<?php 

session_start();
     
$conn=new mysqli("localhost", "root", "", "teamsheet");

 $playername = $_POST['playername'];
$sql = "INSERT INTO teamsheet (playername)
VALUE ('$playername')";
if ($conn->query($sql) === TRUE) {
 echo "Record created successfully";
 header("location:insertteamsheet.php");//to speed up the process this page links back to the previous page. Making it easier to add multiple players
} else {
 echo "Error creating record: " . $conn->error;
}

$conn -> close();
?>