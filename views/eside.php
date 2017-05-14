<?php
    
    $student_list = Student::printList();
    $administractor_list= Administrator::printList();
    $course_list = Course::printList();
    if (!isset($_GET['view'])) {
        header("Location: ?view=school&action={$_GET['action']}&page={$_GET['page']}&id={$_GET['id']}");
	 die();
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="views/esideMaineStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
               
        <div class="flex-container-school-view">
            <?php 
                switch ($_GET['view']) {
                case 'school':  
                    echo "
                    <div class='flex-item-school-view flex-container-list-view>
                        <span>
                            <h3 class = 'aside_title'>Courses</h3>
                            <a class ='button add_link' href='?view=school&page=course&action=add'>+</a>
                        </span>
                        <div class='line-separator'></div>
                        $course_list
                    </div>
                    <div class='flex-item-school-view flex-container-list-view'>
                        <span>    
                            <h3 class = 'aside_title'>Students</h3>
                            <a class ='button add_link' href='?view=school&page=student&action=add'>+</a>
                        </span>
                        <div class='line-separator'></div>
                         $student_list
                    </div>";
                   break;
               case 'administration':
                   echo "
                    <div class='flex-item-school-view flex-container-list-view flex-admin'>
                        <span>
                            <h3 class = 'aside_title'>Administractors</h3>
                            <a class ='button add_link' href='?view=administration&page=administrator&action=add'>+</a>
                        </span>
                        <div class='line-separator'></div>
                        $administractor_list
                    </div>";

                    break;

               default:              
                    break;
                }
            ?>
        </div>
        
        
        
    </body>
</html>