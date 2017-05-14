<?php
        
     $courses = self::selectRow($id);
     $students = self::student($id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
    </head>
    <body>
        <figure class='course_figure_details'>
            <img class = 'course_img_details' src=" <?php echo self::$imagePrefix .'/'. $courses['image']?>">
        </figure>
        <ul class ='course_div_details' >
            <li>
                <lable for = 'course_name'>Name: </lable>
                <span class='course_name'><?php echo $courses['name']?></span>
            </li>
            <li>
                <lable for = 'course_description'>Description: </lable>
                <p class='course_description'><?php echo $courses['description']?></p>
            </li>
            <li>
                <lable for = 'course_students'>Students: </lable>
                <ul>
                <?php for($i=0, $count = count($students); $i<$count; $i++){
                   echo "<li>".$students[$i]['name']."</li>";
                }?>
                </ul>
            </li>
        </ul>
    </body>
</html>


