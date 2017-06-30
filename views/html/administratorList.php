<?php
    session_start();
    include '../../lib/ISavable.php';
    include '../../lib/Person.php';
    include '../../lib/Student.php';
    include '../../lib/Course.php';
    include '../../lib/Administrator.php';
    include '../../lib/DB.php';

?>

    <div class='flex-container-list-view flex-admin'>
        <span>
            <h3 class = 'aside_title'>Administractors</h3>
            <a class ='button add_link add_link_admin'>+</a>
        </span>
        <div class='line-separator'></div>
        <?php Administrator::printList(); ?>
    </div>
