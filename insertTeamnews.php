<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title> Welcome</title>
    <link rel="stylesheet" href="CSS\style.css">
</head>
<body> 
<header>
        <h1> Sports Union Hub</h1>
        <h2> Upload Team News </h2>
</header>
        <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="teamnews.php">Team News</a></li>
            <li><a href="fixtureslist.php">Fixtures List</a></li>
            <li><a href="teamsheetAdmin.php">Administrative Team News</a></li>
            <li><a href="insertFixture.php">Administrative Fixtures</a></li>
        </ul>
        </nav>
        <main>
        <p> Type the news you want to bemade visible to the rest of the team on the main page below </p>
        <form action="homepage.php" method="post"> 
            <textarea id="announcement" name="announcement" placeholder="type here..." row="500" cols="50">
            




            </textarea>
            
            <br>
            <br>
            <input type="submit" text="submit">
            
            <?php
           
            ?>
</body>
</html>
<!-- currently takes me back to homepage but doesn't show the announcement --> 

