<?php 

include 'lib/ISavable.php';
include 'lib/Person.php';
include 'lib/Student.php';
include 'lib/Course.php';
include 'lib/Administrator.php';
include 'lib/DB.php';



session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: lib/logIn.php?r=7");
} 

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="css/indexStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
        <div class="index_container">
            <header>
                <?php include 'views/header.php';?>
            </header>
            <main>
             <?php include 'views/main.php';?>
            </main>
        </div>
    </body>
</html>


