<?php
    session_start();
    include '../../lib/ISavable.php';
    include '../../lib/Person.php';
    include '../../lib/Administrator.php';
    include '../../lib/DB.php';

?>

    <div class='flex-container-list-view flex-admin'>
        <span>
            <h3 class = 'aside_title'>Administractors</h3>
            <a class ='button add_link' href='?view=administration&page=administrator&action=add'>+</a>
        </span>
        <div class='line-separator'></div>
        <?php Administrator::printList(); ?>
    </div>