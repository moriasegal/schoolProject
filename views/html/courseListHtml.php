
<div>   
<figure class='course_figure flex-item-list-view'>
        <a class='course_link'>
            <input type="hidden" class="id" value="<?php echo $courses[$i]->id;?>">
            <img class = 'course_img' src= "<?php echo self::$imagePrefix . '/MU_logo.jpg'?>">
            <figcaption class ='course_figcaption' >
                    <span class='course_name'><?php echo $courses[$i]->name; ?></span>
            </figcaption>
        </a>
    </figure>
</div>