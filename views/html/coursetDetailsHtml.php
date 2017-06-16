<?php
        
     $courses = self::selectRow($id);
     $students = self::student($id);
      $admin = Administrator::selectRow($_SESSION["user_id"]);
?>

    <figure class='course_figure_details'>
        <img class = 'details_img' src=" <?php echo self::$imagePrefix .'/'. $courses['image']?>">
    </figure>
    <ul class ='deta_ul' >
        <li>
            <a  <?php if(($admin['role'] == 3)&&($_GET['page'] == 'course')){ echo 'readonly';}?>href="?view=<?php echo $_GET['view']?>&page=<?php echo $_GET['page']?>&action=edit&id=<?php echo $_GET['id']?>">
                <span id='course_name_data'><?php echo $courses['name']?></span>
            </a>
        </li>
        <li class="stdNum">
            <span ><?php echo ' ('.count($students).' students)';?></span>
        </li>
        <li>
            <lable for = 'course_description_data'>Description: </lable>
            <p id='course_description_data'><?php echo $courses['description']?></p>
        </li>
        <li>
            <lable for = 'course_students'>Students: </lable>
            <ul id = 'course_students'>
            <?php for($i=0, $count = count($students); $i<$count; $i++){
               echo "<li>".$students[$i]['name']."</li>";
            }?>
            </ul>
        </li>
    </ul>


