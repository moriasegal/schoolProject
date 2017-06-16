<?php

    session_start();
    include '../../lib/ISavable.php';
    include '../../lib/Person.php';
    include '../../lib/Student.php';
    include '../../lib/Course.php';
    include '../../lib/Administrator.php';
    include '../../lib/DB.php';


?>

<!--href='?view=school&page=course&action=add'-->
<!--href='?view=school&page=student&action=add'-->
        
    <div class="flex-container-school-view">
        <div class='flex-item-school-view flex-container-list-view '>
            <span>
                <h3 class = 'aside_title'>Courses</h3>
                <a class ='button add_link' >+</a>
            </span>
            <div class='line-separator'></div>
            <?php Course::printList(); ?>
        </div>
        <div class='flex-item-school-view flex-container-list-view'>
            <span>    
                <h3 class  = 'aside_title'>Students</h3>
                <button class ='button add_link' >+</button>
            </span>
            <div class='line-separator'></div>
             <?php Student::printList() ?>
        </div>
    </div>
   
       