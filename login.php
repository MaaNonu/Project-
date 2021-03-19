<!DOCTYPE html>
<html>
<head> 
    <?php 
    include "trial.php";
    ?>
   <title>Multi User Login Demo</title>
</head>
<body> 
<h1> Login</h1>
    <div class="row">
        <div class="com-md-6">
            <form action="trial.php" method="POST">
                <div class="form-group">
                <label> Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-group">
                <input type="submit" name=btnlogin class="btn btn-primary" value="login">
            </form>
        </div>
        

</body>
</html>