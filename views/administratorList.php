<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="views/esideMaineStyle.css"/>
        <meta charset="UTF-8">
        <title>Administrator</title>
    </head>
    <body>
        <div class='flex-item-school-view flex-container-list-view flex-admin'>
            <span>
                <h3 class = 'aside_title'>Administractors</h3>
                <a class ='button add_link' href='?view=administration&page=administrator&action=add'>+</a>
            </span>
            <div class='line-separator'></div>
            <?php Administrator::printList(); ?>
        </div>
        
    </body>
</html>