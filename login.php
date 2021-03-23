<?php
session_start();
$conn=new mysqli("localhost", "root", "", "projectfixtures");
// the PHP code from the login was helped by this online tutorial: https://www.youtube.com/watch?v=O7Odv-tQUP0&list=LL&index=2&t=1313s&ab_channel=DCodeMania 

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $userType = $_POST['usertype'];

    $sql="SELECT * FROM logins WHERE username=? AND password=? AND usertype=?";
    $stmt=$conn->prepare($sql);
    $stmt -> bind_param("sss", $username, $password, $userType);
    $stmt -> execute();
    $result =$stmt -> get_result(); 
    $row = $result -> fetch_assoc();

    session_regenerate_id();
    $_SESSION['username'] = $row['username'];
    $_SESSION['usertype'] = $row['usertype'];
    session_write_close();

    if($result->num_rows==1 && $_SESSION['usertype']=="User"){
        header('location:homepage.php');
    }
    else if($result->num_rows==1 && $_SESSION['usertype']=="Admin"){
        header('location:homepageAdmin.php');
    }
    else{
        echo "Username or Password is Incorrect";

    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="max">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS\stylsheet.css">
    <link rel="stylesheet" href="CSS\unsemantic.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" /> <!--this code comes from osano.com/cookieconsent/download -->
    <link rel="stylehseet" href="CSS\stylesheetlogin.css">
</head>
<body> 
<header>
<img src="ProjectImages\Uni-logo-RobertGordon_730_290_80.jpg" alt="Institution Logo" id="institution"> 
<img src="ProjectImages\rguSport.jpg" alt="Sports Union Logo" id="sports">
</header>
<main>
<h1> <b>Login Page</b></h1>
<br>
<br>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" id="login">
    <div class="form-group">
        <input type="text" name="username" class="form-control form control-lg" placeholder="Username" required>
    </div>
    <div class="form-group">
    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
    </div>
    <div class="form-group lead">
        <label for ="usertype"> I'm a :</label>
        <input type="radio" name="usertype" value="User"
        class="custome-radio" required>&nbsp;User  |
        
        <input type="radio" name="usertype" value="Admin"
        class="custome-radio" required>&nbsp; Admin  |
    </div>
    <div class="form-group">
        <input type="submit" name="login" class="btn btn-danger btn-block">

    </form>
    <!--this code comes from osano.com/cookieconsent/download -->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000"
    },
    "button": {
      "background": "#f1d600"
    }
  },
  "type": "opt-out"  
});
</script>
</main>
<footer>
    <p> Matthew Max-Lino 2021 CMM007</p>
</footer>
</body>
</html>
    
