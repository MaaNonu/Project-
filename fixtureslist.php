<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <title> Fixtureslist</title>
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body> 
<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
<h1>  Fixtures </h1>
        <nav>
        <ul>
            <li><a href="homepage.php"> Home</a></li>
            <li><a href="fixtureslist.php"> Fixtures List</a></li>
            <li><a href="avaiselector.php"> Mark Your Availability</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </nav>
        <?php
        include ("connect.php");
        
        
        $sql_query="SELECT * FROM matches";
        $result = $conn -> query($sql_query);
        while($row=$result->fetch_array())
        {
            $opposition=$row['opposition'];
            $date=$row['date'];
            $location=$row['location'];
            echo "<article> 
            <h3> {$date } {$opposition}  {$location}</h3>
            </article>";
        }

        
        
        ?>
        
        <footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
    </footer>

</body>
</html>
    
