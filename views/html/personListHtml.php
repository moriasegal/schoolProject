<?php
    if (!isset(self::$tableName)) {
        self::$tableName = 'students';
        die();
    }
         
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

   <figure class='person figure flex-item-list-view'>
        <a class='person_link' >
            <input type="hidden" class="id" value="<?php echo $persons[$i]->id;?>">
            <img class = 'person img' src="<?php echo self::$imagePrefix . '/'.$persons[$i]->image?>">
            <figcaption class ='person figcaption' >
                    <span class='person name'><?php echo $persons[$i]->name?></span></br>
                    <span class='phone'>0<?php echo $persons[$i]->phone?></span>
            </figcaption>
        </a>
    </figure> 

