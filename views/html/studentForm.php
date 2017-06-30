<?php
    $coursesArr = Course::selectAll();
?>


<main class = "student_form_container">
    <div class="student_form_item">
        <label for = "name">Name: </label>
        <input type = text id ="name" name="name" required>
    </div>
    <div class="student_form_item">
        <label for = 'tel'>Phone: </label>
        <input type = 'tel' id = 'tel' name = 'phone' required>
    </div>
    <div class="student_form_item">
        <label for = 'email'>Email: </label>
        <input type = 'email' id = 'email' name = 'email' required>
    </div>
    <div class="student_form_item">
        <label for = 'student_course'>Courses: </label>
        <select id='student_course' name = 'course'  required>
            <option id = "student_course_default"></option>
             <?php 
             for($i=0, $count = count($coursesArr); $i<$count; $i++){
               echo "<option value ='{$coursesArr[$i]->name}'>{$coursesArr[$i]->name}</option>";
            }?>
        </select>
    </div>
    <div class="student_form_item">
        <label for="image"><img class="edit_img" src ="<?php echo 'img/'.$table_name.'_img/profile.png';?>"></label>
        <input type ="file" id ="image" name ="image" style="visibility: hidden" accept="image/gif, image/jpeg, image/png">
        <input type ="hidden" class="tempImg" name ="img"/>
    </div>

</main>

