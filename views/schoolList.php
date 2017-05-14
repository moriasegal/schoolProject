<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="views/esideMaineStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
        
        <div class='flex-item-school-view flex-container-list-view'>
            <span>
                <h3 class = 'aside_title'>Courses</h3>
                <a class ='button add_link' href='?view=school&page=course&action=add'>+</a>
            </span>
            <div class='line-separator'></div>
            <?php Course::printList(); ?>
        </div>
        <div class='flex-item-school-view flex-container-list-view'>
            <span>    
                <h3 class = 'aside_title'>Students</h3>
                <a class ='button add_link' href='?view=school&page=student&action=add'>+</a>
            </span>
            <div class='line-separator'></div>
             <?php Student::printList() ?>
        </div>
        
    </body>
</html>