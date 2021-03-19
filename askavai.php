<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ask player avaliability</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Ask player Avaliability</h1>
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

<div class="loginBox">
    <h3>What date do you want to open player avaliability for?</h3>
    <br>
    <form name= "selectDate" method="post" action="avaiselector.php"> 
        <label>date</label><br>
        <input type="text" name="date" placeholder="DD/MM/YY">
         <br>
         <br>
        <input type="submit" name="submit" value = "submit">
        
    </form>

</div>
</body>
</html>
