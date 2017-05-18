<?php
    $coursesArr = Course::selectAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
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
                    <label for = 'tel'>Phone: </label>
                </td>
                <td>
                    <input type = 'tel' id = 'tel' name = 'phone' value = '<?php echo $phone?>' required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for = 'email'>Email: </label>
                </td>
                <td>
                    <input type = 'email' id = 'email' name = 'email' value = '<?php echo $email?>' required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for = 'student_course'>Courses: </label>
                </td>
                <td>
                    <select id='student_course' name = 'course'  required>
                        <option value = '<?php echo $course ?>'><?php echo $course ?></option>
                         <?php 
                         for($i=0, $count = count($coursesArr); $i<$count; $i++){
                           echo "<option value ='{$coursesArr[$i]->name}'>{$coursesArr[$i]->name}</option>";
                        }?>
                    </select>
                </td>
            </tr>
            </table>
        <label for="image"><img class="edit_img" src ="<?php echo 'img/'.$table_name.'_img/'.$image;?>"></label>
        <input type ="file" id ="image" name ="image" style="visibility: hidden">
        <input type ="hidden" name ="img" value="<?php echo $image?>">
        
    </main>

</body>
</html>

