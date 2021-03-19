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
    <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="teamnews.php">Team News</a></li>
            <li><a href="fixtureslist.php">Fixtures List</a></li>
            
        </ul>
    </nav>
    <div class="grid-66">       
    <h3> Announcements </h3>
    
    <?php
    $announcement = $_POST["announcement"];
    echo $announcement
    //make sure this repeats with more news uploaded.  Loop?
    // disapears straigh away. Need to define as "''" first?
    
    ?>
            
    </div>

    <h3> Team Sheet </h3>
    <div class="grid-66">       
    
    
    <?php
    $teamsheet = $_POST["teamsheet"];
    echo $teamsheet
 
    ?>
            
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