<?php

session_start();

?>





<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link type="text/css" rel="stylesheet" href="../css/headerStyle.css"/>
        <link href="../css/logInStyle.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class = "logIn_container">
            <?php include '../views/headerLogIn.php';?>
            <div class="wrapper">
                <form action='api.php' method="post" name="Login_Form" class="form-signin">       
                    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                    <div class="error-message"><?php if(isset($_SESSION["massege"])){ echo $_SESSION["massege"];} ?></div>
                    <input type="email" class="form-control" name="user_name" placeholder="Username" value="DeanHardscrabble@gmail.com" required="" autofocus="" />
                    <input type="password" class="form-control" name="password" placeholder="Password" value="1" required=""/>     		  
                    <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit">Login</button>  			
                </form>			
            </div>
        </div>
    </body>
</html>
