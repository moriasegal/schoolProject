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
<!--            <a class ='button edit_link' style="<?php // if(($admin['role'] == 3)&&($_GET['page'] == 'course')){ echo 'display: none';}?>" href='?view=<?php // echo $_GET['view']?>&page=<?php // echo $_GET['page']?>&action=edit&id=<?php // echo $_GET['id']?>'>edit</a>-->
        </span>
        <!--<div class='line-separator'></div>-->
        <main class="main_container_deta">
            <?php $_GET['page']::printDetails($_GET['id']);?>
        </main>
    </body>
</html>


