<?php
$servername = "localhost";
$dbname='avai';
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername,  $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//echo "success";
?>