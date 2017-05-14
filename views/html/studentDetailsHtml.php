<?php
        
    $students = self::selectRow($id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <figure class='student_container flex-item-list-view'>
            <img class = 'student_img' src="<?php echo self::$imagePrefix.'/'.$students['image']?>">
        </figure>
        <ul class ='student_ul' >
            <li><lable for = 'student_name'>Name: </lable><span id='student_name'><?php echo $students['name']?></span></li>
            <li><lable for = 'student_phone'>Phone: </lable><span id='student_phone'>0<?php echo $students['phone']?></span></li>
            <li><lable for = 'student_emaile'>Email: </lable><span id='student_email'><?php echo $students['email']?></span></li>
            <li><lable for = 'student_course'>Courses: </lable><ul id='student_course'><li><?php echo $students['course']?></li></ul></li>
        </ul>
    </body>
</html>