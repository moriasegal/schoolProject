<?php


    $class_name =$_GET['page'];
    $table_name = $class_name.'s';
    $action = $_GET['action'];
    
        
  
    if (!isset($action)) {
	$form = '';
    } else {
        include 'appendices/edit.php';
    }
    
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/formStyle.css"/>
</head>
<body>   
    <h3 class = 'main_title'><?php echo $action." ".$class_name?></h3>
    <div class='line-separator'></div>
    <div class = 'from_container'>
        <form action="lib/api.php" method="POST" id = 'deleteForm'>
            <input type ="submit" style = "<?php if(($admin['role']==2)&&( $id == $admin['id'])){ echo 'display: none';} ?>" class = "delete_submit" value="Delete" >
            <input type="hidden" name ="page" value ="<?php echo $_GET['page'];?>">
            <input type="hidden" name ="action" value="delete">
            <input type="hidden" name ="id" value="<?php echo $id?>">
        </form>
        <form action="lib/api.php" method="POST" enctype='multipart/form-data' id = 'saveForm'>
            
            <input type ="submit" class = "save_submit" value="Save">
            <input type="hidden" name ="page" value ="<?php echo $_GET['page'];?>">
            <input type="hidden" name ="action" value="<?php echo $action?>">
            <input type="hidden" name ="id" value="<?php echo $id?>">
            <main>

                <?php 
                switch ($table_name) {
                    case 'courses':
                        include 'views/html/coursForm.php';
                        break;

                    case 'administrators':
                        include 'views/html/adminForm.php';
                        break;

                    case 'students':
                        include 'views/html/studentForm.php';
                        break;

                    default:
                        break;
                }
                ?>
            </main>
        </form>
    </div>
    
	
</body>
</html>

