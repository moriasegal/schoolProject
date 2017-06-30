<?php
    include '../../lib/ISavable.php';
    include '../../lib/Person.php';
    include '../../lib/Student.php';
    include '../../lib/Course.php';
    include '../../lib/Administrator.php';
    include '../../lib/DB.php';
 ?> 

<div>                                
    <span>
        <h3 class = 'main_title'><?php echo $_GET['page']?>  <?php echo $_GET['action']?></h3>
    </span>
    <main class="main_container_deta">
        <?php $_GET['page']::printDetails($_GET['id']);?>
    </main>
</div>


