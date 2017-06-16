<?php

?>

    <main class = "edit_container">
        
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