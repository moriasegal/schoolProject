<?php
    if (!isset(self::$tableName)) {
        self::$tableName = 'students';
        die();
    }
    $admin = Administrator::selectRow($_SESSION["user_id"]);
         
    switch (self::$tableName) {
        case 'students':  
            $persons = $students;
            $page = 'student';
            $view = 'school';

           break;
       case 'administrators':
            $persons = $administrators;
            $page = 'administrator';
            $view = 'administration';
            break;

       default:              
            break;
    }
        
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
       <figure class='person figure flex-item-list-view'>
            <a class='person link' <?php if((self::$tableName === 'administrators')&&($admin['role']==2)&&($persons[$i]->role == 1)){ echo 'readonly';} ?>href='?view=<?php echo $view ?>&page=<?php echo $page;?>&action=details&id=<?php echo $persons[$i]->id?>'>
                <img class = 'person img' src="<?php echo self::$imagePrefix . '/'.$persons[$i]->image?>">
                <figcaption class ='person figcaption' >
                        <span class='person name'><?php echo $persons[$i]->name?></span></br>
                        <span class='phone'>0<?php echo $persons[$i]->phone?></span>
                </figcaption>
            </a>
        </figure> 
    </body>
</html>
