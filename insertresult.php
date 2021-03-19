<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <title> Welcome</title>
    <link rel="stylesheet" href="CSS\style.css">
</head>
<body> 
<header>
        <h1> Sports Union Hub</h1>
        <h2> Insert Fixture </h2>
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
        <form action="insertresultprocess.php" method=post>
        <label for ="date" > <b> Date </b> </label>
            <input type="text" placeholder= "DD/MM/YY" name="date" required must>
        <label for="opposition"> <b>Opposition </b> </label> 
            <input type ="text" name="opposition"> 
            <br>
            <br>
            <input type="text" placeholder="0-0" name="score">
        <label for="score"> <b> Scoreline </b></label>
        
        <input type="submit" id="submit" name= "submit" text ="submit"></input>   
        </form>
    </body>
</html>
