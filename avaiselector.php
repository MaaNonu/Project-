<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>avaliability selector</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Avaliability selector</h1>
<div class="loginBox">
    <h3> Cofirm your avaliability for the upcoming match</h3>
    <br>
    <br>
    <h4> What is the date of the match that you want to mark your avalability for?</h4>
    <br>
    <form method="post" action="processavai.php">
    <input type="text" id="when" name="when" placeholder="DD/MM/YY">
    <br>  
    <br>
    <form method="post" action="processavai.php">
        <input type="text" id ="playername" name="playername" placeholder="Player name"> <br>
        <input type="radio" id="available" name="available" value="available">
        <label for="available">Avaliable</label><br>
        <br>

        <input type="submit" text="submit">
    </form>

</div>
</body>
</html>
