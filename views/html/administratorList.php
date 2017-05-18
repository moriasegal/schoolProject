<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Administrator</title>
    </head>
    <body>
        <div class='flex-container-list-view flex-admin'>
            <span>
                <h3 class = 'aside_title'>Administractors</h3>
                <a class ='button add_link' href='?view=administration&page=administrator&action=add'>+</a>
            </span>
            <div class='line-separator'></div>
            <?php Administrator::printList(); ?>
        </div>
        
    </body>
</html>