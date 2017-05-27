<?php

$admin = Administrator::selectRow($_SESSION["user_id"]);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="css/headerStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
        <div class="flex-container-header">
            <header class="flex-item-header l_flex_header">
                <img class="logo" src="img/img/monsters university logo.png"/>
            </header>
            <main class="flex-item-header l_flex_header">
                <a class = 'headerNav' href="?view=school&action={$_GET['action']}&page={$_GET['page']}&id={$_GET['id']}" >school</a>
                <a class = 'headerNav' href="?view=administration&action={$_GET['action']}&page={$_GET['page']}&id={$_GET['id']}" style="<?php if ($admin['role']==3){echo 'visibility: hidden';} ?>">administration</a>
            </main>
            <eside class="flex-item-header r_flex_container_header">
                <img class = "img_header r_flex_item_header" src="<?php echo 'img/administrators_img/'.$admin['image']?>"/>
                <span class = "r_flex_item_header">
                    <span class = 'r_flex_header details_admin'><?php echo $admin['name'].','.' '.Administrator::role($admin['id'])?></span></br>
                    <form action = "lib/api.php" method="post">
                        <input type="submit" name="logout" value="Logout" class="logout-button r_flex_header logout">
                    </form>
                    
                </span>
            </eside>  
        </div>
        <div class="line-separator"></div>
    </body>
</html>
