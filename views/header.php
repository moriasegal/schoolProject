<?php

//$admin = Administrator::selectRow($_SESSION["user_id"]);
$admin_role = $_SESSION['user_role'];
$admin_id = $_SESSION["user_id"];
$admin_img = $_SESSION["user_img"];
$admin_name = $_SESSION["user_name"];


?>

    <div class="flex-container-header">
        <header class="flex-item-header l_flex_header">
            <img class="logo" src="img/img/monsters university logo.png"/>
        </header>
        <main class="flex-item-header l_flex_header">
            <a class = 'schoolButton headerNav' >school</a>
            <a class = 'adminButton headerNav' style="<?php if ($admin['role']==3){echo 'visibility: hidden';} ?>">administration</a>
        </main>
        <eside class="flex-item-header r_flex_container_header">
            <img class = "img_header r_flex_item_header" src="<?php echo 'img/administrators_img/'.$admin_img?>"/>
            <span class = "r_flex_item_header">
                <span class = 'r_flex_header details_admin'><?php echo $admin_name.','.' '.$admin_role?></span></br>
                <form action = "lib/api.php" method="post">
                    <input type="submit" name="logout" value="Logout" class="logout-button r_flex_header logout">
                </form>

            </span>
        </eside>  
    </div>
    <div class="line-separator"></div>
    
<!--href="?view=school&action={$_GET['action']}&page={$_GET['page']}&id={$_GET['id']}"-->
<!--href="?view=administration&action={$_GET['action']}&page={$_GET['page']}&id={$_GET['id']}"-->