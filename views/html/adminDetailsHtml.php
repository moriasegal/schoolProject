<?php
        
    $administrators = self::selectRow($id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <!--<title>Movies</title>
            <link rel="stylesheet" type="text/css" href="style.css"> -->
    </head>
    <body>
        <figure class='administrator_figure flex-item-list-view'>
            <img class = 'administrator img' src="<?php echo self::$imagePrefix . '/' .$administrators['image']?>">
        </figure>
        <div class ='administrator_div' >
            <lable for = 'administrato_name'>Name: </lable><span class='administrator_name'><?php echo $administrators['name']?></span>
            <lable for = 'administrator_phone'>Phone: </lable><span class='administrator_phone'>0<?php echo $administrators['phone']?></span>
            <lable for = 'administrator_emaile'>Email: </lable><span class='administrator_email'><?php echo $administrators['email']?></span>
            <lable for = 'administrator_role'>Role: </lable><span class='administrator_role'><?php echo $role?></span>

        </div>
        
    </body>
</html>
