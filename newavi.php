<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>avaliability new</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
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
<body>
<h1>Open a new avaliability selector</h1>
<div class="loginBox">
    <h3> What date do you want the new match to be?</h3>
    <?php

   

    ?>
    <br>
    <form method="post" action="openavai.php">
        <input type="text" id ="date" name="date" placeholder="DD/MM/YY"> <br>
        <br>

        <input type="submit" text="submit">
    </form>

</div>
</body>
</html>
