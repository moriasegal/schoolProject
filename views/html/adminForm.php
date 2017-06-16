<?php

?>


 
    <main class = "edit_container">
    
        <table class="edit_table">
            <tr>
                <td><label for = "name">Name: </label></td>
                <td><input type = text id ="name" name="name" value = '<?php // echo $name?>' required></td>
            </tr>
            <tr>
                <td><label for = 'tel'>Phone: </label></td>
                <td><input type = 'tel' id = 'tel' name = 'phone' value = '<?php // echo $phone ?>' min="0500000000" max="0589999999" required></td>
            </tr>
            <tr>
                <td><label for = 'email'>Email: </label></td>
                <td><input type = 'email' id = 'email' name = 'email' value = '<?php // echo $email ?>' required></td>
            </tr>
            <tr>
                <td><label for = 'password'>Password: </label></td>
                <td><input type = 'password' id = 'password' name = 'password' value = '<?php // echo $password ?>' required></td>
            </tr>
            <tr>
                <td><label for = 'rolr'>Role: </label></td>
                <td><input type = 'number' id = 'role' <?php // if(($admin['role']==2)&&( $id == $admin['id'])){ echo 'readonly';} ?> name = 'role' value = '<?php echo $role ?>' min="1" max="3" required></td>
            </tr>
         </table>    
        <label for="image"><img class="edit_img" src ="<?php // echo 'img/'.$table_name.'_img/'.$image;?>"></label>
        <input type ="file" id ="image" name ="image" style="visibility: hidden">
        <input type ="hidden" name ="img" value="<?php // echo $image?>">

       
    </main>



