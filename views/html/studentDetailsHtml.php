<?php
        
    $students = self::selectRow($id);
    $json_data = json_encode($students);
    file_put_contents('../../json/details.json', $json_data);
?>

<figure class='student_container flex-item-list-view'>
    <img class = 'details_img' src="<?php echo self::$imagePrefix.'/'.$students['image']?>">
</figure>
<ul class ='deta_ul' >
    <li>
        <a class="studentEditLink">
            <span id='student_name'><?php echo $students['name']?></span>
        </a>
    </li>
    <li><lable for = 'student_phone'>Phone: </lable><span id='student_phone'>0<?php echo $students['phone']?></span></li>
    <li><lable for = 'student_emaile'>Email: </lable><span id='student_email'><?php echo $students['email']?></span></li>
    <li><lable for = 'student_course'>Courses: </lable><ul id='student_course'><li><?php echo $students['course']?></li></ul></li>
</ul>

