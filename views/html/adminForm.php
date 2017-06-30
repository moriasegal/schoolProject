
 
    <main class = "admin_form_container">
    
        <div class = "admin_form_item">
            <label for = "name">Name: </label>
            <input type = text id ="name" name="name" required>
        </div>
        <div class = "admin_form_item">
            <label for = 'tel'>Phone: </label>
            <input type = 'number' id = 'tel' name = 'phone' min="0500000000" max="0589999999" required>
        </div>
        <div class = "admin_form_item">
            <label for = 'email'>Email: </label>
            <input type = 'email' id = 'email' name = 'email' required>
        </div>
        <div class = "admin_form_item">
            <label for = 'password'>Password: </label>
            <input type = 'password' id = 'password' name = 'password' required>
        </div>
        <div class = "admin_form_item">
            <label for = 'rolr'>Role: </label>
            <input type = 'number' id = 'role' <?php if((isset($_GET['id']))&&($userRole == "Manager")&&( $id == $userId)){ echo 'readonly';} ?> name = 'role' value = '<?php // echo $role ?>' min="1" max="3" required>
        </div>
        <div class = "admin_form_item">
            <label for="image" style="width:auto;"><img class="edit_img" src ="<?php echo 'img/'.$table_name.'_img/profile.png';?>"></label>
            <input type ="file" id ="image" name ="image" style="visibility: hidden" >
            <input type ="hidden" name ="img" class="imgTemp" value="profile.png">
        </div>

       
    </main>



