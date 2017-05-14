<?php
        
    $persons = self::selectRow($id);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <!--<title>Movies</title>
            <link rel="stylesheet" type="text/css" href="style.css"> -->
    </head>
    <body>
        <figure class='person_container'>
            <img class = 'person_img' src="<?php echo self::$imagePrefix.'/'.$persons['image']?>">
        </figure>
        <ul class ='person_ul' >
            <li><lable for = 'person_name'>Name: </lable><span class='person_name'><?php echo $persons['name']?></span></li>
            <li><lable for = 'person_phone'>Phone: </lable><span class='person_phone'>0<?php echo $persons['phone']?></span></li>
            <li><lable for = 'person_emaile'>Email: </lable><span class='person_email'><?php echo $persons['email']?></span></li>
            <li><lable for = 'person_course'>Courses: </lable><ul class='person_course'><li><?php echo $persons['course']?></li></ul></li>
        </ul>
    </body>
</html>
