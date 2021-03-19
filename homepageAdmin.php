<?php
session_start();
if(!isset($SESSION['LoginUser'])){
    header ('Location: index.php');// he removed this in torial and replaced with
    // if(isset($_SESSION['usertype']))
    if($_SESSION['usertype'] != 'Admin')
    {
        header('Location: home.php');
    }
}
else 
{
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="3F93V1Pd"></script>
<header> 
<!-- insert instituion logo here -->
    <h1> Welcome to the Sports Organsier</h1>
    <h2> Welcome <?php echo $SESSION['LoginUser'];
    ?> </h2>
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
    <div class="grid-66">
    <h3> Announcements </h3>
   
    <form method=post action=homepage.php>
    <input type=textarea name=announce placeholder="type here...">

    </texarea>
    <br>
    <br>
    <input type='submit' value = 'submit'></input>
    </form>

    <?php
    
    //make sure this repeats with more news uploaded. Can't have team news dissapeared if a player asks for a lift. Loop? 
    //Input on this page for news to be displayed to users homepage. 

    ?>
            <!-- option for all users. Can be used for alerts such as travel or social or sharing resources-->
            <!-- may need to make a seperate upload info page -->
    </div>
    <h3> <b> Social Media </b> </h3>
    <div class="grid-33"> 
    <div class="fb-like" data-href="https://www.facebook.com/rgusportsclubs" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
    <br>
    <br>
            <a class="twitter-timeline" href="https://twitter.com/rgusport?ref_src=twsrc%5Etfw">Tweets by rgusport</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    </body>
    </html>