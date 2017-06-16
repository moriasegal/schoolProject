<?php

    if (!isset($_GET['view'])) {
        header("Location: ?view=school&action={$_GET['action']}&page={$_GET['page']}&id={$_GET['id']}");
	 die();
    }

    switch ($_GET['view']) {
    case 'school':
        include 'views/html/schoolList.php';

       break;
   case 'administration':

        include 'views/html/administratorList.php';

        break;

   default:              
        break;
    }
?>
        
        
        