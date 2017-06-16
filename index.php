<?php 

include 'lib/ISavable.php';
include 'lib/Person.php';
include 'lib/Student.php';
include 'lib/Course.php';
include 'lib/Administrator.php';
include 'lib/DB.php';



session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: lib/logIn.php");
} 

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/mainStyle.css"/>
        <link type="text/css" rel="stylesheet" href="css/esideMaineStyle.css"/>
        <link type="text/css" rel="stylesheet" href="css/headerStyle.css"/>
        <link type="text/css" rel="stylesheet" href="css/indexStyle.css"/>
        <link type="text/css" rel="stylesheet" href="css/formStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
<!--        <div class="index_container">
            <header>
                <?php // include 'views/header.php';?>
            </header>
            <main>
             <?php // include 'views/main.php';?>
            </main>
        </div>-->

        <?php include 'views/header.php';?>
        <div class="flex-container-main-view">
            <div class="containerSchool flex-item-main-view l_flex"></div>
            <div class="containerForm flex-item-main-view r_flex"></div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script type="text/javascript" src="script/script.js"></script>
        <script type="text/javascript" src="script/scriptschool.js"></script>

    </body>
</html>


