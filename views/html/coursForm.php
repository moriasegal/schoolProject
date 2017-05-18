<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
    
    <main class = "edit_container">
        
<!--            <tr>
                <td>-->
<!--                    <form action="lib/api.php" method="POST" style="display: inline;" >
                        <input type ="submit" style = "<?php //if(($admin['role']==2)&&( $id == $admin['id'])){ echo 'display: none';} ?>" class = "delete_submit" value="Delete" >
                        <input type="hidden" name ="page" value ="<?php //echo $_GET['page'];?>">
                        <input type="hidden" name ="action" value="delete">
                        <input type="hidden" name ="id" value="<?php //echo $id?>">
                    </form>-->
<!--                </td>
                <td>-->
<!--        <input type ="submit" class = "save_submit" value="Save">
        <input type="hidden" name ="page" value ="<?php echo $_GET['page'];?>">
        <input type="hidden" name ="action" value="<?php echo $action?>">
        <input type="hidden" name ="id" value="<?php echo $id?>">-->
                <!--</td>-->
            <!--</tr>-->
        <table class="edit_table">
            <tr>
                <td>
                    <label for = "name">Name: </label>
                </td>
                <td>
                    <input type = text id ="name" name="name" value = '<?php echo $name?>' required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for = 'description'>Description: </label>
                </td>
                <td>
                    <textarea id = 'description' name = 'description' rows = '10' cols = '19' required ><?php echo $description?></textarea>
                </td>
            </tr>
            
        </table>        
        <label for="image"><img class="edit_img" src ="<?php echo 'img/'.$table_name.'_img/'.$image;?>"></label>
        <input type ="file" id ="image" name ="image" style="visibility: hidden">
        <input type ="hidden" name ="img" value="<?php echo $image?>">
                
        
    </main>

</body>
</html>