<?php
$servername = "localhost";
$dbname='projectfixtures';
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $db->connect_error);
}
//echo "successful Connetion   ";
?>
