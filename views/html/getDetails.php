<?php
   $admin = Administrator::selectRow($_SESSION["user_id"]);                                
 ?>                                   
                                    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <span>
            <h3 class = 'main_title'><?php echo $_GET['page']?>  <?php echo $_GET['action']?></h3>
        </span>
        <main class="main_container_deta">
            <?php $_GET['page']::printDetails($_GET['id']);?>
        </main>
    </body>
</html>


