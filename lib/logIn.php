<?php
include 'ISavable.php';
include 'Administrator.php' ;
include 'DB.php';


session_start();
    if(isset($_SESSION["user_id"])){
    header("location: ../index.php");
    }
    
    $message="";
if(!empty($_POST['login'])) {
     $result = DB::getConnection()->query("SELECT * FROM administrators WHERE name = '{$_POST['user_name']}' ");
        $row  = mysqli_fetch_array($result);
	if(is_array($row)) {
           
            if(password_verify($_POST['password'],$row['password'])){
            $_SESSION["user_id"] = $row['id'];
         header('Location: logIn.php');
            } else {
               $message = "Invalid Username or Password!";
//                header('Location: lib/logIn.php');
            
            }
	} 
//        else if(!isset($_SESSION["user_id"])){
//    header("Location: lib/logIn.php");
//    }
} 
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <main>
            <h1>Login</h1>
            <form action='logIn.php' method="post" id="frmLogin">
                <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>	
                <div class="field-group">
                        <div><label for="login">Username</label></div>
                        <div><input name="user_name" type="text" class="input-field"></div>
                </div>
                <div class="field-group">
                        <div><label for="password">Password</label></div>
                        <div><input name="password" type="password" class="input-field"> </div>
                </div>
                <div class="field-group">
                        <div><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
                </div>       
            </form>
        </main>
    </body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="views/indexStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
        <header>
            //<?php // include 'views/header.php';?>
        </header>
        <main>
         <?php // include 'views/main.php';?>

        </main>
    </body>
</html>-->


