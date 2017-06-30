
<main class = "course_form_container">
    <div class="course_form_item">
        <label for = "name">Name: </label>
        <input type = text id ="name" name="name" required>
    </div>
    <div class="course_form_item">
            <label for = 'description'>Description: </label>
            <textarea id = 'description' name = 'description' rows = '10' cols = '19' required ></textarea>
    </div>
    <div class="course_form_item">    
        <label for="image"><img class="edit_img" src ="<?php echo 'img/'.$table_name.'_img/profile.png';?>"></label>
        <input type ="file" id ="image" name ="image" style="visibility: hidden">
        <input type ="hidden" id ="imgTemp" name ="img"/>
    </div>


</main>