<?php


    $class_name =$_GET['page'];
    $table_name = $class_name.'s';
    $action = $_GET['action'];
    
        
  
    if (!isset($action)) {
	$form = '';
    } else {
        include 'lib/edit.php';
    }
    
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<title>Movies</title>
        <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
    <main>
        
        <h1 class = 'main_title'><?php echo $action." ".$class_name?></h1>
        <div class='line-separator'></div>
        <form action="lib/api.php" method="POST" style="display: inline;" >
            <input type ="submit" class = "delete_submit" value="Delete">
            <input type="hidden" name ="page" value ="<?php echo $_GET['page'];?>">
            <input type="hidden" name ="action" value="delete">
            <input type="hidden" name ="id" value="<?php echo $id?>">
        </form>
        <form action="lib/api.php" method="POST" 
        enctype='multipart/form-data' style="display: inline;">
            <input type ="submit" class = "save_submit" value="Save"></br>
            <input type="hidden" name ="page" value ="<?php echo $_GET['page'];?>">
            <input type="hidden" name ="action" value="<?php echo $action?>">
            <input type="hidden" name ="id" value="<?php echo $id?>">
            <label for = "name">Name: </label>
            <input type = text id ="name" name="name" value = '<?php echo $name?>'><br>
            
    
            <?php 
            switch ($table_name) {
                case 'courses':
                    echo "<label for = 'description'>Description: </label>
                        <textarea id = 'description' name = 'description' rows = '10' cols = '50' style = 'border:none' >$description</textarea><br>";
                    break;

                case 'administrators':
                    echo "<label for = 'tel'>Phone: </label>
                        <input type = 'tel' id = 'tel' name = 'phone' value = '$phone'><br>
                        <label for = 'email'>Email: </label>
                        <input type = 'email' id = 'email' name = 'email' value = '$email'><br>
                        <label for = 'password'>Password: </label>
                        <input type = 'password' id = 'password' name = 'password' value = $password><br>
                        <label for = 'rolr'>Role: </label>
                        <input type = 'text' id = 'role' name = 'role' value = $role><br>";
                    break;

                case 'students':
                    echo "<label for = 'tel'>Phone: </label>
                        <input type = 'tel' id = 'tel' name = 'phone' value = '$phone'>
                        <label for = 'email'>Email: </label>
                        <input type = 'email' id = 'email' name = 'email' value = '$email'>
                        <lable for = 'student_course'>Courses: </lable>
                        <input type = 'text' class='student_course' name = 'course' value = '$course'>";
                    break;

                default:
                    break;
            }
            ?>
            <label for="image"><img src ="<?php echo 'img/'.$table_name.'_img/'.$image;?>"></label><br>
            <input type ="file" id ="image" name ="image" style="visibility: hidden"><br>
            <input type ="hidden" name ="img" value="<?php echo $image?>">
            
        </form>
        <!--<img class = "edit_img" src ="<?php// echo 'img/'.$row['pic'];?>">
        <form action="api.php?page=edit" method="POST" 
        enctype='multipart/form-data'>
            <input type='file' name='poster' style="color: whitesmoke;">
            <input type = 'number' name = 'id' value = "<?php //echo $row['id']?>" readOnly>
           <input type='text' name ='name' value= "<?php //echo $row['name'];?>">
            <input type='date' name='year' value="<?php //echo $row['year'].'-01-01';?>">
            <input type="hidden" name ="img" value ="<?php// echo $row['pic'];?>">
            <input type="submit">
        </form>-->
    </main>
	
</body>
</html>

