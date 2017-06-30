<?php
    include '../lib/ISavable.php';
    include '../lib/Person.php';
    include '../lib/Student.php';
    include '../lib/Course.php';
    include '../lib/Administrator.php';
    include '../lib/DB.php';
    
    session_start();
    $userRole = $_SESSION['user_role'];
    $userId = $_SESSION['user_id'];
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $class_name = $_GET['page'];
    $table_name = $class_name.'s';
    $action = $_GET['action'];
  
    
   
?>

    <h3 class = 'main_title'><?php echo $action." ".$class_name?></h3>
    <div class='line-separator'></div>
    <div class = 'from_container'>
        <form action="lib/api.php" method="POST" id = 'deleteForm'>
            <input type ="submit" style = "<?php if(( $id == $userId)&&($class_name == 'administrator')){echo 'display: none';}?>" class = "delete_submit" value="Delete" >
            <input type="hidden" name ="page" value ="<?php echo $class_name;?>">
            <input type="hidden" name ="action" value="delete">
            <input type="hidden" name ="id" value="<?php echo $id?>">
        </form>
        
        <form action="lib/api.php" method="POST" enctype='multipart/form-data' id = 'saveForm'>
            <input type ="submit" class = "save_submit" value="Save">
            <input type="hidden" name ="page" value ="<?php echo $class_name;?>">
            <input type="hidden" name ="action" value="<?php echo $action?>">
            <input type="hidden" name ="id" value="<?php echo $id?>">
            <main>

                <?php 
                switch ($table_name) {
                    case 'courses':
                        include 'html/coursForm.php';
                        break;

                    case 'administrators':
                        include 'html/adminForm.php';
                        break;

                    case 'students':
                        include 'html/studentForm.php';
                        break;

                    default:
                        break;
                }
                ?>
            </main>
        </form>
    </div>

