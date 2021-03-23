<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Sports Planner Homepage</title>
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="ednWNkyQ"></script>

<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>

    <h1> Welcome to the Sports Organsier</h1>
     <?php
    echo $_SESSION['username'];
    ?>
    <nav>
        <ul>
            <li><a href="homepage.php"> Home</a></li>
            <li><a href="fixtureslist.php"> Fixtures List</a></li>
            <li><a href="avaiselector.php"> Mark Your Availability</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </nav>
   
<main class ="grid-container">
    <section class="grid-33">
    <div id="results">
    <h2> Results </h2>
    
    <?php
    include ("connect.php"); //lists results from previous games uploaded by admin
    $sql_query="SELECT * FROM results";
    $resultr=$conn->query($sql_query);
    while($row=$resultr->fetch_array())
    {
        $date=$row['Date'];
        $opposition=$row['Opposition'];
        $score=$row['Score'];
        echo" <article> 
            <h3> {$date }  {$opposition} <b>{$score}</b></h3>
            </article>";
    }
    
    ?>
            
    
    </div>
</section>
<section class=grid-33>
    <div id="sheet">
    <h2> Team Sheet </h2>
      
    <?php
    $conn=new mysqli("localhost", "root", "", "teamsheet");
    //lists the names in a teamsheet. 
    //Will come up with an error if left empty so should only be cleared when the admin is uploaded a new one
    
    $sql_query="SELECT playername FROM teamsheet";
    $result = $conn -> query($sql_query);
    while($row=$result->fetch_array())
    {
        $player=$row['playername'];
        echo "<article> 
        <h3> $player</h3>
        </article>";
    }
 
    ?>
            
    </div>
    </section>
    <aside class="grid-33" id="fbook">
    <div class="fb-page" data-href="https://www.facebook.com/RGUSPORT" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/RGUSPORT" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RGUSPORT">RGU SPORT</a></blockquote></div>
    </aside>
    <img src=ProjectImages\17200652965_a6570beb75_c.jpg alt="example sports photo" id="display">
    <aside class="grid-33" id="twitter">

    <br>
    <br>
            <a class="twitter-timeline" href="https://twitter.com/rgusport?ref_src=twsrc%5Etfw" data-tweet-limit="2">Tweets by RGUsport</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    </aside>
    
    
    </main>
    <footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
    </footer>
</body>
</html>