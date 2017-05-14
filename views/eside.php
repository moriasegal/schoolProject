<?php

    if (!isset($_GET['view'])) {
        header("Location: ?view=school&action={$_GET['action']}&page={$_GET['page']}&id={$_GET['id']}");
	 die();
}



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
               
        <div class="flex-container-school-view">
            <?php 
                switch ($_GET['view']) {
                case 'school':  
                    include 'views/schoolList.php';

                   break;
               case 'administration':
//              
                    include 'views/administratorList.php';

                    break;

               default:              
                    break;
                }
            ?>
        </div>
        
        
        
    </body>
</html>